<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableVanban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vanban', function (Blueprint $table) {
            $table->id('Id_VanBan');
            $table->integer('Id_NhanVien');
            $table->integer('Id_LoaiVanBan');
            $table->integer('soVB');
            $table->text('TenVanBan',100);
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
        Schema::dropIfExists('vanban');
    }
}
