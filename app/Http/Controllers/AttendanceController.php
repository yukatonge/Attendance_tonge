<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class AttendanceController extends Controller
{
    //indexは1つでOK（他のコントローラに記述の必要なし）
    public function index()
    {
        return view('index');
    }
    public function startTime(Request $request)
    {
        //承認済みのユーザーを取得
        $id = Auth::id();

        //日付の場合はnew Carbonとセットで
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
    public function endTime(Request $request)
    {
        $id = Auth::id();

        $dt = new Carbon();
        $date = $dt -> toDateString();
        $time_out = $dt -> toTimeString();

        Attendance::where('user_id',$id)->where('date',$date)->update(['time_out'=>$time_out]);

        return redirect('/');
    }
}