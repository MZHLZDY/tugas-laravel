<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\courtController;
use App\Http\Controllers\court_typeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

// Route::get('/service', function () {
//     return view('service');
// });

// Route::get('/master', function () {
//     return view('master');
// });

Route::get('/mproject', function () {
    return view('mproject');
});

Route::get('/court_type', [court_typeController::class, 'index']);
Route::post('/court_type', [court_typeController::class, 'store']);

Route::resource('court', courtController::class);

?>