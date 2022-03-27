<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableYeucau extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yeucau', function (Blueprint $table) {
            $table->id('Id_YeuCau');
            $table->integer('Id_NhanVien');
            $table->integer('Id_LoaiYeuCau');
            $table->date('Ngay');
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
        Schema::dropIfExists('yeucau');
    }
}
