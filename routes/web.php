<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
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

----------Ideas-------------
\ Feed
\ Profile
*/

Route::get('/', [DashboardController::class, 'index'])->name('ideas.show');
Route::post('/idea', [IdeaController::class, 'store'])->name('ideas.create');
Route::delete('/idea/{id}', [IdeaController::class, 'destroy'])->name('ideas.destroy');
