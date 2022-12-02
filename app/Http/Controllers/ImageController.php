<?php

namespace App\Http\Controllers;

use ZipArchive;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller {

	public function home()
	{
		return view('pages.compress');
	}

	public function resize()
	{
		return view('pages.resize');
	}

	public function post(Request $request)
	{	
		$user = $request->user;
		if ($request->file('file') == null) {
			return back();
		}
		
		foreach($request->file('file') as $file){
            $name = $file->getClientOriginalName();
			$target = storage_path('app/public/upload/'.$user);
			if ( !is_dir( $target ) ) {
				mkdir( $target, 777);
				chmod("$target", 0755);
			}
			$compressedImage = $this->compressImage( $file, $target.'/'.$name, 40);
        }

		$zipname = $target.'.zip';
		// $zip = new ZipArchive;
		// $zip->open($zipname, ZipArchive::CREATE);
		// if ($handle = opendir($target)) {
		//   while (false !== ($entry = readdir($handle))) {
		// 	if ($entry != "." && $entry != ".." && !strstr($entry,'.php')) {
		// 		// return $entry;
		// 		$zip->addFile(storage_path('app/public/upload/'.$user.'/'.$entry), $entry);
		// 	}
		//   }
		//   closedir($handle);
		// }
	
		// $zip->close();
		$this->zipCreate($zipname, $target, $user);
		$headers = ["Content-Type"=>"application/zip"];
        $fileName = $user.".zip";
		
		return response()
        ->download(storage_path('app/public/upload/'.$user.'.zip'), $fileName, $headers)->deleteFileAfterSend(true);
		
	}

	public function zipCreate($sourceFolder, $target, $user)
	{
		$zip = new ZipArchive;
		$zip->open($sourceFolder, ZipArchive::CREATE);
		if ($handle = opendir($target)) {
		  while (false !== ($entry = readdir($handle))) {
			if ($entry != "." && $entry != ".." && !strstr($entry,'.php')) {
				// return $entry;
				$zip->addFile(storage_path('app/public/upload/'.$user.'/'.$entry), $entry);
			}
		  }
		  closedir($handle);
		}
	
		$zip->close();

		return $user.".zip";
	}

	public function zipAndDownload($folderName)
	{
		$zipname = $folderName.'.zip';
		$zip = new ZipArchive;
		$zip->open($zipname, ZipArchive::CREATE);
		if ($handle = opendir('.')) {
		  while (false !== ($entry = readdir($handle))) {
			if ($entry != "." && $entry != ".." && !strstr($entry,'.php')) {
				$zip->addFile($entry);
			}
		  }
		  closedir($handle);
		}
	
		$zip->close();
	
		header('Content-Type: application/zip');
		header("Content-Disposition: attachment; filename='adcs.zip'");
		header('Content-Length: ' . filesize($zipname));
		header("Location: adcs.zip");
	
	}

	public function compress( Request $request ) {
		$rootFolder    = 'upload';
		$newFolder     = 'new-upload';
		$newFolderPath = storage_path( 'app/public/' . $newFolder . '/' );

		$folders = $this->getFolder( $rootFolder );

		// unset from folder  [.., .]
		$folderCount = COUNT( $folders );
		unset( $folders[$folderCount - 1] );
		unset( $folders[$folderCount - 2] );

		foreach ( $folders as $key => $folder ) {
			$files = $this->getFile( $rootFolder, $folder );

			// unset from file  [.., .]
			$filesCount = COUNT( $files );
			unset( $files[$filesCount - 1] );
			unset( $files[$filesCount - 2] );

			foreach ( $files as $key => $image ) {
				$newPath  = $newFolderPath . $folder;
				$fileName = $image;
				// create directory if not found
				if ( !is_dir( $newPath ) ) {
					mkdir( $newPath );
				}

				//  target path to upload
				$target = $newPath . '/' . $fileName;

				// existing file path
				$source   = storage_path( 'app/public/' . $rootFolder . '/' . $folder . '/' . $fileName );
				$filesize = filesize( $source ) / 1024;
				if ( $filesize > 200 ) {
					// final compress file and upload to new path
					$compressedImage = $this->compressImage( $source, $target, 75 );
				} else {
					$compressedImage = $this->compressImage( $source, $target, 100 );
				}

			}
		}

	}

	function compressImage( $source, $destination, $quality ) {
		// Get image info
		$imgInfo = getimagesize( $source );
		$mime    = $imgInfo['mime'];

		// Create a new image from file
		switch ( $mime ) {
		case 'image/jpeg':
			$image = imagecreatefromjpeg( $source );
			break;
		case 'image/png':
			$image = @imagecreatefrompng( $source );
			break;
		case 'image/gif':
			$image = imagecreatefromgif( $source );
			break;
		default:
			$image = imagecreatefromjpeg( $source );
		}
		// Save image
		imagejpeg( $image, $destination, $quality );

		// Return compressed image
		return $destination;
	}

	public function getFile( $rootFolder, $folder ) {
		$dir = public_path( 'storage/' . $rootFolder . '/' . $folder );
		// Sort in ascending order - this is default
		$a = scandir( $dir );

		// Sort in descending order
		$b = scandir( $dir, 1 );

		return $b;
	}

	public function getFolder( $rootFolder ) {
		$dir = public_path( 'storage/' . $rootFolder );
		// Sort in ascending order - this is default
		$a = scandir( $dir );

		// Sort in descending order
		$b = scandir( $dir, 1 );

		return $b;
	}

	public function resizePost(Request $request)
	{		
		if ($request->file('file') == null) {
			return back();
		}
		
		$this->validate($request, [
            'width' => 'required|numeric',
            'height' => 'required|numeric'
        ]);

		$user = $request->user;
		$width = $request->width;
		$height = $request->height;
		// return$request;
		foreach($request->file('file') as $file){
            $name = $file->getClientOriginalName();
			$target = storage_path('app/public/upload/'.$user);
			if ( !is_dir( $target ) ) {
				mkdir( $target, 777);
				chmod("$target", 0755);
			}
			$image_resize = Image::make($file->getRealPath());
            $image_resize->resize($width,$height);        
            $path = $target .'/'. $name;
            $image_resize->save($path);
        }
		$zipname = $target.'.zip';

		$this->zipCreate($zipname, $target, $user);
		$headers = ["Content-Type"=>"application/zip"];
        $fileName = $user.".zip";
		
		return response()
        ->download(storage_path('app/public/upload/'.$user.'.zip'), $fileName, $headers)->deleteFileAfterSend(true);
		
	}
}