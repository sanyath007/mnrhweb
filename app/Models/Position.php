<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $connection = 'checkin';

    protected $table = 'positions';

    // public function reserve()
    // {
    //     return $this->hasMany('App\Reservation', 'depart_id', 'department');
    // }
  
    // public function user()
    // {
    //     return $this->hasMany('App\User', 'depart_id', 'office_id');
    // }
}
