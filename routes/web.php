<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */

Route::get('/', [PostController::class, 'index']);

Route::get('/createBlog', [PostController::class, 'createBlog']);

// Task 4: Add the showTableData() route here
Route::post('storeBlog/{type}/{id}', [PostController::class, 'storeBlog']);

// Task 7: Add the storeBlog() route here
Route::get('showTableData', [PostController::class, 'showTableData']);

// Task 8: Add the storeDraftorPublish() route here


// Task 10: Add the deleteBlog() route here


// Task 11: Add the editBlog() route here


// Task 12: Add the blogResult() route here

