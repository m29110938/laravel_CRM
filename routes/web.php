<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
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

// login
require __DIR__ . '/auth.php';

// CRM
// Route::get('/', function () {
//     return view('index');
// });

Route::middleware('auth')->group(function () {
    // project
    Route::get('/project', [ProjectController::class, 'index'])->name('project');
    Route::get('project/create', [ProjectController::class, 'create']);
    Route::post('project/create', [ProjectController::class, 'store']);
    Route::get('project/{project:id}/edit', [ProjectController::class, 'edit']);
    Route::patch('project/{project:id}', [ProjectController::class, 'update']);
    Route::delete('project/{project:id}', [ProjectController::class, 'delete']);

    // user
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('user/create', [UserController::class, 'create']);
    Route::post('user/create', [UserController::class, 'store']);
    Route::get('user/{user:id}/edit', [UserController::class, 'edit']);
    Route::patch('user/{user:id}', [UserController::class, 'update']);
    Route::patch('user/{user:id}/password', [UserController::class, 'updatePassword']);
    Route::delete('user/{user:id}', [UserController::class, 'delete']);

    // 修改個人資料
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
