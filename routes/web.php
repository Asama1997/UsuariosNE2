<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\CheckinController;
use App\Http\Controllers\CheckoutController;


Route::get('/', function () {
    return view('Home.Home');
});
Route::get('/catalogo', function () {
    return view('Catalogo.Cat');
});
Route::get('/login', function () {
    return view('login');
});
Route::resource('users', UserController::class);
Route::get('/employee/{email}', [EmployeeController::class, 'index'])->name('employee.index');
Route::put('/users/{id}/update2', [UserController::class, 'update2'])->name('users.update2');
Route::resource('employees', EmployeeController::class);
Route::resource('vehicules', VehiculeController::class);
Route::resource('checkin', CheckinController::class);
Route::resource('checkout', CheckoutController::class);