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
        Schema::create('pengalamanbank', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->string('perusahaan');
            $table->string('posisikerja');
            $table->string('tanggungjawab');
            $table->string('prestasi');
            $table->string('penghargaan');
            $table->string('omset');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengalamanbank');
    }
};
