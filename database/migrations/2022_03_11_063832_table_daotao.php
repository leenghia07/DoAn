<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableDaotao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('daotao', function (Blueprint $table) {
        //     $table->id('Id_DaoTao');
        //     $table->integer('Id_NhanVien');
        //     $table->integer('Id_LoaiDaoTao');
        //     $table->text('TenDaoTao',100);
        //     $table->date('NgayBatDau');
        //     $table->date('NgayKetThuc');
        //     $table->float('ChiPhi');
        //     $table->text('NoiDung',225);
        //     $table->text('NoiDaoTao',100);
        //     $table->boolean('TinhTrang',9);

        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('daotao');
    }
}
