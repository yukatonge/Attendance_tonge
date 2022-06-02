<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
//Class 'App\Models\Auth' not foundのエラーを解消するために以下を追加
use Illuminate\Support\Facades\Auth;

class Attendance extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public function users(){
        return $this->belongsTo('App\Models\user');
    }

    //リレーションは各Modelにバラけず、belongsToとhasManyを駆使して１箇所にまとめる。
    public function rests(){
        return $this->hasMany('App\Models\rest');
    }

    public function attendances(){
        return $this->belongsTo('App\Models\Attendance');
    }

    public static function getAttendance()
    {
        $id = Auth::id();
        $dt = new Carbon();
        $date = $dt -> toDateString();
        $attendance = Attendance::where('user_id',$id)->where('date',$date)->first();
        return $attendance;
    }
}
