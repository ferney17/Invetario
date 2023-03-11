<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inventariocontroller;

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
    return view('index');
})->name('index');


Route::get('productos', function () {
    return view('Products');
})->name('Products');

Route::get('Promociones', function () {
    return view('Promociones');
})->name('Promociones');

Route::get('ubicacion', function () {
    return view('ubicacion');
})->name('ubicacion');

Route::get('contacto', function () {
    return view('contact');
})->name('contact');

Route::get('listar-inventario',[inventariocontroller::class,'listar_inventario']);

Route::get('formulario', function () {
    return view('user.form');
})->name('form');


Route::delete('inventaro/{id}', [inventariocontroller::class, 'destroy'])->name('inventario.delete');