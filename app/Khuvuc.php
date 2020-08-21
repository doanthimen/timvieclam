<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khuvuc extends Model
{
    protected $table = "khuvuc";
    
     public function khuvuc(){
    	return $this->belongsTo('App\Nguoitimviec','idKV','idKhuVuc');
    }

}
