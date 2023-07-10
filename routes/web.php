<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentmanagementController;
use App\Models\Student;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard',[StudentmanagementController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admission',[StudentmanagementController::class, 'admission']);
Route::post('/store',[StudentmanagementController::class, 'store']);
Route::get('edit/{id}',[StudentmanagementController::class, 'edit']);
Route::post('update/{id}',[StudentmanagementController::class, 'update']);
Route::get('delete/{id}',[StudentmanagementController::class, 'delete']);


// Route::get('/dashboard',[StudentmanagementController::class, 'd']);