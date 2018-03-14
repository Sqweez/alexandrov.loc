<?php

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
use Illuminate\Support\Facades\Auth;

Route::group(['middleware' => 'main'], function () {
	Route::match(['get','post'], '/', ['uses' => 'IndexController@execute', 'as' => 'main_page']);
	Route::resource('all_shares','SharesController');
	Route::resource('all_discounts','DiscountController');
	Route::resource('for_owners', 'OwnerController');
	Route::resource('about_card', 'AboutCardController');
	Route::resource('comments', 'CommentController');
	Route::get('/logout', ['uses' => 'IndexController@logout', 'as' => 'logout']);
});
Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function(){
	Route::get('/',['uses' => 'AdminController@index', 'as' => 'admin']);
	Route::resource('users','UserController');
	Route::match(['get', 'post'], 'users/ban/{id}', ['uses' => 'UserController@ban', 'as' => 'user.ban']);
	Route::get('users/unban/{id}', ['uses' => 'UserController@unban', 'as' => 'user.unban']);
	Route::resource('globals', 'GlobalsController');
	Route::resource('categories', 'CategoriesController');
	Route::get('admin_discounts/accept/{id}', ['uses' => 'AdminDiscountsController@accept', 'as' => 'discount.accept']);
	Route::match(['get','post'],'admin_discounts/decline/{id}', ['uses' => 'AdminDiscountsController@decline', 'as' => 'discount.decline']);
	Route::resource('admin_discounts', 'AdminDiscountsController');
	Route::post('discounts/ajax', ['uses'=>'DiscountsController@ajax','as' => 'ajaxSubCat']);
});
Route::group(['prefix' => 'profile', 'middleware' => ['web', 'auth']], function (){
	Route::get('/',['uses' => 'ProfileController@show', 'as' => 'profile']);
	Route::resource('shares', 'ShareController');
	Route::resource('discounts', 'DiscountsController');
	Route::post('discounts/ajax', ['uses'=>'DiscountsController@ajax','as' => 'ajaxSubCat']);
	Route::resource('shops', 'ShopController');
	Route::resource('user', 'UserController');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');