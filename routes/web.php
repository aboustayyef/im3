<?php

use App\Good;

/*
-------------------------------------------------------------------------
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

Route::get('invoicemaker', function() {
    return view('invoicemaker');
})->middleware('auth');

Route::group(['prefix' => 'api', 'middleware'=>'auth'], function () {
	route::get('/goods', function(){
        return Good::all();
	});
});

Route::post('/uploadCsv', [
    'as'    =>  'uploadHandler',
    'uses'  =>  'UploadController@index'
]);

/*
-------------------------------------------------------------------------
| Auth and Admin Routes
|--------------------------------------------------------------------------
*/

$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');
