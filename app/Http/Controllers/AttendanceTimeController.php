<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Attendance;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AttendanceTimeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function startTime(Request $request)
    {
        $id = Auth::id();

        $dt = new Carbon();
        $date = $dt -> toDateString();
        $time_in = $dt -> toTimeString();
        

        Attendance::create
        ([
            'user_id'=> $id,
            'date' => $date,
            'time_in' => $time_in,
        ]);

        return redirect('/');
    }
}
