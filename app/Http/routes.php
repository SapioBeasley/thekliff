<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', [
	'as' => 'index',
	'uses' => 'IndexController@showHome'
	]);

	Route::get('/cart', [
		'as' => 'cart.index',
		'uses' => 'CartController@index'
	]);

	Route::get('/shop', [
		'as' => 'shop.index',
		'uses' => 'ShopController@index'
	]);

	Route::get('/shop/{id}', [
		'as' => 'shop.show',
		'uses' => 'ShopController@show'
	]);

	Route::get('/checkout', [
		'as' => 'checkout.index',
		'uses' => 'CheckoutController@index'
	]);

	Route::get('/shipping', [
		'as' => 'shipping.index',
		'uses' => 'PagesController@showShipping'
	]);

	Route::get('/returns', [
		'as' => 'returns.index',
		'uses' => 'PagesController@showReturns'
	]);

	Route::get('/privacy', [
		'as' => 'privacy.index',
		'uses' => 'PagesController@showPrivacy'
	]);

	Route::get('/about', [
		'as' => 'about.index',
		'uses' => 'PagesController@showAbout'
	]);

	Route::get('/category', [
		'as' => 'category.index',
		'uses' => 'CategoryController@index'
	]);

	Route::get('/category/{category}', [
		'as' => 'category.show',
		'uses' => 'CategoryController@show'
	]);

	Route::get('/contact', [
		'as' => 'contact.index',
		'uses' => 'ContactController@index'
	]);

	Route::get('/faq', [
		'as' => 'faq.index',
		'uses' => 'PagesController@showFaq'
	]);

	Route::get('/orders', [
		'as' => 'orders.index',
		'uses' => 'OrdersController@index'
	]);

	Route::group(['prefix' => 'admin'], function () {
		Route::get('/', 'AdminController@dashboard');
		Route::get('/orders', 'AdminController@showOrders');
		Route::get('/orders/{orderNumber}', 'AdminController@showSingleOrder');
		Route::get('/products', 'AdminController@showProducts');

		Route::put('/products/{id}/update', [
			'as' => 'admin.product.update',
			'uses' => 'AdminController@updateProducts'
		]);

		Route::get('/products/create', [
			'as' => 'admin.product.create',
			'uses' => 'AdminController@createProducts'
		]);

		Route::get('/products/store', [
			'as' => 'admin.product.store',
			'uses' => 'AdminController@storeProducts'
		]);

		Route::get('/products/{id}', 'AdminController@editProducts');


	});
});
