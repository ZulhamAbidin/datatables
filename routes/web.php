<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

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



Route::get('/dashboard/data/index', [DataController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/data/dashboard-datatables', [DataController::class, 'datatable'])->middleware(['auth'])->name('dashboard.datatables');

require __DIR__.'/auth.php';
