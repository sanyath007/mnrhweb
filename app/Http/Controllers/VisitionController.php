<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use App\Models\Visition;

class VisitionController extends Controller
{
    public function visitions(Request $req)
    {
        $perpage = 5;
        $page = (isset($req['page'])) ? $req['page'] : 1;
        $offset = ($page * $perpage) - $perpage;

        $sql = "SELECT v.*, p.pname, p.fname, p.lname, p.age_y 
                FROM imc_home_visition v 
                LEFT JOIN imc_patient p ON (v.pid=p.pid)
                ORDER BY v.visit_date DESC ";
        
        $count = count(\DB::select($sql));

        $sql .= "LIMIT $offset, $perpage";

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
        $visit = new Visition();

        $visit->pid = $req['pid'];
        $visit->visit_count = $req['visit_count'];
        $visit->visit_date = date_format(new \DateTime($req['visit_date']), 'Y-m-d');
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

    public function edit($id)
    {
        $sql = "SELECT v.*, CONCAT(p.pname, p.fname, ' ', p.lname) AS patient_name, p.age_y 
                FROM imc_home_visition v 
                LEFT JOIN imc_patient p ON (v.pid=p.pid)
                WHERE (v.id=?)";
        
        return \DB::select($sql, [$id]);
    }

    public function update(Request $req, $id)
    {
        $visit = Visition::find($id);

        $visit->pid = $req['pid'];
        $visit->visit_count = $req['visit_count'];
        $visit->visit_date = $req['visit_date'];
        $visit->visitors = $req['visitors'];
        $visit->barthel_score = $req['barthel_score'];
        $visit->impairment = $req['impairment'];
        $visit->complication = $req['complication'];
        $visit->is_rehab = $req['is_rehab'];
        $visit->visit_status = $req['visit_status'];

        // $attachments = '';
        // $allowedfileExtension=['pdf','jpg','png','docx'];

        // if($req->hasFile('attachments')) {
        //     foreach ($req->file('attachments') as $index => $file) {
        //         $filename = $file->getClientOriginalName();
        //         $extension = $file->getClientOriginalExtension();
        //         $check=in_array($extension, $allowedfileExtension);
                
        //         $new_filename = $req['pid']. uniqid('_', true).'.'.$extension;

        //         if($index == count($req->file('attachments')) - 1) {
        //             $attachments .= $new_filename;
        //         } else {
        //             $attachments .= $new_filename .',';
        //         }

        //         $file->move(public_path().'/uploads/imc_pic/', $new_filename);
        //     }
        // }
        
        // $visit->attachments = $attachments;

        if($visit->update()) {
            return $visit;
        }
    }

    public function delete($id)
    {
        $visit = Visition::findOrFail($id);
        
        if($visit->delete()) {
            return 204;
        }
    }
}
