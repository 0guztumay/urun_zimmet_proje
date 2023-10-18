<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ZimmetlenenUrunler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zimmetlenen_urunler', function (Blueprint $table) {
            $table->id("urun_id");
            $table->integer("zimmetlenen_kisi_id");
            $table->string("urun_adi");
            $table->string("urun_modeli");
            $table->string("urun_tipi");
            $table->integer("urun_sayisi");
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
        Schema::dropIfExists('zimmetlenen_urunler');
    }
}
