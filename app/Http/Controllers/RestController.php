<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rest;
//Class 'App\Http\Controllers\Attendance' not foundのエラー解消のため以下追加
use App\Models\Attendance;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class RestController extends Controller
{
    public function startRest(Request $request)
    {
        $dt = new Carbon();
        $rest_in = $dt -> toTimeString();

        $attendance = Attendance::getAttendance();
        $attendance_id = $attendance->id;

        Rest::create
        ([
            'attendance_id' => $attendance_id,
            'rest_in' => $rest_in,
        ]);

        return redirect ('/');
    }

    public function endRest(Request $request)
    {
       $dt = new Carbon();
       $rest_out = $dt ->toTimeString();
       $attendance = Attendance::getAttendance();
       $rest = $attendance->rests->whereNull("end_time")->first();

       Rest::where('id',$rest->id)->update(['rest_out'=>$rest_out]);

       return redirect ('/');
    }
}
