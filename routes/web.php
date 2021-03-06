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



// Route::get('home', function(){
//     return View('welcome'); // Your Blade template name
// });
Route::get('registerman', function(){
    return View('auth/registerman'); // Your Blade template name
});


Route::get('registersto', function(){
    return View('auth/registersto'); // Your Blade template name
});

Route::get('choose', function(){
    return View('choose'); // Your Blade template name
});
	
Route::get('loginmanu', function(){
    return View('auth/loginmanu'); // Your Blade template name
});

Route::get('loginstor', function(){
    return View('auth/loginstor'); // Your Blade template name
});


Route::post('/register_man', ['as' => 'register_man', 'uses' => 'Auth\ManufacturerController@register']);

Route::post('/register_sto', ['as' => 'register_sto', 'uses' => 'Auth\StoreController@register']);


// Route::post('/login_man','loginmanuController@login');

Route::get('welcome', function () {
    return redirect('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
