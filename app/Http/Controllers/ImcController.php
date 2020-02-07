<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use App\Models\Patient;
use App\Models\Visition;
use App\Models\Registration;

class ImcController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function patients(Request $req)
    {
        $perpage = 5;
        $page = (isset($req['page'])) ? $req['page'] : 1;
        $offset = ($page * $perpage) - $perpage;

        $sql = "SELECT * FROM imc_patient ";
        
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

    public function getPatient($id)
    {
        $sql = "SELECT * FROM imc_patient WHERE (id='" .$id. "')";

        $patient = \DB::select($sql);

        return [
            'patient' => $patient
        ];
    }

    public function addPatient(Request $req)
    {
        $patient = new Patient();

        $patient->pid = $req['pid'];
        $patient->hn = $req['hn'];
        $patient->cid = $req['cid'];
        $patient->pname = $req['pname'];
        $patient->fname = $req['fname'];
        $patient->lname = $req['lname'];
        $patient->birthdate = $req['birthdate'];
        $patient->age_y = $req['ageY'];
        $patient->sex = $req['sex'];
        $patient->tel = $req['tel'];
        $patient->address = $req['address'];
        $patient->moo = $req['moo'];
        $patient->road = $req['road'];
        $patient->tambon = $req['tambon'];
        $patient->amphur = $req['amphur'];
        $patient->changwat = $req['changwat'];
        $patient->zipcode = $req['zipcode'];
        $patient->latlong = $req['latlong'];
        
        if($patient->save()) {
            return $patient;
        }
    }

    public function updatePatient(Request $req, $id)
    {
        $patient = Patient::findOrFail($id);

        $patient->pid = $req['pid'];
        $patient->hn = $req['hn'];
        $patient->cid = $req['cid'];
        $patient->pname = $req['pname'];
        $patient->fname = $req['fname'];
        $patient->lname = $req['lname'];
        $patient->birthdate = $req['birthdate'];
        $patient->age_y = $req['age_y'];
        $patient->sex = $req['sex'];
        $patient->tel = $req['tel'];
        $patient->address = $req['address'];
        $patient->moo = $req['moo'];
        $patient->road = $req['road'];
        $patient->tambon = $req['tambon'];
        $patient->amphur = $req['amphur'];
        $patient->changwat = $req['changwat'];
        $patient->zipcode = $req['zipcode'];
        $patient->latlong = $req['latlong'];
        
        if($patient->update()) {
            return $patient;
        }
    }

    public function deletePatient($id)
    {
        // $patient = DB::table('imc_patient')->where('id', $id)->delete();
        $patient = Patient::findOrFail($id);
        
        if($patient->delete()) {
            return 204;
        }
    }

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

    public function visitions(Request $req)
    {
        $perpage = 10;
        $page = (isset($req['page'])) ? $req['page'] : 1;
        $offset = ($page * $perpage) - $perpage;

        $sql = "SELECT v.*, p.* 
                FROM imc_home_visition v 
                LEFT JOIN imc_patient p ON (v.pid=p.pid)";
        
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

    public function addVisition(Request $req)
    {
        $visit = new Visition();

        $visit->pid = $req['pid'];
        $visit->visit_count = $req['visit_count'];
        $visit->visit_date = $req['visit_date'];
        $visit->visitors = $req['visitors'];
        $visit->barthel_score = $req['barthel_score'];
        $visit->impairment = $req['impairment'];
        $visit->complication = $req['complication'];
        $visit->is_rehab = $req['is_rehab'];
        $visit->visit_status = $req['visit_status'];

        $attachments = '';
        $allowedfileExtension=['pdf','jpg','png','docx'];

        if($req->hasFile('attachments')) {
            foreach ($req->file('attachments') as $index => $file) {
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension, $allowedfileExtension);
                
                $new_filename = $req['pid']. uniqid('_', true).'.'.$extension;

                if($index == count($req->file('attachments')) - 1) {
                    $attachments .= $new_filename;
                } else {
                    $attachments .= $new_filename .',';
                }

                $file->move(public_path().'/uploads/imc_pic/', $new_filename);
            }
        }
        
        $visit->attachments = $attachments;

        if($visit->save()) {
            return $visit;
        }
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
