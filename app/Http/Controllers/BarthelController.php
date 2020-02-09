<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use App\Models\Barthel;

class BarthelController extends Controller
{
    public function index()
    {
        $barthels = Barthel::all();

        return $barthels;
    }

    public function detail($pid)
    {
        $barthels = Barthel::where('pid', $pid)->get();

        return $barthels;
    }

    public function store(Request $req)
    {
        $barthel = new Barthel();

        $barthel->pid = $req['pid'];
        $barthel->visit_count = $req['visit_count'];
        $barthel->visit_date = $req['visit_date'];
        $barthel->feeding = $req['feeding'];
        $barthel->grooming = $req['grooming'];
        $barthel->transfer = $req['transfer'];
        $barthel->mobility = $req['mobility'];
        $barthel->toilet = $req['toilet'];
        $barthel->dressing = $req['dressing'];
        $barthel->stair = $req['stair'];
        $barthel->bathing = $req['bathing'];
        $barthel->bowel = $req['bowel'];
        $barthel->bladder = $req['bladder'];
        $barthel->score = $req['score'];
        
        if($barthel->save()) {
            return $barthel;
        }
    }
}
