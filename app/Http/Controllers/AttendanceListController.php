<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Attendance;

class AttendanceListController extends Controller
{
   public function showAttendance(Request $request)
   {
        $dt = new Carbon();
        $date = $dt -> toDateString();
        Attendance::where('date', $date) -> first();

   }
}
