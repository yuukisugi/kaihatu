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
Route::get('/','TopController@index');
Route::get('home', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function() {
   
});
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
     # 追記
});
 Route::get('home', 'HomeController@home');
 Route::get('top', 'TopController@index');
 Route::get('profile/user', 'ProfileController@add');
 Route::post('profile/edit', 'ProfileController@updete')->middleware('auth');
 
 Route::get('hotels/create', 'HotelController@add')->middleware('auth');
 Route::post('hotels/create', 'HotelController@create')->middleware('auth');
 Route::get('hotels', 'HotelController@index')->middleware('auth');
 Route::get('hotels/edit', 'HotelController@edit')->middleware('auth'); // 追記
 Route::post('hotels/edit', 'HotelController@update')->middleware('auth'); // 追記
 Route::get('hotels/delete', 'HotelController@delete')->middleware('auth');
 
 Route::get('hotels/all_read_list', 'HotelController@all_read_list');
 Route::get('hotels/hotel_read_list', 'HotelController@hotel_read_list');
 Route::get('hotels/ryokan_read_list', 'HotelController@ryokan_read_list');
 Route::get('hotels/read_article', 'HotelController@read_article');// 追記
 Route::post('hotels/read_article', 'HotelController@read'); // 追記
 Route::post('hotels/add_review', 'HotelController@add_review');
 
 Route::get('restaurants/create', 'RestaurantController@add')->middleware('auth');
 Route::post('restaurants/create', 'RestaurantController@create')->middleware('auth');
 Route::get('restaurants', 'RestaurantController@index')->middleware('auth');
 Route::get('restaurants/edit', 'RestaurantController@edit')->middleware('auth'); // 追記
 Route::post('restaurants/edit', 'RestaurantController@update')->middleware('auth'); // 追記
 Route::get('restaurants/read_list', 'RestaurantController@read_list')->middleware('auth');
 Route::get('restaurants/read_article', 'RestaurantController@read_article');// 追記
 Route::post('restaurants/read_article', 'RestaurantController@read'); // 追記
 
 Route::get('test', 'TestController@index');
 
 Route::get('scss', function () {
    return view('for-scss');
});

// レビュー（星付き）
Route::get('product', 'ProductController@index');
Route::get('product/list', 'ProductController@list');
Route::post('product/review', 'ProductController@review');

// 通報
Route::get('report/create', 'ReportController@create');
Route::post('report/create', 'ReportController@create');
Route::post('report', 'ReportController@store');

// お問い合わせ
//入力ページ
Route::get('/contact', 'ContactController@index')->name('contact.index');

//確認ページ
Route::post('/contact/confirm', 'ContactController@confirm')->name('contact.confirm');

//送信完了ページ
Route::post('/contact/thanks', 'ContactController@send')->name('contact.send');