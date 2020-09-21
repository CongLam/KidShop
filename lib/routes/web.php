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


//______________________________________________________FRONTEND______________________________________________________
Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'FrontendController@getHome');

    Route::get('about', 'FrontendController@getAbout');

    Route::get('contact', 'FrontendController@getContact');


    //detail product
    Route::get('detail/{cateId}/{id}/{slug}.html', 'FrontendController@getDetail');

    //category product
    Route::get('category/{id}/{slug}.html', 'FrontendController@getCategory');

    //cart
    Route::group(['prefix' => 'cart'], function () {
        Route::get('add/{id}', 'CartController@getAddCart');
        Route::get('show', 'CartController@getShowCart');
        Route::get('delete/{rowId}', 'CartController@getDeleteCart');
        Route::get('update', 'CartController@getUpdateCart');
        Route::get('delete', 'CartController@getDeleteCartAjax');


        //checkout
        Route::get('checkout', 'CheckoutController@getCheckOut');
        Route::post('checkout', 'CheckoutController@postCheckOut');
        Route::get('complete', 'CheckoutController@getComplete');
    });

    //search
    Route::get('search', 'FrontendController@getSearch');


});
// Route::post('/add-cart-ajax', 'CartController@addCartAjax');
// Route::get('/show-cart', 'CartController@showCart');



//______________________________________________________BACKEND______________________________________________________
Route::group(['namespace' => 'Admin'], function () {
    //login
    Route::group(['prefix' => 'login','middleware'=>'ChecklogedIn'], function(){
        Route::get('/', 'LoginController@getLogin');
        Route::post('/', 'LoginController@postLogin');
    });

    //logout
    Route::get('logout', 'HomeController@getLogout');

    //admin
    Route::group(['prefix' => 'admin','middleware'=>'ChecklogedOut'], function () {
        Route::get('home', 'HomeController@getHome');

        Route::group(['prefix' => 'user'], function () {
            Route::get('/', 'UserController@getUser');
            Route::post('/', 'UserController@postUser');

            Route::get('edit/{id}', 'UserController@getEditUser');
            Route::post('edit/{id}', 'UserController@postEditUser');

            Route::get('delete/{id}', 'UserController@getDeleteUser');
        });

        //category
        Route::group(['prefix' => 'category'], function () {
            Route::get('/', 'CategoryController@getCategory');
            Route::post('/', 'CategoryController@postCategory');

            Route::get('edit/{id}', 'CategoryController@getEditCategory');
            Route::post('edit/{id}', 'CategoryController@postEditCategory');

            Route::get('delete/{id}', 'CategoryController@getDeleteCategory');
        });

        //product
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
