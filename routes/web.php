<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/customer/create',\App\Livewire\CreateCustomer::class);
Route::get('/customers',\App\Livewire\Customers::class);
Route::get('/customer/{customer}',\App\Livewire\ViewCustomer::class);
Route::get('/customer/{customer_id}/edit',\App\Livewire\EditCustomer::class);


