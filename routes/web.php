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
	// Route::get('/store/{id}/edit', 'StoreController@edit');
	//Route::get('/store/index', 'StoreController@index');
	Route::post('/store/edit/{id}','StoreController@update');
	//Route::post('/store',['as'=>'store/update', 'uses' =>'StoreController@update']);
	Route::post('/store/show', 'StoreController@show');
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'PageController@index']);
	 
	//Route::resource('client', 'ClientController');
	Route::post('/client/store', 'ClientController@store');
	Route::get('/client/index', 'ClientController@index');
	Route::get('/client/create', 'ClientController@create');
	Route::get('/client/view/{id}', 'ClientController@view');
	Route::get('/client/view/{id}', 'ClientController@measurementStore');

	// Route::get('/client/edit/{id}', 'ClientController@update');
	// Route::get('/client/edit/{id}', 'ClientController@update');
	Route::get('/client/show', 'ClientController@show');
	Route::get('/client/delete/{id}', 'ClientController@destroy');
	

	Route::get('/client/edit/{id}', function(Request $request){
		dd($request);
	});
	// Route::put('client/view/{id}', ['as' => 'profile.update', 'uses' => 'ClientController@view']);
	

	

});





