<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableChamcong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamcong', function (Blueprint $table) {
            $table->id('Id_ChamCong');
            $table->integer('Id_NhanVien');
            $table->date('Ngay');
            $table->time('GioVao');
            $table->time('GioRa');
            $table->time('GioTangCa');
            $table->time('GioBS');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chamcong');
    }
}
