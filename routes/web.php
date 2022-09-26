<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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
Route::prefix("admin")->middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    });
    Route::resource('employes', "App\Http\Controllers\EmployeController");
    Route::get('/employe/{id}/vacation', "App\Http\Controllers\EmployeController@vacationRequest")->name('employe.vacation');
    Route::get('/employe/{id}/certificate', "App\Http\Controllers\EmployeController@certificate")->name('employe.certificate');
    Route::get('/employe/{id}/download', "App\Http\Controllers\EmployeController@generatePDF")->name('employe.generatePDF');
});

