<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMiniData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('mini_datas', function (Blueprint $table) {;
             $table->bigInteger('callcount')->default(1)->change();
              $table->date('odatetime')->nullable()->change();
              $table->text('tdatetime')->nullable()->change();
              $table->date('fdatetime')->nullable()->change();
              $table->date('confdate')->nullable()->change();
              $table->date('pdatetime')->nullable()->change();
              $table->date('4datetime')->nullable()->change();
              $table->date('5datetime')->nullable()->change();
              $table->date('adate')->nullable()->change();
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
