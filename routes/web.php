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
    Route::get(uri:'/', action:HomeController::class);

    Route::get('/produtos', 'CategoryController@index');
    Route::get('/produtos/{slug}', 'CategoryController@show');
    Route::get('/blog', BlogController::class);

    //Retoorna apenas uma view
    Route::view('/sobre', 'site.sobre.index');

    Route::get('/contato', 'ContactController@index');
    Route::post('/contato', 'ContactController@sendContactForm');
});


// Route::namespace('Site')->get('/', HomeController::class);
