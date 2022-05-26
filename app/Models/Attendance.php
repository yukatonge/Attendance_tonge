<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

    public static function getAttendance()
    {
        $id = Auth::id();
        $dt = new Carbon();
        $date = $dt -> toDateString();
        $attendance = Attendance::where('user_id',$id)->where('date',$date)->first();
        return $attendance;
    }
}
