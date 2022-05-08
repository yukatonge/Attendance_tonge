<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceTimeController;

Route::get('/', [AttendanceTimeController::class,'index']);
Route::get('/attendance/start', [AttendanceTimeController::class, 'startTime']);
Route::post('/attendance/start', [AttendanceTimeController::class, 'startTime']);

