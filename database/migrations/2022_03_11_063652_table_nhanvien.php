<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableNhanvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->id('Id_NhanVien');
            $table->integer('Id_TrinhDo');
            $table->integer('Id_ChucVu');
            $table->integer('Id_ChuyenMon');
            $table->integer('Id_BoMon');
            $table->text('Ho',40);
            $table->text('Ten',20);
            $table->date('NgaySinh');
            $table->text('GioiTinh',10);
            $table->text('CMND',30);
            $table->text('DanToc',20);
            $table->text('SDT',20);
            $table->text('DiaChi',20);
            $table->text('QueQuan',20);
            $table->text('DonVi',20);
            $table->boolean('DaVaoDang',20);
            $table->boolean('BienChe',20);
            $table->date('BatDauCongTac',20);
            $table->date('NgayVaoTruong',20);
            $table->text('Email',50);
            $table->text('HinhAnh',100);
            $table->text('TenTk',20);
            $table->text('MatKhau',20);
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanvien');
    }
}
