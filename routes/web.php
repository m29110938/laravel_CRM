<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// login
// 登入（登入介面、登入功能）
Route::get('/', function () {
    return view('auth.login');
});
// 註冊（註冊介面、註冊功能）
Route::get('/register', function () {
    return view('auth.register');
});

// CRM
// Route::get('/', function () {
//     return view('index');
// });

// project
Route::get('/project', [ProjectController::class, 'index']);
Route::get('project/create', [ProjectController::class, 'create']);
Route::post('project/create', [ProjectController::class, 'store']);
Route::get('project/{project:id}/edit', [ProjectController::class, 'edit']);
Route::patch('project/{project:id}', [ProjectController::class, 'update']);
Route::delete('project/{project:id}', [ProjectController::class, 'delete']);

// member



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
