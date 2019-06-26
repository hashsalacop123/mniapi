<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NrMniData;
use App\NrMniDataCallCount;
use App\NrMniDataDuplicate;
use App\Setting;
use Validator;
use App\User;
use DB;
class NrMniDataController extends Controller
{
    // ======FRONT END FOR USER===
      // START CALL API ALGO
    public function startCall(Request $request)
          {
            $user = auth('api')->user();
            // $minplus = $min + '1'; 
            $NrMniData = NrMniData::inRandomOrder('status_call','=',1)
                                        ->where(function($query){
                                           $datafdisp = array('0','11','12','13','09','17','18','96','97');
                                            $Setting = Setting::where('id',1)->first();
                                            $numberCalls = $Setting['calls_set'];
                                            $callname = $Setting['filenameId'];
                       
                                            $query->where('callPriority','=',$numberCalls)
                                                  ->whereIn('fdisp',$datafdisp)
                                                  ->where('filesName','=',$callname)
                                                  ->where('status_call','=',01);
                                             })->first();
                        if(!$NrMniData) {
                             return response()->json('queCall');;
                        }else {
                            $userId = $user['id'];
                            $status_call = '2';
                            $statusupdate = NrMniData::where('id',$NrMniData['id'])->first();
                            $statusupdate->status_call = $status_call;
                            $statusupdate->user_id = $userId;
                            $statusupdate->save();
                            return response()->json($NrMniData['id']);
                        }
          } 
  
    public function updateDuplicate(Request $request) {
                          $fdspNumbers = $request->get('fdisp');
                          $result = substr($fdspNumbers, 0, 2);
                   $validators = Validator::make($request->all(),[
                         'nrdataidhide' => 'required | exists:nr_mni_datas,id'
                        ]); 
                     if ($validators->fails()) {
                        return response('error');
                    } 
                    $draftdata = '';
                    $nrDataDuplicate = new NrMniDataDuplicate([ 
                        'user_id'=> $request->get('userid'), 
                        'nr_mni_data_id'=> $request->get('nrdataidhide'), 
                        'compname'=> $request->get('compname'),
                        'compname_d'=> $request->get('compname_d'),
                        'akadba'=> $request->get('akadba'),
                        'akadba_d'=> $request->get('akadba_d'),
                        'physaddr'=> $request->get('physaddr'),
                        'physaddr_d'=> $request->get('physaddr_d'),
                        'physcity'=> $request->get('physcity'),
                        'physcity_d'=> $request->get('physcity_d'),
                        'physstate'=> $request->get('physstate'),
                        'physstate_d'=> $request->get('physstate_d'),
                        'physzip'=> $request->get('physzip'),
                        'physzip_d'=> $request->get('physzip_d'),
                        'vnumber'=> $request->get('vnumber'),
                        'vnumber_d'=> $request->get('vnumber_d'),
                        'loccount'=> $request->get('loccount'),
                        'loccount_d'=> $request->get('loccount_d'),
                        'products'=> $request->get('products'),
                        'products_d'=> $request->get('products_d'),
                        'exec1'=> $request->get('exec1'),
                        'exec1_d'=> $request->get('exec1_d'),
                        'gender1'=> $request->get('gender1'),
                        'gender1_d'=> $request->get('gender1_d'),
                        'officermail1'=> $request->get('officermail1'),
                        'title1'=> $request->get('title1'),
                        'title1_d'=> $request->get('title1_d'),
                        'exec2'=> $request->get('exec2'),
                        'exec2_d'=> $request->get('exec2_d'),
                        'gender2'=> $request->get('gender2'),
                        'gender2_d'=> $request->get('gender2_d'),
                        'officermail2'=> $request->get('officermail2'),
                        'title2'=> $request->get('title2'),
                        'title2_d'=> $request->get('title2_d'), 
                        'fnumber'=> $request->get('fnumber'),
                        'fnumber_d'=> $request->get('fnumber_d'),
                        'nnumber'=> $request->get('nnumber'),
                        'nnumber_d'=> $request->get('nnumber_d'),
                        'web'=> $request->get('web'),
                        'web_d'=> $request->get('web_d'),
                        'email'=> $request->get('email'),
                        'email_d'=> $request->get('email_d'),
                        'mailaddr'=> $request->get('mailaddr'),
                        'mailaddr_d'=> $request->get('mailaddr_d'),
                        'mailcity'=> $request->get('mailcity'),
                        'mailcity_d'=> $request->get('mailcity_d'),
                        'mailstate'=> $request->get('mailstate'),
                        'mailstate_d'=> $request->get('mailstate_d'),
                        'mailzip'=> $request->get('mailzip'),
                        'mailzip_d'=> $request->get('mailzip_d'),
                        'yearestab'=> $request->get('yearestab'),
                        'yearestab_d'=> $request->get('yearestab_d'),
                        'distribtyp'=> $request->get('distribtyp'),
                        'distribtyp_d'=> $request->get('distribtyp_d'),
                        'ownertype'=> $request->get('ownertype'),
                        'ownertype_d'=> $request->get('ownertype_d'),
                        'sales'=> $request->get('sales'),
                        'sales_d'=> $request->get('sales_d'),
                        'squarefeet'=> $request->get('squarefeet'),
                        'squarefeet_d'=> $request->get('squarefeet_d'),
                        'imports'=> $request->get('imports'),
                        'imports_d'=> $request->get('imports_d'),
                        'exec3'=> $request->get('exec3'),
                        'exec3_d'=> $request->get('exec3_d'),
                        'gender3'=> $request->get('gender3'),
                        'gender3_d'=> $request->get('gender3_d'),
                        'officermail3'=> $request->get('officermail3'),
                        'title3'=> $request->get('title3'),
                        'title3_d'=> $request->get('title3_d'),
                        'exec4'=> $request->get('exec4'),
                        'exec4_d'=> $request->get('exec4_d'),
                        'gender4'=> $request->get('gender4'),
                        'gender4_d'=> $request->get('gender4_d'),
                        'officermail4'=> $request->get('officermail4'),
                        'title4'=> $request->get('title4'),
                        'title4_d'=> $request->get('title4_d'),
                        'exec5'=> $request->get('exec5'),
                        'exec5_d'=> $request->get('exec5_d'),
                        'gender5'=> $request->get('gender5'),
                        'gender5_d'=> $request->get('gender5_d'),
                        'officermail5'=> $request->get('officermail5'),
                        'title5'=> $request->get('title5'),
                        'title5_d'=> $request->get('title5_d'),
                        'exec6'=> $request->get('exec6'),
                        'exec6_d'=> $request->get('exec6_d'),
                        'gender6'=> $request->get('gender6'),
                        'gender6_d'=> $request->get('gender6_d'),
                        'officermail6'=> $request->get('officermail6'),
                        'title6'=> $request->get('title6'),
                        'title6_d'=> $request->get('title6_d'),
                        'exec7'=> $request->get('exec7'),
                        'exec7_d'=> $request->get('exec7_d'),
                        'gender7'=> $request->get('gender7'),
                        'gender7_d'=> $request->get('gender7_d'),
                        'officermail7'=> $request->get('officermail7'),
                        'title7'=> $request->get('title7'),
                        'title7_d'=> $request->get('title7_d'),
                        'exec8'=> $request->get('exec8'),
                        'exec8_d'=> $request->get('exec8_d'),
                        'gender8'=> $request->get('gender8'),
                        'gender8_d'=> $request->get('gender8_d'),
                        'officermail8'=> $request->get('officermail8'),
                        'title8'=> $request->get('title8'),
                        'title8_d'=> $request->get('title8_d'),
                        'exec9'=> $request->get('exec9'),
                        'exec9_d'=> $request->get('exec9_d'),
                        'gender9'=> $request->get('gender9'),
                        'gender9_d'=> $request->get('gender9_d'),
                        'officermail9'=> $request->get('officermail9'),
                        'title9'=> $request->get('title9'),
                        'title9_d'=> $request->get('title9_d'),
                        'exec10'=> $request->get('exec10'),
                        'exec10_d'=> $request->get('exec10_d'),
                        'gender10'=> $request->get('gender10'),
                        'gender10_d'=> $request->get('gender10_d'),
                        'officermail10'=> $request->get('officermail10'),
                        'title10'=> $request->get('title10'),
                        'title10_d'=> $request->get('title10_d'),
                        'parentname'=> $request->get('parentname'),
                        'parentname_d'=> $request->get('parentname_d'),
                        'parentcity'=> $request->get('parentcity'),
                        'parentcity_d'=> $request->get('parentcity_d'),
                        'parentstat'=> $request->get('parentstat'),
                        'parentstat_d'=> $request->get('parentstat_d'),
                        'onumber'=> $request->get('onumber'),
                        'onumber_d'=> $request->get('onumber_d'),
                        'header'=> $request->get('header'), 
                        'advertiser'=> $request->get('advertiser'), 
                        'primarysic'=> $request->get('primarysic'),
                        'sic2'=> $request->get('sic2'),
                        'companyid'=> $request->get('companyid'),
                        'datasource'=> $request->get('datasource'),
                        'contact'=> $request->get('contact'),
                        'odatetime'=> $request->get('odatetime'),
                        'ocommetns'=> $request->get('ocommetns'),
                        'tdatetime'=> $request->get('tdatetime'),
                        'tcomments'=> $request->get('tcomments'),
                        'fcomments'=> $request->get('fcomments'),
                        'fdatetime'=> $request->get('fdatetime'),
                        'operator'=> $request->get('operator'),
                        'fdisp'=> $result,
                        'confdate'=> $request->get('confdate'),
                        'bookid'=> $request->get('bookid'),
                        'newinyear'=> $request->get('newinyear'),
                        'listnum'=> $request->get('listnum'),
                        'pdatetime'=> $request->get('pdatetime'),
                        'pcomments'=> $request->get('pcomments'),
                        'qeflag'=> $draftdata,
                        'oagent'=> $request->get('oagent'),
                        'tagent'=> $request->get('tagent'),
                        'fagent'=> $request->get('fagent'),
                        'datetime4'=> $request->get('datetime4'),
                        'comments4'=> $request->get('comments4'),
                        'agent4'=> $request->get('agent4'),
                        'datetime5'=> $request->get('datetime5'),
                        'comments5'=> $request->get('comments5'),
                        'agent5'=> $request->get('agent5'),
                        'sysgencomments'=> $request->get('sysgencomments'),
                        'priority'=> $request->get('priority'),
                        'addresserror'=> $request->get('addresserror'),
                        'dpvfootnote'=> $request->get('dpvfootnote'),
                        'altphone'=> $request->get('altphone'),
                        'altphone_d'=> $request->get('altphone_d'),
                        'paddress'=> $request->get('paddress'),
                        'paddress_d'=> $request->get('paddress_d'),
                        'pzip5'=> $request->get('pzip5'),
                        'pzip5_d'=> $request->get('pzip5_d'),
                        'addrchgreason'=> $request->get('addrchgreason'),
                        'empchgreason'=> $request->get('empchgreason'),
                        'callcount'=>$request->get('datacounting'),
                        'filesName'=>$request->get('filesName'),
                        'agentsnotes'=>$request->get('agentsnotes'),
                        'callstart'=>$request->get('callstart')
                        
                    ]); 
                $nrDataDuplicate->save();
                $userStatus = NULL;
                $dataId = $nrDataDuplicate['nr_mni_data_id'];
                $dataCount = NrMniData::where('id',$dataId)->first();
                $status = '1';
                $priority = $dataCount['callPriority'] + '1';
                $callPriority = $priority;
                $dataCount->fdisp = $result;
                $dataCount->callPriority = $callPriority;
                $dataCount->status_call = $status;
                $dataCount->user_id = $userStatus;
                $dataCount->save();
                 //UPDATE DATA TABLE
               
                $dataId = $nrDataDuplicate['nr_mni_data_id'];
                $countCall = NrMniDataDuplicate::where('nr_mni_data_id',$nrDataDuplicate->nr_mni_data_id)->count();
              return response()->json( array( 'dataupdated' => $nrDataDuplicate , 'countcall' => $countCall ));
    }
    //Check Status If Taking Calls
    public function updateStatusCalls(Request $request){

            $dataId = $request->input('nr_mni_data_id');
            $dataCount = NrMniData::where('id',$dataId)->first(); 
            $callstatus = $dataCount['status_call'];

            $validators = Validator::make($request->all(),[
                 'nr_mni_data_id' => 'required | exists:nr_mni_datas,id'
                ]); 

             if ($validators->fails()) {
                return response('error');
            } 
        
              if($callstatus == '2') {
                    $statusOne = '1';
                    $dataCount->status_call = $statusOne;
                    $dataCount->save();
                    return response()->json($dataCount['status_call']);
               }else{
                    return response()->json('correct');
               }
    }
    // ======ADMIN FUNCTION FOR USER===

    public function index() 
    {
        $NrMniDataUploaded = NrMniData::with('user')->get();
      return response()->json($NrMniDataUploaded);

    }

    public function nrmnidataDuplicateStatus() {

      $NrMniData = NrMniDataDuplicate::where('diliver_status','=','pending')
                                ->orderBy('created_at', 'desc')
                                ->distinct('nr_mni_data_id')
                                ->get()
                                ->unique('nr_mni_data_id');
        return response()->json($NrMniData);
    }

   public function getDelivered() {
     $NrMniData = NrMniDataDuplicate::where('diliver_status','=','delivered')
                                            ->orderBy('created_at', 'desc')
                                            ->get()
                                            ->unique('nr_mni_data_id');

     return response()->json($NrMniData);
   }

  public function getHistoryData() {
       $NrMniData = NrMniDataDuplicate::with('user')->get();
       return response()->json($NrMniData);
  }

  public function restoreDelivered(Request $request) {
   // $diliver_status = 'pending';
        $deliver_status = $request->input('diliver_status');
       $nr_mni_data_id = $request->input('nr_mni_data_id');
       $deliverid = $request->input('id');
       $getAll =  NrMniDataDuplicate::where('nr_mni_data_id', $nr_mni_data_id)->get();

      foreach ($getAll as $key => $getAlls) {
              $getAlls->diliver_status = $deliver_status;
              $getAlls->save();
          }

    return response()->json($getAll);
  } 

  // public function deliverStatus(Request $request) {

  //          $deliver_status = $request->input('diliver_status');
  //          $nr_mni_data_id = $request->input('nr_mni_data_id');
  //          $deliverid = $request->input('id');
  //          $getAll =  NrMniDataDuplicate::where('nr_mni_data_id', $nr_mni_data_id)->get();

  //         foreach ($getAll as $key => $getAlls) {
  //             $getAlls->diliver_status = $deliver_status;
  //             $getAlls->save();
  //         }

  //         return response()->json($getAll);
  //   }
  

  public function deliveredStatus2() {

    $allDatas = NrMniDataDuplicate::all();
    $deliver_status = 'delivered';
    foreach ($allDatas as $key => $allData) {
              $allData->diliver_status = $deliver_status;
              $allData->save();
      }

    return response()->json($allData);
  }

  public function uploaded()
    {
        //
      $NrMniDataUploaded = NrMniData::all();
      return response()->json($NrMniDataUploaded);
    }

    public function show($id)
    {
        //
        $NrMniData = NrMniData::find($id);

        $countCall = NrMniDataDuplicate::where('nr_mni_data_id',$id)
                                            ->count();
        $dataChecking = NrMniDataDuplicate::where('nr_mni_data_id',$id)
                                            ->latest()->first();

        if(!$NrMniData) {
          return response()->json('Error');  
        }

        return response()->json( array( 'dataupdated' => $NrMniData , 'countcall' => $countCall, 'dataChecking' => $dataChecking ));
    }


    public function callCountsNr(Request $request)
    {
         
              $validators = Validator::make($request->all(),[
                         'nr_mni_data_id' => 'required | exists:nr_mni_datas,id',
                         'descriptions' => 'nullable',
                         'descriptions' => 'nullable',
                    ]); 
                 if ($validators->fails()) {
                    return response('error');
                }
                 $callCount = new NrMniDataCallCount([ 
                      'nr_mni_data_id' => $request->get('nr_mni_data_id'),
                 ]); 
                $callCount->save();

      return response()->json($callCount);
    }

      public function setCalls(Request $request){


             $callset = $request->input('calls_set');
             $filenameId = $request->input('filenameId');
             $filenameData = $request->input('filenameData');

             $validators = Validator::make($request->all(),[
                     'calls_set' => 'required',
                     'filenameId' => 'nullable | exists:nr_mni_datas,filesName'
                    
                ]); 

             if ($validators->fails()) {
                return response('error2');
             }
             $settings = Setting::where('id',1)->first();
             $settings->calls_set = $callset;
             $settings->filenameId = $filenameId;
             $settings->filenameData = $filenameData;
             $settings->save();
             return response()->json($settings);
      }

      public function getsets() {
        $settings = Setting::where('id',1)->first();

        return response()->json($settings);
      }

      public function collectUploadedName() {

        $uploaded = NrMniData::select('filesName','filesNamePath')
                                    ->get()
                                    ->unique('filesName','filesNamePath');


        return response()->json($uploaded);
      }


      public function userInformation() {
          $user = auth('api')->user();
        return response()->json($user);

      }

        public function updateUserId(Request $request, $id)
        {
          $logs = auth('api')->user();
            $userId = $logs['id'];
            $udpateTalbeId = NrMniData::where('id', $id)->first();
            $user_id = $request->input('user_id');
            $udpateTalbeId->user_id = $user_id;
            $udpateTalbeId->save();

           return response()->json($udpateTalbeId);
        }


        public function updateStatus($id) {

             $getDataNr = NrMniData::where('id',$id)->first();
             $status = '1';
             $userStatus = NULL;
             $getDataNr->status_call = $status;
             $getDataNr->user_id = $userStatus;
             $getDataNr->save();

            return response()->json('success');
        }

        public function qeflag(Request $request, $id){
              $qeflagdata = NrMniDataDuplicate::where('id',$id)->first();
              $qeflag = $request->input('qeflag');
              $qeflagdata->qeflag = $qeflag;
              $qeflagdata->save();              
              return response()->json($qeflag);  
        }


}
