
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SupplierController;

Route::get('/', function () {
    return view('login');
});

Route::resource('barang', BarangController::class);
Route::resource('supplier', SupplierController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
});
