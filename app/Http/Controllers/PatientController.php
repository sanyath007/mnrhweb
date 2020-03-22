<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use App\Models\Patient;

class PatientController extends Controller
{
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
        $req->validate([
            'pid' => 'required|string',
            'hn' => 'required|string',
            'cid' => 'required|string',
            'pname' => 'required|string',
            'fname' => 'required|string',
            'lname' => 'required|string',
            'birthdate' => 'required|date',
            'age_y' => 'required|string',
            'sex' => 'required|string',
            'address' => 'required|string',
            // 'moo' => 'required|string',
            // 'road' => 'required|string',
            'changwat' => 'required|string',
            'amphur' => 'required|string',
            'tambon' => 'required|string',
            'zipcode' => 'required|string',
            'latlong' => 'required|string',
            // 'tel' => 'required|string',
        ]);

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
        $patient->address = $req['address'];
        $patient->moo = $req['moo'];
        $patient->road = $req['road'];
        $patient->tambon = $req['tambon'];
        $patient->amphur = $req['amphur'];
        $patient->changwat = $req['changwat'];
        $patient->zipcode = $req['zipcode'];
        $patient->latlong = $req['latlong'];
        $patient->tel = $req['tel'];
        
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
}
