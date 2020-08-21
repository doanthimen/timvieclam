<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nguoitimviec extends Model
{
    protected $table = "hosoxinviec";

   public function nguoidung(){
    	return $this->hasmany('App\User','id','idND');
    }
     public function khuvuc(){
    	return $this->belongsTo('App\khuvuc','idKV','idKhuVuc');
    }
    public function Nganhnghe(){
    	return $this->belongsTo('App\Nganhnghe','idNganh','id');
    }


}

