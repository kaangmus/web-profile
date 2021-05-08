<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('posts/{slug}', [PostController::class, 'bySlug'])->name('posts.by_slug');
Route::resource('posts', PostController::class)
	->except([
    'create', 'store', 'update', 'destroy'
]);

Route::get('pages/{slug}', [PageController::class, 'bySlug'])->name('pages.by_slug');
Route::resource('pages', PageController::class)
	->except([
    	'create', 'store', 'update', 'destroy'
]);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// 	dd(Voyager::image($post->image));


