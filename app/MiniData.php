<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

	class MiniData extends Model
	{
	    //
	   protected $table="mini_datas";

	    // protected $fillable = [
	    //     'compname_d', 'callcount'
	    // ];
	       public function startCall() 
  		   
  		   {
    	   
    	    	return $this->hasMany('\App\Models\StartCall');
   		 	}
	}


