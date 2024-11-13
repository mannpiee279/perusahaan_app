<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Route::resource('companies', CompanyController::class);
Route::resource('services', ServiceController::class);
Route::resource('employees', EmployeeController::class);

Route::post('/companies/create', [CompanyController::class, 'tambah'])->name('companies.tambah');
Route::post('/companies/edit', [CompanyController::class, 'update'])->name('companies.update');
