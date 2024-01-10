<?php

use App\Http\Controllers\ArrayPrintController;
use App\Http\Controllers\CuacaController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ArrayPrintController::class, 'index'])->name('array');
Route::get('/ramalan-cuaca', [CuacaController::class, 'index'])->name('cuaca');
