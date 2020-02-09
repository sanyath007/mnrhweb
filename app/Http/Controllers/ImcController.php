<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;

class ImcController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return [

        ];
    }

    public function changwats()
    {
        $sql = "SELECT * FROM changwat ";
    
        $items = \DB::select($sql);

        return [
            'changwats' => \DB::select($sql),
        ];
    }

    public function amphurs()
    {
        $sql = "SELECT * FROM amphur ";

        return [
            'amphurs' => \DB::select($sql),
        ];
    }

    public function tambons()
    {
        $sql = "SELECT * FROM tambon ";
    
        return [
            'tambons' => \DB::select($sql),
        ];
    }

    public function hosps()
    {
        $sql = "SELECT hospcode, CONCAT(hospcode, '-', 'โรงพยาบาล', name) AS name 
                FROM hospcode 
                WHERE (chwpart='30') AND (hospital_type_id IN (5,7,11,12))";
    
        return [
            'hosps' => \DB::select($sql),
        ];
    }

    public function pcus()
    {
        $sql = "SELECT hospcode, CONCAT(hospcode, '-', hosptype, name) AS name 
                FROM hospcode 
                WHERE (chwpart='30') AND (hospital_type_id IN (3,8,9,13))";
    
        return [
            'pcus' => \DB::select($sql),
        ];
    }

    public function icd10s(Request $req)
    {
        // echo 'page=' .$req['page'];
        $perpage = 10;
        $page = (isset($req['page'])) ? $req['page'] : 1;
        $offset = ($page * $perpage) - $perpage;

        $sql = "SELECT * FROM icd101 ";
        
        $count = count(\DB::select($sql));

        $sql .= "LIMIT $offset, $perpage ";

        $items = \DB::select($sql);
        
        $paginator = new Paginator($items, $count, $perpage, $page, [
            'path' => $req->url(),
            'query' => $req->query()
        ]);

        return [
            'pager' => $paginator,
            'page' => $page
        ];
    }

    public function searchIcd10s($icd10)
    {
        $sql = "SELECT * FROM icd101 WHERE code LIKE '%$icd10%' limit 1, 10 ";
    
        return [
            'icd10s' => \DB::select($sql),
        ];
    }
}
