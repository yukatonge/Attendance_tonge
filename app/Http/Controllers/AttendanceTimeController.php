<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Attendance;
use Carbon\Carbon;

class AttendanceTimeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function startTime(Request $request)
    {
        $timestamp = new Attendance;
        $timestamp = Carbon::now();
        var_dump($timestamp);
        $form = $request->all();
        $timestamp->fill('$form')->save();
        return redirect('/');
        }
}
