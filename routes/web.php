<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminClientController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/client/{client}', [ClientController::class, 'show'])->name('client');

Route::get('/consulta/final-placa/{numero}', [ClientController::class, 'show'])->name('search');

//Admin
Route::get('/admin/clients', [AdminClientController::class, 'index'])->name('admin.clients');
Route::get('/admin/clients/new', [AdminClientController::class, 'new'])->name('admin.client.new');
Route::post('/admin/clients', [AdminClientController::class, 'create'])->name('admin.client.create');

Route::get('/admin/clients/{client}/edit', [AdminClientController::class, 'edit'])->name('admin.client.edit');
Route::put('/admin/clients/{client}', [AdminClientController::class, 'update'])->name('admin.client.update');

Route::delete('/admin/clients/{client}', [AdminClientController::class, 'delete'])->name('admin.client.delete');

