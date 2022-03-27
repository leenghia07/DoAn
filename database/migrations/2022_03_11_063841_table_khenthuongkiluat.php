<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableKhenthuongkiluat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khenthuongkiluat', function (Blueprint $table) {
            $table->id('Id_KTKL');
            $table->integer('Id_NhanVien');
            $table->date('Ngay');
            $table->float('TienKTKL');
            $table->text('NoiDung',225);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khenthuongkiluat');
    }
}
