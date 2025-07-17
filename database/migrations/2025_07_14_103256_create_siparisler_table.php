<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
 public function up(): void
{
    Schema::create('siparisler', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('urun_id');
        $table->string('isim');
        $table->string('soyisim');
        $table->string('il');
        $table->string('ilce');
        $table->text('adres');
        $table->integer('adet');
        $table->timestamps();

        $table->foreign('urun_id')->references('id')->on('urunler')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siparisler');
    }
};
