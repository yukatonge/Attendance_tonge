<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rest;
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
        dd($attendance_id);

        Rest::create
        ([
            'attendance_id' => $attendance_id,
            'rest_in' => $rest_in,
        ]);

        return redirect ('/');
    
    }
}
