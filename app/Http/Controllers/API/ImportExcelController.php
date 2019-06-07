<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ImportExcel;
use App\user;
use App\NrMniData;
use App\Excel;
use League\Csv\Reader;
use Validator;
class ImportExcelController extends Controller
{
            public function importCsv(Request $request)
                  {

                           $filesNamePath = $request->input('filesNamePath');
                           $datafiles = $request->file('filesName');


                                $validators = Validator::make($request->all(), [
                                          'filesName' => 'required|mimes:csv,txt'


                                ]);

                              if ($validators->fails()) {
                                  return response()->json('Files Should Be CSV');
                               }


                         if(empty($filesNamePath)){
                             return response()->json('Filename');
                         }

                        $requiredHeaders = array('compname','akadba','physaddr','physcity','physstate','physzip','vnumber','loccount','products','exec1','gender1','officermail1','title1','exec2','gender2','officermail2','title2','fnumber','nnumber','web','email','mailaddr','mailcity','mailstate','mailzip','yearestab','distribtyp','ownertype','sales','squarefeet','imports','exec3','gender3','gender3_d','title3','exec4','gender4','gender4_d','title4','exec5','gender5','officermail5','title5','exec6','gender6','officermail6','title6','exec7','gender7','officermail7','title7','exec8','gender8','officermail8','title8','exec9','gender9','officermail9','title9','exec10','gender10','officermail10','title10','parentname','parentcity','parentstat','onumber','header','advertiser','primarysic','sic2','companyid','datasource','bookid','newinyear','priority','addresserror','dpvfootnote','altphone','paddress','pzip5'); //headers we expect

                        $f = fopen($datafiles, 'r');
                        $firstLine = fgets($f); //get first line of csv file
                        fclose($f); // close file    
                        $foundHeaders = str_getcsv(trim($firstLine), ',', '"'); //parse to array
                        $result = array_diff($foundHeaders, $requiredHeaders);
                        if(!empty($result)){
                                    return response()->json(array( 'Invalid' => $result,
                                                                  'Headers' => $requiredHeaders));
                        }else{
                              $datafiles = $request->file('filesName');
                              $filesNamePath = $request->input('filesNamePath');
                            
                              $filesName = time().'.'.request()->filesName->getClientOriginalExtension();
                              $dataCSV = request()->filesName->move(public_path('files'), $filesName);
                              $currentData = public_path('files/'.$filesName);
                              $csv = Reader::createFromPath($currentData)
                                  ->setHeaderOffset(0);

                                  // dd($filesName);
                              foreach ($csv as $record) {

                               $nrdataImporting = new NrMniData([ 
                          
                                    // 'user_id'=> $record['user_id'], 
                                          'compname'=> $record['compname'],
                                          'akadba'=> $record['akadba'],
                                          'physaddr'=> $record['physaddr'],
                                          'physcity'=> $record['physcity'],
                                          'physstate'=> $record['physstate'],
                                          'physzip'=> $record['physzip'],
                                          'vnumber'=> $record['vnumber'],
                                          'loccount'=> $record['loccount'],
                                          'products'=> $record['products'],
                                          'exec1'=> $record['exec1'],
                                          'gender1'=> $record['gender1'],
                                          'officermail1'=> $record['officermail1'],
                                          'title1'=> $record['title1'],
                                          'exec2'=> $record['exec2'],
                                          'gender2'=> $record['gender2'],
                                          'officermail2'=> $record['officermail2'],
                                          'title2'=> $record['title2'],
                                          'fnumber'=> $record['fnumber'],
                                          'nnumber'=> $record['nnumber'],
                                          'web'=> $record['web'],
                                          'email'=> $record['email'],
                                          'mailaddr'=> $record['mailaddr'],
                                          'mailcity'=> $record['mailcity'],
                                          'mailstate'=> $record['mailstate'],
                                          'mailzip'=> $record['mailzip'],
                                          'yearestab'=> $record['yearestab'],
                                          'distribtyp'=> $record['distribtyp'],
                                          'ownertype'=> $record['ownertype'],
                                          'sales'=> $record['sales'],
                                          'squarefeet'=> $record['squarefeet'],
                                          'imports'=> $record['imports'],
                                          'exec3'=> $record['exec3'],
                                          'gender3'=> $record['gender3'],
                                          'gender3_d'=> $record['gender3_d'],
                                          'title3'=> $record['title3'],
                                          'exec4'=> $record['exec4'],
                                          'gender4'=> $record['gender4'],
                                          'gender4_d'=> $record['gender4_d'],
                                          'title4'=> $record['title4'],
                                          'exec5'=> $record['exec5'],
                                          'gender5'=> $record['gender5'],
                                          'officermail5'=> $record['officermail5'],
                                          'title5'=> $record['title5'],
                                          'exec6'=> $record['exec6'],
                                          'gender6'=> $record['gender6'],
                                          'officermail6'=> $record['officermail6'],
                                          'title6'=> $record['title6'],
                                          'exec7'=> $record['exec7'],
                                          'gender7'=> $record['gender7'],
                                          'officermail7'=> $record['officermail7'],
                                          'title7'=> $record['title7'],
                                          'exec8'=> $record['exec8'],
                                          'gender8'=> $record['gender8'],
                                          'officermail8'=> $record['officermail8'],
                                          'title8'=> $record['title8'],
                                          'exec9'=> $record['exec9'],
                                          'gender9'=> $record['gender9'],
                                          'officermail9'=> $record['officermail9'],
                                          'title9'=> $record['title9'],
                                          'exec10'=> $record['exec10'],
                                          'gender10'=> $record['gender10'],
                                          'officermail10'=> $record['officermail10'],
                                          'title10'=> $record['title10'],
                                          'parentname'=> $record['parentname'],
                                          'parentcity'=> $record['parentcity'],
                                          'parentstat'=> $record['parentstat'],
                                          'onumber'=> $record['onumber'],
                                          'header'=> $record['header'],
                                          'advertiser'=> $record['advertiser'],
                                          'primarysic'=> $record['primarysic'],
                                          'sic2'=> $record['sic2'],
                                          'companyid'=> $record['companyid'],
                                          'datasource'=> $record['datasource'],
                                          'bookid'=> $record['bookid'],
                                          'newinyear'=> $record['newinyear'],
                                          'priority'=> $record['priority'],
                                          'addresserror'=> $record['addresserror'],
                                          'dpvfootnote'=> $record['dpvfootnote'],
                                          'altphone'=> $record['altphone'],
                                          'paddress'=> $record['paddress'],
                                          'pzip5'=> $record['pzip5'],
                                          'filesNamePath'=> $filesNamePath,
                                          'filesName'=> $filesName
                                     ]); 
                                          $nrdataImporting->save();
                                          }
                                                 return response()->json('success');
                                    }

                        
                  }


}

