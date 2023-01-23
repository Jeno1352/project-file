<?php



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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/login', function () {
    return view(view: 'login');
});

Route::get('registration',function (){

    return view('registration');
});


Route::get('FAQ',function (){

    return view('FAQ');
});
Route::get('appointment',function (){

    return view('appointment');
});
Route::get('plans',function (){

    return view('plans');
});
Route::get('w1',function (){

    return view('w1');
});
Route::get('w2',function (){

    return view('w2');
});


