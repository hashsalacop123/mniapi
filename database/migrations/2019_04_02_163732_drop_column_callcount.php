<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumnCallcount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::table('nr_mni_datas', function (Blueprint $table) {;
            $table->dropColumn('callcount');
          //    $table->bigInteger('callcount')->unsigned()->default(0)->change();
          
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
        $table->bigInteger('callcount')->unsigned();
    }
}
