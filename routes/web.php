<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use Resources\views;

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

Route::get('/about', function () {
    echo "lorem ";
    #return view('welcome');
});

#Route::get('/user', [UserController::class, 'index']);

Route::resource('companies', CompanyController::class);

Route::post('/user', [UserController::class, 'index']);

Route::get('/demo/{name}', function ($name) {
    echo $name;
    #return view('demo');
});

Route::get('/demo', function () {
    #echo "HELLO JII";
    return view('demo');
});

/* Route::put('users/{id}', function ($id) {
});

Route::patch();

Route::delete('users/{id}', function ($id) {
});
 */