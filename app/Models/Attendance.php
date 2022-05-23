<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
