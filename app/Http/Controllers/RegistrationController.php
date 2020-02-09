<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use App\Models\Registration;

class RegistrationController extends Controller
{
    public function registrations(Request $req)
    {
        $perpage = 10;
        $page = (isset($req['page'])) ? $req['page'] : 1;
        $offset = ($page * $perpage) - $perpage;

        $sql = "SELECT r.*, p.*, 
                CONCAT(h.hospcode, ' ', h.name) as dch_hosp, 
                CONCAT(pcu.hospcode, ' ', pcu.name) as pcu 
                FROM imc_patient_registration r 
                LEFT JOIN imc_patient p ON (r.pid=p.pid) 
                LEFT JOIN hospcode h ON (r.dch_hosp=h.hospcode)
                LEFT JOIN hospcode pcu ON (r.pcu=pcu.hospcode)";
        
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

    public function addRegistration(Request $req)
    {
        $regis = new Registration();

        $regis->pid = $req['pid'];
        $regis->reg_date = date_format(new \DateTime($req['reg_date']), 'Y-m-d');
        $regis->dx = $req['dx'];
        $regis->dx_date = date_format(new \DateTime($req['dx_date']), 'Y-m-d');
        $regis->dch_hosp = $req['dch_hosp'];
        $regis->dch_date = date_format(new \DateTime($req['dch_date']), 'Y-m-d');
        $regis->pcu = $req['pcu'];
        $regis->reg_status = $req['reg_status'];

        if($regis->save()) {
            return $regis;
        }
    }
}
