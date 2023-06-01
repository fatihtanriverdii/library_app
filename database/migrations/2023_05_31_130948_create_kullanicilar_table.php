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
        Schema::create('kullanicilar', function (Blueprint $table) {
            $table->id();
            $table->string('kullanici_adi')->unique();
            $table->string('email')->unique();
            $table->string('parola');
            $table->timestamp('kayit_tarihi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kullanicilar');
    }
};
