<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceTimeController;

Route::get('/', [AttendanceTimeController::class,'index']);
Route::post('/attendance/start', [AttendanceTimeController::class, 'create']);
