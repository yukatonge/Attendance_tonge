<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceTimeController;
use App\Http\Controllers\RestController;


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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', [AttendanceTimeController::class,'index']);
Route::get('/attendance/start', [AttendanceTimeController::class, 'startTime']);
Route::post('/attendance/start', [AttendanceTimeController::class, 'startTime']);
Route::get('/attendance/end', [AttendanceTimeController::class, 'endTime']);
Route::post('/attendance/end', [AttendanceTimeController::class, 'endTime']);
Route::get('/rest/start', [RestController::class, 'startRest']);
Route::post('/rest/start', [RestController::class, 'startRest']);

require __DIR__.'/auth.php';
