<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tintuyendung extends Model
{
    protected $table = "tintuyendung";


     public function tintuyendung(){
    	return $this->hasMany('App\Nhatuyendung','idTin','idTinTuyenDung');
    }
    public function nhatuyendung(){
    	return $this->belongsTo('App\Nhatuyendung','idNTD','idNTD');
    }
}