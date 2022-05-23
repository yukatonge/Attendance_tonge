<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class RestController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function startRest(Request $request)
    {
        $id = Auth::id();

        $dt = new Carbon();
        $rest_in = $dt -> toTimeString();

        Rest::create
        ([
            'user_id' => $id,
            'attendance_id' => $attendance_id,
            'rest_in' => $rest_in,
        ]);

        return redirect ('/');
    }
}
