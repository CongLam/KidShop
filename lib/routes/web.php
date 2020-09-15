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


//______________________________________________________BACKEND______________________________________________________
Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'FrontendController@getHome');

    Route::get('detail/{id}/{slug}.html', 'FrontendController@getDetail');

    Route::get('category/{id}/{slug}.html', 'FrontendController@getCategory');

});






//______________________________________________________BACKEND______________________________________________________
Route::group(['namespace' => 'Admin'], function () {
    Route::group(['prefix' => 'login','middleware'=>'ChecklogedIn'], function(){
        Route::get('/', 'LoginController@getLogin');
        Route::post('/', 'LoginController@postLogin');
    });

    Route::get('logout', 'HomeController@getLogout');
    Route::group(['prefix' => 'admin','middleware'=>'ChecklogedOut'], function () {
        Route::get('home', 'HomeController@getHome');

        Route::group(['prefix' => 'user'], function () {
            Route::get('/', 'UserController@getUser');
            Route::post('/', 'UserController@postUser');

            Route::get('edit/{id}', 'UserController@getEditUser');
            Route::post('edit/{id}', 'UserController@postEditUser');

            Route::get('delete/{id}', 'UserController@getDeleteUser');
        });

        Route::group(['prefix' => 'category'], function () {
            Route::get('/', 'CategoryController@getCategory');
            Route::post('/', 'CategoryController@postCategory');

            Route::get('edit/{id}', 'CategoryController@getEditCategory');
            Route::post('edit/{id}', 'CategoryController@postEditCategory');

            Route::get('delete/{id}', 'CategoryController@getDeleteCategory');
        });

        Route::group(['prefix' => 'product'], function () {
            Route::get('/', 'ProductController@getProduct');

            Route::get('add', 'ProductController@getAddProduct');
            Route::post('add', 'ProductController@postAddProduct');

            Route::get('edit/{id}', 'ProductController@getEditProduct');
            Route::post('edit/{id}', 'ProductController@postEditProduct');

            Route::get('delete/{id}', 'ProductController@getDeleteProduct');
        });
    });

});
