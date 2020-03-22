<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Models\Checkin;
use App\Models\Employee;
use App\Models\Position;

class CheckinController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('checkins.index', [
            "checkins"  => Checkin::all(),
            "employees" => Employee::all(),
            "month"     => Input::get('month'),
        ]);
    }
}
