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

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome') -> with(['string'=> 'Mohamad Nw', 'age' => 26]);
});

Route::get('/project1','NewsController@project1');

Route::get('/test1/{id}', function ($id) {
    return 'Hello You Are In A Area';
}) -> name('a');

Route::get('/', 'Front\UserController@getIndex');

Route::get('/test2/{id?}', function () {
    return 'Hello You Are In B Area';
}) -> name('b');

Route::get('/aboutus','NewsController@aboutShow');

/*Route::namespace('Front')->group(function () {

    Route::get('users', 'UserController@showAdmin');
});*/
/*
Route::group(['prefix' => 'users'], function () {

    Route::get('users', 'UserController@showAdmin');

});*/


Route::group(['namespace' => 'Front'], function() {

    Route::get('seconde0', 'SecondeController@ShowString0') ->middleware('auth');
    Route::get('seconde1', 'SecondeController@ShowString1');
    Route::get('seconde2', 'SecondeController@ShowString2');
    Route::get('seconde3', 'SecondeController@ShowString3');
});


Route::resource('news', 'NewsController');


Route::get('users','Front\SecondeController@ShowString0');

Route::get('login', function() {

    return 'Must Be Authantecated';

})->name('login');





Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/', function() {


    return 'Home';
});

Route::get('/dashboard', function() {

    return 'dashboard';
});
