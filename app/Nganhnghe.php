<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nganhnghe extends Model
{
    protected $table = "nganhnghe";
      public function Nganhnghe(){
    	return $this->belongsTo('App\Nganhnghe','idNganh','id');
    }
}

