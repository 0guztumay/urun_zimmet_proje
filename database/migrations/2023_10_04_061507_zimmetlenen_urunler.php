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
            $table->id();
            $table->string("urun_adi");
            $table->string("urun_modeli");
            $table->string("urun_tipi");
            $table->string("urun_sayisi");
            $table->string("zimmetlenen_kisi");
            $table->string("zimmetleyen_kisi");
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
