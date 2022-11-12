<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller {

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
			$image = imagecreatefrompng( $source );
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
}