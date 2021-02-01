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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes(['register' => false]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//  Route::get('/store', 'StoreController@index');
// Route::get('/store', 'StoreController@create');
// Route::resource('store', 'StoreController');
// Route::post('/store/store', 'StoreController@store');

	// Route::get('password-reset', 'Auth\ForgotPasswordController@showForm'); //I did not create this controller. it simply displays a view with a form to take the email
	// Route::post('password-reset', 'Auth\ForgotPasswordController@sendPasswordResetToken')->name('password-reset');
	// Route::get('reset-password/{token}', 'Auth\ForgotPasswordController@showPasswordResetForm');
	// Route::post('reset-password/{token}', 'Auth\ForgotPasswordController@resetPassword');
	// Route::get('text-sms', 'Auth\ForgotPasswordController@textSms'); //I did not create this controller. it simply displays a view with a form to take the email

Route::get('/user',function()  
{  
  return User::find(store_id)->Store;  
}  
);  
Route::get('/store',function()  
{  
  return Store::find(id)->User;  
}  
); 

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('firebase-phone-authentication', 'HomeController@invisiblecaptcha')->name('invisiblecaptcha');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

	Route::resource('store', 'StoreController');
	Route::post('/store/store', 'StoreController@store');
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'PageController@index']);
	 
	// Route::resource('client', 'ClientController');
	Route::post('/client/store', 'ClientController@store');
	Route::get('/client/index', 'ClientController@index');
	Route::get('/client/create', 'ClientController@create');
	Route::get('/client/view', 'ClientController@view');
	Route::put('client/view/{id}', ['as' => 'profile.update', 'uses' => 'ClientController@view']);


	
	

	

});





