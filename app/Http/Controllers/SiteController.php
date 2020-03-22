<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function structure()
    {
        return view('sites.structure');
    }

    public function vision()
    {
        return view('sites.vision');
    }

    public function mission()
    {
        return view('sites.mission');
    }

    public function goal()
    {
        return view('sites.goal');
    }

    public function service()
    {
        return view('sites.service');
    }

    public function contactus()
    {
        return view('sites.contactus');
    }

    public function location()
    {
        return view('sites.location');
    }
}
