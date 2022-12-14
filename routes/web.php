<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get( '/', [ImageController::class, 'home'] )->name( 'home' );
Route::post( '/post', [ImageController::class, 'post'] )->name( 'post' );
Route::get( '/resize', [ImageController::class, 'resize'] )->name( 'resizer' );
Route::post( '/resize', [ImageController::class, 'resizePost'] )->name( 'resizer.post' );
Route::Get( '/clippy', [ImageController::class, 'clippy'] )->name( 'clippy' );

Route::get( '/api/tocken', [ImageController::class, 'tocken'] );

// Route::get( '/', [ImageController::class, 'compress'] );