<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nhatuyendung extends Model
{
    protected $table = "nhatuyendung";
    public function tin(){
    	return $this->belongsTo('App\Tintuyendung','idTin','idTinTuyenDung');
    }
    public function chitiettin(){
    	return $this->belongsTo('App\Tintuyendung','idNTD','idNTD');
    }

}
