<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateNrTableDuplicate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::table('nr_mni_datas_duplicates', function (Blueprint $table) {;
              $table->renameColumn('physstat_d','physstate_d')->nullable()->change();
              $table->renameColumn('mailstat_d','mailstate_d')->nullable()->change();
              $table->renameColumn('yearesta_d','yearestab_d')->nullable()->change();
              $table->renameColumn('distribty_d','distribtyp_d')->nullable()->change();
              $table->renameColumn('ownertyp_d',' ownertype_d')->nullable()->change();
              $table->renameColumn('squarefe_d','squarefeet_d')->nullable()->change();
              $table->renameColumn('parentci_d','parentcity_d')->nullable()->change();
              $table->renameColumn('parentst_d','parentstat_d')->nullable()->change();
  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
