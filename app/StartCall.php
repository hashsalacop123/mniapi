<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StartCall extends Model
{
    //
     // protected $fillable ="start_calls";

     	 protected $fillable = [
  		 			 'mini_datas_id', 
  		 			 'descriptions', 
  		 			 'status'
		];
}
