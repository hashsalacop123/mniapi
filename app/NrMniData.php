<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NrMniData extends Model
{
    //


      protected $table="nr_mni_datas";

  protected $fillable = [
  					'status_call',
					'compname',
					'compname_d',
					'akadba',
					'akadba_d',
					'physaddr',
					'physaddr_d',
					'physcity',
					'physcity_d',
					'physstate',
					'physstate_d',
					'physzip',
					'physzip_d',
					'vnumber',
					'vnumber_d',
					'loccount',
					'loccount_d',
					'products',
					'products_d',
					'exec1',
					'exec1_d',
					'gender1',
					'gender1_d',
					'officermail1',
					'title1',
					'title1_d',
					'exec2',
					'exec2_d',
					'gender2',
					'gender2_d',
					'officermail2',
					'title2',
					'title2_d', 
					'fnumber',
					'fnumber_d',
					'nnumber',
					'nnumber_d',
					'web',
					'web_d',
					'email',
					'email_d',
					'mailaddr',
					'mailaddr_d',
					'mailcity',
					'mailcity_d',
					'mailstate',
					'mailstate_d',
					'mailzip',
					'mailzip_d',
					'yearestab',
					'yearestab_d',
					'distribtyp',
					'distribtyp_d',
					'ownertype',
					'ownertype_d',
					'sales',
					'sales_d',
					'squarefeet',
					'squarefeet_d',
					'imports',
					'imports_d',
					'exec3',
					'exec3_d',
					'gender3',
					'gender3_d',
					'officermail3',
					'title3',
					'title3_d',
					'exec4',
					'exec4_d',
					'gender4',
					'gender4_d',
					'officermail4',
					'title4',
					'title4_d',
					'exec5',
					'exec5_d',
					'gender5',
					'gender5_d',
					'officermail5',
					'title5',
					'title5_d',
					'exec6',
					'exec6_d',
					'gender6',
					'gender6_d',
					'officermail6',
					'title6',
					'title6_d',
					'exec7',
					'exec7_d',
					'gender7',
					'gender7_d',
					'officermail7',
					'title7',
					'title7_d',
					'exec8',
					'exec8_d',
					'gender8',
					'gender8_d',
					'officermail8',
					'title8',
					'title8_d',
					'exec9',
					'exec9_d',
					'gender9',
					'gender9_d',
					'officermail9',
					'title9',
					'title9_d',
					'exec10',
					'exec10_d',
					'gender10',
					'gender10_d',
					'officermail10',
					'title10',
					'title10_d',
					'parentname',
					'parentname_d',
					'parentcity',
					'parentcity_d',
					'parentstat',
					'parentstat_d',
					'onumber',
					'onumber_d',
					'header', 
					'advertiser', 
					'primarysic',
					'sic2',
					'companyid',
					'datasource',
					'contact',
					'odatetime',
					'ocommetns',
					'tdatetime',
					'tcomments',
					'fcomments',
					'fdatetime',
					'operator',
					'fdisp',
					'confdate',
					'bookid',
					'newinyear',
					'listnum',
					'pdatetime',
					'pcomments',
					'qeflag',
					'oagent',
					'tagent',
					'fagent',
					'datetime4',
					'comments4',
					'agent4',
					'datetime5',
					'comments5',
					'agent5',
					'sysgencomments',
					'priority',
					'addresserror',
					'dpvfootnote',
					'altphone',
					'altphone_d',
					'paddress',
					'paddress_d',
					'pzip5',
					'pzip5_d',
					'addrchgreason',
					'empchgreason',
					'agentsnotes',
					'filesNamePath',
					'filesName'
				];
				
	  public function user()
	  {
	    return $this->belongsTo('\App\User');
	  }

}