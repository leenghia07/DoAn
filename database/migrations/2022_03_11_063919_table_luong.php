<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableLuong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luong', function (Blueprint $table) {
            $table->id('Id_Luong');
            $table->integer('Id_NhanVien');
            $table->float('LuongCoBan');
            $table->float('HeSoLuong');
            $table->float('LuongLamThem');
            $table->float('TienKTKL');
            $table->float('TongLuong');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('luong');
    }
}
