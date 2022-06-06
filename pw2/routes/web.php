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
Use App\Http\Controllers\BarangController;
Route::get("/barang", [BarangController::class,"index"])->name("barang.index");
Route::get("/barang/create", [BarangController::class,"create"])->name("barang.create");
Route::post("/barang/store", [BarangController::class, "store"])->name("barang.store");
Route::get("/barang/edit/{id}", [BarangController::class, "edit"])->name("barang.edit");
Route::patch("/barang/update/{id}", [BarangController::class, "update"])->name("barang.update");
Route::get("/barang/delete/{id}", [BarangController::class, "destroy"])->name("barang.delete");

Use App\Http\Controllers\PelangganController;
Route::get("/pelanggan", [PelangganController::class,"index"])->name("pelanggan.index");
Route::get("/pelanggan/create", [PelangganController::class,"create"])->name("pelanggan.create");
Route::post("/pelanggan/store", [PelangganController::class, "store"])->name("pelanggan.store");
Route::get("/pelanggan/edit/{id}", [PelangganController::class, "edit"])->name("pelanggan.edit");
Route::patch("/pelanggan/update/{id}", [PelangganController::class, "update"])->name("pelanggan.update");
Route::get("/pelanggan/delete/{id}", [PelangganController::class, "destroy"])->name("pelanggan.delete");

Use App\Http\Controllers\PegawaiController;
Route::get("/pegawai", [PegawaiController::class,"index"])->name("pegawai.index");
Route::get("/pegawai/create", [PegawaiController::class,"create"])->name("pegawai.create");
Route::post("/pegawai/store", [PegawaiController::class, "store"])->name("pegawai.store");
Route::get("/pegawai/edit/{id}", [PegawaiController::class, "edit"])->name("pegawai.edit");
Route::patch("/pegawai/update/{id}", [PegawaiController::class, "update"])->name("pegawai.update");
Route::get("/pegawai/delete/{id}", [PegawaiController::class, "destroy"])->name("pegawai.delete");

Use App\Http\Controllers\TransaksiController;
Route::get("/index", [TransaksiController::class,"index"])->name("cart.index");
Route::get("/keranjang/tambah/{id}", [TransaksiController::class,"tambah_cart"])->name("cart.beli");
Route::get("/keranjang", [TransaksiController::class,"cart"])->name("cart.cart");