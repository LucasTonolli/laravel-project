<?php

use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\BlogController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers\Site'], function(){
    Route::get(uri:'/', action:HomeController::class)->name('site.home');

    Route::get('/produtos', 'CategoryController@index')->name('site.products');
    Route::get('/produtos/{slug}', 'CategoryController@show')->name('site.product.category');
    Route::get('/blog', BlogController::class)->name('site.blog');

    //Retoorna apenas uma view
    Route::view('/sobre', 'site.sobre.index')->name('site.about');

    Route::get('/contato', 'ContactController@index')->name('site.contact');
    Route::post('/contato', 'ContactController@sendContactForm')->name('site.contact.form');
});


// Route::namespace('Site')->get('/', HomeController::class);
