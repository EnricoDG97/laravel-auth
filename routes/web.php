<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
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

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');

// });

Route::middleware(['auth', 'verified'])
    // nome rotta visibile in route list: admin. + nome rotta
    ->name('admin.')
    // il prefisso invece è per l'url
    ->prefix('admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('/messages', function() {
            return 'messages';
        })->name('messages');
        // inserire qui altre srotte
    });

require __DIR__ . '/auth.php';
