<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblUrunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_urun', function (Blueprint $table) {
            $table->increments('urun_id');
            $table->string('urun_kategori');
            $table->string('urun_marka');
            $table->string('urun_islemci');
            $table->string('urun_ram');
            $table->string('urun_disk');
            $table->string('urun_ekran');
            $table->string('urun_garanti');
            $table->string('urun_durum');
            $table->string('urun_kimden');
            $table->string('urun_adres');
            $table->string('urun_resim');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_urun');
    }
}
