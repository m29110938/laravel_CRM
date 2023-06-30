<?php

use App\Http\Controllers\ProjectController;
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


// CRM
Route::get('/', function () {
    return view('index');
});

// project
Route::get('/project', [ProjectController::class, 'index']);
Route::get('project/create', [ProjectController::class, 'create']);
Route::post('project/create', [ProjectController::class, 'store']);
Route::get('project/{project:id}/edit', [ProjectController::class, 'edit']);
Route::patch('project/{project:id}', [ProjectController::class, 'update']);
Route::delete('project/{project:id}', [ProjectController::class, 'delete']);

// member
