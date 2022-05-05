<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

class AttendanceTimeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function create(Request $request)
    {
        $this->validate($request, Attendance::$rules);
        $timestamp = new timestamp;
        $form = $request->all();
        unset($form['_token_']);
        $timestamp->fill('$form')->save();
        return redirect('/');
        }
}
