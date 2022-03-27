<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableTrinhdo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trinhdo', function (Blueprint $table) {
            $table->id('Id_TrinhDo');
            $table->integer('Id_LoaiTrinhDo');
            $table->text('TrinhDo',50);
          
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trinhdo');
    }
}
