<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
 public function up()
{
    Schema::table('urunler', function (Blueprint $table) {
        if (!Schema::hasColumn('urunler', 'alt_kategori')) {
            $table->string('alt_kategori')->nullable()->after('kategori');
        }
    });
}

public function down()
{
    Schema::table('urunler', function (Blueprint $table) {
        $table->dropColumn('alt_kategori');
    });
}


};
