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

        $sql = "SELECT r.*, p.pname, p.fname, p.lname, p.age_y,
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

    public function store(Request $req)
    {
        $regis = new Registration();

        $regis->pid = $req['pid'];
        $regis->reg_date = date_format(new \DateTime($req['reg_date']), 'Y-m-d');
        $regis->dx = $req['dx'];
        $regis->dx_date = date_format(new \DateTime($req['dx_date']), 'Y-m-d');
        $regis->dch_hosp = $req['dch_hosp'];
        $regis->dch_date = date_format(new \DateTime($req['dch_date']), 'Y-m-d');
        $regis->pcu = $req['pcu'];
        $regis->reg_status = '1';

        if($regis->save()) {
            return $regis;
        }
    }

    public function edit($id)
    {
        $sql = "SELECT r.*, CONCAT(p.pname, p.fname, ' ', p.lname) AS patient_name, p.age_y, i.name AS dx_desc
                FROM imc_patient_registration r 
                LEFT JOIN imc_patient p ON (r.pid=p.pid) 
                LEFT JOIN icd101 i ON (r.dx=i.code)
                WHERE (r.id=?)";
        
        return \DB::select($sql, [$id]);
    }

    public function update(Request $req, $id)
    {
        $regis = Registration::find($id);

        $regis->pid = $req['pid'];
        $regis->reg_date = $req['reg_date'];
        $regis->dx = $req['dx'];
        $regis->dx_date = $req['dx_date'];
        $regis->dch_hosp = $req['dch_hosp'];
        $regis->dch_date = $req['dch_date'];
        $regis->pcu = $req['pcu'];
        // $regis->reg_status = $req['reg_status'];

        if($regis->update()) {
            return $regis;
        }
    }

    public function delete($id)
    {
        $regis = Registration::findOrFail($id);
        
        if($regis->delete()) {
            return 204;
        }
    }
}
