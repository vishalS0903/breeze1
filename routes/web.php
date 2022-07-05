<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontController;
use App\Models\Category;
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


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    // Route::view('form', 'form');
    // Route::view('blog/form', 'blog.create')->name('blog.create');

    Route::get('/',[FrontController::class,'index'])->name('welcome');
    Route::get('post/{id}',[FrontController::class,'show'])->name('post.show');

    Route::post('stored',[BlogController::class,'store'])->name('store');
    Route::get('form',[BlogController::class,'create'])->name('blog.create');

    Route::get('blog',[BlogController::class,'index'])->name('blog.index');


Route::get('table',[BlogController::class,'index'])->name('table');
// Route::get('edit/{id}',[FormController::class,'edit'])->name('edit');
Route::get('edit/{id}',[BlogController::class,'edit'])->name('blog.editform');
Route::post('update/{id}',[BlogController::class,'update'])->name('blog.update');
Route::get('delete/{id}',[BlogController::class,'delete'])->name('blog.delete');
    //



    //category
 Route::view('category/create', 'category.create')->name('category.create');
    Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('category/index',[CategoryController::class,'index'])->name('category.index');

Route::get('category/editform/{id}',[CategoryController::class,'edit'])->name('category.editform');
Route::post('category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('category/delete/{id}',[CategoryController::class,'delete'])->name('caregory.delete');

});

