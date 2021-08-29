<?php

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

Route::get('/', [App\Http\Controllers\ArticleController::class, 'index']);

Route::get('articles', [App\Http\Controllers\ArticleController::class, 'index']);

Route::get('articles/create', [App\Http\Controllers\ArticleController::class, 'create']);

Route::post('articles', [App\Http\Controllers\ArticleController::class, 'store']);

Route::get('articles/{id}/edit', [App\Http\Controllers\ArticleController::class, 'edit']);

Route::put('articles/{id}', [App\Http\Controllers\ArticleController::class, 'update']);

Route::delete('articles/{id}', [App\Http\Controllers\ArticleController::class, 'destroy']);

Route::get('articles/categorie', [App\Http\Controllers\ArticleController::class, 'index2']);
Route::get('articles/encherir/{id}',[App\Http\Controllers\EncherirController::class, 'enche']);
Route::get('articles/{id}',[App\Http\Controllers\ArticleController::class, 'show']);

//Route::get('articles/{id}' , [App\Http\Controllers\ArticleController::class, 'show'] ) ;
 //Route::resource('articles','ArticleController');
 //Route::get('administrateurs', [App\Http\Controllers\AdministrateurController::class, 'index']);

//Route::delete('administrateurs/{id}', [App\Http\Controllers\AdministrateurController::class, 'destroy']);
Route::namespace('Admin')->group(function(){
Route::get('/admin/login',[App\Http\Controllers\Admin\Auth\LoginController\showLoginForm::class])->name('admin.login');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
