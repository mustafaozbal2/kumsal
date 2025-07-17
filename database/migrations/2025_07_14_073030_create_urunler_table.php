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
    Schema::create('urunler', function (Blueprint $table) {
        $table->id();
        $table->string('isim');
        $table->text('aciklama')->nullable();
        $table->decimal('fiyat', 8, 2);
        $table->string('resim')->nullable();
        $table->enum('kategori', ['sandalye', 'sandik']);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('urunler');
    }
};
