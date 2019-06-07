<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNrMniDatasDuplicate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nr_mni_datas_duplicates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('nr_mni_data_id');
            $table->text('compname', 200)->nullable();
            $table->text('compname_d', 200)->nullable();
            $table->text('akadba', 200)->nullable();
            $table->text('akadba_d', 200)->nullable();
            $table->text('physaddr', 200)->nullable();
            $table->text('physaddr_d', 200)->nullable();
            $table->text('physcity', 200)->nullable();
            $table->text('physcity_d', 200)->nullable();
            $table->text('physstate', 200)->nullable();
            $table->text('physstat_d', 200)->nullable();
            $table->text('physzip', 200)->nullable();
            $table->text('physzip_d', 200)->nullable();
            $table->text('vnumber', 200)->nullable();
            $table->text('vnumber_d', 200)->nullable();
            $table->text('loccount', 200)->nullable();
            $table->text('loccount_d', 200)->nullable();
            $table->text('products', 200)->nullable();
            $table->text('products_d', 200)->nullable();
            $table->text('exec1', 200)->nullable();
            $table->text('exec1_d', 200)->nullable();
            $table->text('gender1', 200)->nullable();
            $table->text('gender1_d', 200)->nullable();
            $table->text('officermail1', 200)->nullable();
            $table->text('title1', 200)->nullable();
            $table->text('title1_d', 200)->nullable();
            $table->text('exec2', 200)->nullable();
            $table->text('exec2_d', 200)->nullable();
            $table->text('gender2', 200)->nullable();
            $table->text('gender2_d', 200)->nullable();
            $table->text('officermail2', 200)->nullable();
            $table->text('title2', 200)->nullable();
            $table->text('title2_d', 200)->nullable(); 
            $table->text('fnumber', 200)->nullable();
            $table->text('fnumber_d', 200)->nullable();
            $table->text('nnumber', 200)->nullable();
            $table->text('nnumber_d', 200)->nullable();
            $table->text('web', 200)->nullable();
            $table->text('web_d', 200)->nullable();
            $table->text('email', 200)->nullable();
            $table->text('email_d', 200)->nullable();
            $table->text('mailaddr', 200)->nullable();
            $table->text('mailaddr_d', 200)->nullable();
            $table->text('mailcity', 200)->nullable();
            $table->text('mailcity_d', 200)->nullable();
            $table->text('mailstate', 200)->nullable();
            $table->text('mailstat_d', 200)->nullable();
            $table->text('mailzip', 200)->nullable();
            $table->text('mailzip_d', 200)->nullable();
            $table->text('yearestab', 200)->nullable();
            $table->text('yearesta_d', 200)->nullable();
            $table->text('distribtyp', 200)->nullable();
            $table->text('distribty_d', 200)->nullable();
            $table->text('ownertype', 200)->nullable();
            $table->text('ownertyp_d', 200)->nullable();
            $table->text('sales', 200)->nullable();
            $table->text('sales_d', 200)->nullable();
            $table->text('squarefeet', 200)->nullable();
            $table->text('squarefe_d', 200)->nullable();
            $table->text('imports', 200)->nullable();
            $table->text('imports_d', 200)->nullable();
            $table->text('exec3', 200)->nullable();
            $table->text('exec3_d', 200)->nullable();
            $table->text('gender3', 200)->nullable();
            $table->text('gender3_d', 200)->nullable();
            $table->text('officermail3', 200)->nullable();
            $table->text('title3', 200)->nullable();
            $table->text('title3_d', 200)->nullable();
            $table->text('exec4', 200)->nullable();
            $table->text('exec4_d', 200)->nullable();
            $table->text('gender4', 200)->nullable();
            $table->text('gender4_d', 200)->nullable();
            $table->text('officermail4', 200)->nullable();
            $table->text('title4', 200)->nullable();
            $table->text('title4_d', 200)->nullable();
            $table->text('exec5', 200)->nullable();
            $table->text('exec5_d', 200)->nullable();
            $table->text('gender5', 200)->nullable();
            $table->text('gender5_d', 200)->nullable();
            $table->text('officermail5', 200)->nullable();
            $table->text('title5', 200)->nullable();
            $table->text('title5_d', 200)->nullable();
            $table->text('exec6', 200)->nullable();
            $table->text('exec6_d', 200)->nullable();
            $table->text('gender6', 200)->nullable();
            $table->text('gender6_d', 200)->nullable();
            $table->text('officermail6', 200)->nullable();
            $table->text('title6', 200)->nullable();
            $table->text('title6_d', 200)->nullable();
            $table->text('exec7', 200)->nullable();
            $table->text('exec7_d', 200)->nullable();
            $table->text('gender7', 200)->nullable();
            $table->text('gender7_d', 200)->nullable();
            $table->text('officermail7', 200)->nullable();
            $table->text('title7', 200)->nullable();
            $table->text('title7_d', 200)->nullable();
            $table->text('exec8', 200)->nullable();
            $table->text('exec8_d', 200)->nullable();
            $table->text('gender8', 200)->nullable();
            $table->text('gender8_d', 200)->nullable();
            $table->text('officermail8', 200)->nullable();
            $table->text('title8', 200)->nullable();
            $table->text('title8_d', 200)->nullable();
            $table->text('exec9', 200)->nullable();
            $table->text('exec9_d', 200)->nullable();
            $table->text('gender9', 200)->nullable();
            $table->text('gender9_d', 200)->nullable();
            $table->text('officermail9', 200)->nullable();
            $table->text('title9', 200)->nullable();
            $table->text('title9_d', 200)->nullable();
            $table->text('exec10', 200)->nullable();
            $table->text('exec10_d', 200)->nullable();
            $table->text('gender10', 200)->nullable();
            $table->text('gender10_d', 200)->nullable();
            $table->text('officermail10', 200)->nullable();
            $table->text('title10', 200)->nullable();
            $table->text('title10_d', 200)->nullable();
            $table->text('parentname', 200)->nullable();
            $table->text('parentna_d', 200)->nullable();
            $table->text('parentcity', 200)->nullable();
            $table->text('parentci_d', 200)->nullable();
            $table->text('parentstat', 200)->nullable();
            $table->text('parentst_d', 200)->nullable();
            $table->text('onumber', 200)->nullable();
            $table->text('onumber_d', 200)->nullable();
            $table->text('header', 200)->nullable(); 
            $table->text('advertiser', 200)->nullable(); 
            $table->text('primarysic', 200)->nullable();
            $table->text('sic2', 200)->nullable();
            $table->text('companyid', 200)->nullable();
            $table->text('datasource', 200)->nullable();
            $table->text('contact', 200)->nullable();
            $table->text('odatetime', 200)->nullable();
            $table->text('ocommetns', 200)->nullable();
            $table->text('tdatetime', 200)->nullable();
            $table->text('tcomments', 200)->nullable();
            $table->text('fcomments', 200)->nullable();
            $table->text('fdatetime', 200)->nullable();
            $table->text('operator', 200)->nullable();
            $table->text('fdisp', 200)->nullable();
            $table->text('confdate', 200)->nullable();
            $table->text('bookid', 200)->nullable();
            $table->text('newinyear', 200)->nullable();
            $table->text('listnum', 200)->nullable();
            $table->text('pdatetime', 200)->nullable();
            $table->text('pcomments', 200)->nullable();
            $table->text('qeflag', 200)->nullable();
            $table->text('oagent', 200)->nullable();
            $table->text('tagent', 200)->nullable();
            $table->text('fagent', 200)->nullable();
            $table->text('datetime4', 200)->nullable();
            $table->text('comments4', 200)->nullable();
            $table->text('agent4', 200)->nullable();
            $table->text('datetime5', 200)->nullable();
            $table->text('comments5', 200)->nullable();
            $table->text('agent5', 200)->nullable();
            $table->text('sysgencomments', 200)->nullable();
            $table->text('priority', 200)->nullable();
            $table->text('addresserror', 200)->nullable();
            $table->text('dpvfootnote', 200)->nullable();
            $table->text('altphone', 200)->nullable();
            $table->text('altphone_d', 200)->nullable();
            $table->text('paddress', 200)->nullable();
            $table->text('paddress_d', 200)->nullable();
            $table->text('pzip5', 200)->nullable();
            $table->text('pzip5_d', 200)->nullable();
            $table->text('addrchgreason', 200)->nullable();
            $table->text('empchgreason', 200)->nullable();
            $table->text('callcount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nr_mni_datas_duplicate');
    }
}
