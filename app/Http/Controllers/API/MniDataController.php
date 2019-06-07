<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\MiniData;
use App\StartCall;
use Validator;
use Illuminate\Support\Facades\Auth;
class MniDataController extends Controller
{
    /** test
     * Display a listing of the resource.
     *sdfsd
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
     // $user = $request->user();
     // $user = Auth::user();
     $MiniData = MiniData::all();
  
      return response()->json($MiniData);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $user = Auth::user();
        $MiniData = MiniData::find($id);

        if(!$MiniData) {

          return response('Error');  
        }
        return response()->json($MiniData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
    
        // DATA UPDATE
        $MiniDataCallCount = StartCall::where('mini_datas_id',$id)->count();
        $callCounts = $MiniDataCallCount + '1';
        $MiniData = MiniData::find($id);


        $arrayCallsCount = array("firstCall"=>"1", "seconCall"=>"2", "thirdCall"=>"3", "forthCall"=>"4", "fifthCall"=>"5", "sixthCall"=>"6", "sevenCall"=>"7", "eightCall"=>"8", "nineCall"=>"9", "tenCall"=>"10", "modFirstCall"=>"1", "modSecondCall"=>"2", "modThirdCall"=>"3", "modForthCall"=>"4", "modFifthCall"=>"5", "modSixthCall"=>"6", "modSevenCall"=>"7", "modEightCall"=>"8","modNineCall"=>"9", "modTenCall"=>"10", "unFirstCall"=>"1", "unSecondCall"=>"2", "unThirdCall"=>"3", "unForthCall"=>"4", "unFifthCall"=>"5", "unSixthCall"=>"6", "unSevenCall"=>"7", "unEightCall"=>"8", "unNineCall"=>"9", "unTenCall"=>"10",);

        dd($arrayCallsCount);




        $compname_d = $request->input('compname_d');
        $akadba_d = $request->input('akadba_d');
        $physaddr_d = $request->input('physaddr_d');
        $physcity_d = $request->input('physcity_d');
        $physstat_d = $request->input('physstat_d');
        $physzip_d = $request->input('physzip_d');
        $vnumber_d = $request->input('vnumber_d');
        $loccount_d = $request->input('loccount_d');
        $products_d = $request->input('products_d');
        $exec1_d = $request->input('exec1_d');
        $gender1_d = $request->input('gender1_d');
        $title1_d = $request->input('title1_d');
        $exec2_d = $request->input('exec2_d');
        $gender2_d = $request->input('gender2_d');
        $title2_d = $request->input('title2_d');
        $fnumber_d = $request->input('fnumber_d');
        $nnumber_d = $request->input('nnumber_d');
        $web_d = $request->input('web_d');
        $email_d = $request->input('email_d');
        $mailaddr_d = $request->input('mailaddr_d');
        $mailcity_d = $request->input('mailcity_d');
        $mailstat_d = $request->input('mailstat_d');
        $mailzip_d = $request->input('mailzip_d');
        $yearestab_d = $request->input('yearestab_d');
        $distribtyp_d = $request->input('distribtyp_d');
        $ownertype_d = $request->input('ownertype_d');
        $sales_d = $request->input('sales_d');
        $squarefe_d = $request->input('squarefe_d');
        $imports_d = $request->input('imports_d');
        $exec3_d = $request->input('exec3_d');
        $gender3_d = $request->input('gender3_d');
        $title3_d = $request->input('title3_d');
        $exec4_d = $request->input('exec4_d');
        $gender4_d = $request->input('gender4_d');
        $title4_d = $request->input('title4_d');
        $exec5_d = $request->input('exec5_d');
        $gender5_d = $request->input('gender5_d');
        $title5_d = $request->input('title5_d');
        $exec6_d = $request->input('exec6_d');
        $gender6_d = $request->input('gender6_d');
        $title6_d = $request->input('title6_d');
        $exec7_d = $request->input('exec7_d');
        $gender7_d = $request->input('gender7_d');
        $title7_d = $request->input('title7_d');
        $exec8_d = $request->input('exec8_d');
        $gender8_d = $request->input('gender8_d');
        $title8_d = $request->input('title8_d');
        $exec9_d = $request->input('exec9_d');
        $gender9_d = $request->input('gender9_d');
        $title9_d = $request->input('title9_d');
        $exec10_d = $request->input('exec10_d');
        $gender10_d = $request->input('gender10_d');
        $title10_d = $request->input('title10_d');
        $parentna_d = $request->input('parentna_d');
        $parentci_d = $request->input('parentcity');
        $parentst_d = $request->input('parentst_d');
        $onumber_d = $request->input('onumber_d');
        $inventid_d = $request->input('inventid_d');
        $multiline_d = $request->input('multiline_d');
        $altcontactname_d = $request->input('altcontactname_d');
        $altcontacttitle_d = $request->input('altcontacttitle_d');
        $altwrhsemcpt_d = $request->input('altwrhsemcpt_d');
        $altwrhssqft_d = $request->input('altwrhssqft_d');
        $callcount = $callCounts;

     
        $MiniData->compname_d = $compname_d;
        $MiniData->akadba_d = $akadba_d;
        $MiniData->physaddr_d = $physaddr_d;
        $MiniData->physcity_d = $physcity_d;
        $MiniData->physstat_d = $physstat_d;
        $MiniData->physzip_d = $physzip_d;
        $MiniData->vnumber_d = $vnumber_d;
        $MiniData->loccount_d = $loccount_d;
        $MiniData->products_d = $products_d;
        $MiniData->exec1_d = $exec1_d;
        $MiniData->gender1_d = $gender1_d;
        $MiniData->title1_d = $title1_d;
        $MiniData->exec2_d = $exec2_d;
        $MiniData->gender2_d = $gender2_d;
        $MiniData->title2_d = $title2_d;
        $MiniData->fnumber_d = $fnumber_d;
        $MiniData->nnumber_d = $nnumber_d;
        $MiniData->web_d = $web_d;
        $MiniData->email_d = $email_d;
        $MiniData->mailaddr_d = $mailaddr_d;
        $MiniData->mailcity_d = $mailcity_d;
        $MiniData->mailstat_d = $mailstat_d;
        $MiniData->mailzip_d = $mailzip_d;
        $MiniData->yearestab_d = $yearestab_d;
        $MiniData->distribtyp_d = $distribtyp_d;
        $MiniData->ownertype_d = $ownertype_d;
        $MiniData->sales_d = $sales_d;
        $MiniData->squarefe_d = $squarefe_d;
        $MiniData->imports_d = $imports_d;
        $MiniData->exec3_d = $exec3_d;
        $MiniData->gender3_d = $gender3_d;
        $MiniData->title3_d = $title3_d;
        $MiniData->exec4_d = $exec4_d;
        $MiniData->gender4_d = $gender4_d;
        $MiniData->title4_d = $title4_d;
        $MiniData->exec5_d = $exec5_d;
        $MiniData->gender5_d = $gender5_d;
        $MiniData->title5_d = $title5_d;
        $MiniData->exec6_d = $exec6_d;
        $MiniData->gender6_d = $gender6_d;
        $MiniData->title6_d = $title6_d;
        $MiniData->exec7_d = $exec7_d;
        $MiniData->gender7_d = $gender7_d;
        $MiniData->title7_d = $title7_d;
        $MiniData->exec8_d = $exec8_d;
        $MiniData->gender8_d = $gender8_d;
        $MiniData->title8_d = $title8_d;
        $MiniData->exec9_d = $exec9_d;
        $MiniData->gender9_d = $gender9_d;
        $MiniData->title9_d = $title9_d;
        $MiniData->exec10_d = $exec10_d;
        $MiniData->gender10_d = $gender10_d;
        $MiniData->title10_d = $title10_d;
        $MiniData->parentna_d = $parentna_d;
        $MiniData->parentci_d = $parentci_d;
        $MiniData->parentst_d = $parentst_d;
        $MiniData->onumber_d = $onumber_d;
        $MiniData->inventid_d = $inventid_d;
        $MiniData->multiline_d = $multiline_d;
        $MiniData->altcontactname_d = $altcontactname_d;
        $MiniData->altcontacttitle_d = $altcontacttitle_d;
        $MiniData->altwrhsemcpt_d = $altwrhsemcpt_d;
        $MiniData->altwrhssqft_d = $altwrhssqft_d;
        $MiniData->callcount = $callcount; 
        $MiniData->save();

       return response()->json($MiniData);
    }


    public function countCall(Request $request) {
              // STARTS CALLS OR COUNT CALL
      
              $validators = Validator::make($request->all(),[
                         'mini_datas_id' => 'required | exists:mini_datas,id',
                         'descriptions' => 'nullable',
                         'status' => 'nullable',
                    ]); 

                 if ($validators->fails()) {
                    return response('error');
                }
             

                 $callCount = new StartCall([ 
                      'mini_datas_id' => $request->get('mini_datas_id'),
                 ]); 
                $callCount->save();

             return response()->json($callCount);
    }

    public function countAllCalls($id) {

      

      

        // dd($MiniData);
        //->leftJoin('posts', 'users.id', '=', 'posts.user_id')
        return response()->json($MiniData);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
