<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = 'imc_patient_registration';
    protected $primaryKey = 'id';
    // public $incrementing = false; //ไม่ใช้ options auto increment
    // public $timestamps = false; //ไม่ใช้ field updated_at และ created_at
    
    // public function reserve()
    // {
    //     return $this->hasMany('App\Reservation', 'depart_id', 'department');
    // }
  
    // public function user()
    // {
    //     return $this->hasMany('App\User', 'depart_id', 'office_id');
    // }
}
