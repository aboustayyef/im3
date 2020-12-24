<?php

use App\Models\Good;
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

Route::get('/', function () {
    return redirect('/invoicemaker');
});

Route::get('invoicemaker', function () {
    return view('invoicemaker');
})->middleware('auth');

Route::group(['prefix' => 'api', 'middleware' => 'auth'], function () {
    route::get('/goods', function () {
        return Good::all();
    });
});

Route::post('/uploadCsv', [
    'as' => 'uploadHandler',
    'uses' => 'UploadController@index',
]);

require __DIR__.'/auth.php';
