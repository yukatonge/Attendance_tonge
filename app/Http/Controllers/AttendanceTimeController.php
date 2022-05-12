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
        /*
        $timestamp = new Attendance;
        $timestamp = Carbon::now('Asia/Tokyo');
        var_dump($timestamp);
        $form = $request->all();
        $timestamp->fill('$form')->save();
        Attendance::create($form);
        return redirect('/');
        */
        /*
        $timestamp = Attendance::create([
            'user_id' => $user->id,
            'date' => Carbon::today(),
            'time_in' => Carbon::now(),
            'time_out' => Carbon::now(),
        ]);
        */
        }
}
