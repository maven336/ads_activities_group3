<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyFirstControllers;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//      return 2+1;
// });

//  Route::get('/addition', function () {
//       return 2+1;
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/displaythesum', 'MyFirstController@index');

