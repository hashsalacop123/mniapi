<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NrMniDataCallCount extends Model
{
    //
    // protected $table="nr_mni_data_call_counts";

	 protected $fillable = [
		 			 'nr_mni_data_id', 
		 			 'descriptions', 
		 			 'status'
	];
}
