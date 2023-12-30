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
        Schema::create('pelatihs', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('photo')->nullable();
            $table->string('nomor_telepon')->nullable();
            $table->string('umur')->nullable();
            $table->string('alamat')->nullable();
            $table->string('club')->nullable();
            $table->string('riwayat_club')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelatihs');
    }
};
