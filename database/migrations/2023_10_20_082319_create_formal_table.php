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
        Schema::create('formal', function (Blueprint $table) {
            $table->id();
            $table->string('tingkatansekolah');
            $table->string('namasekolah');
            $table->string('jurusan');
            $table->string('tahun');
            $table->text('gelar');
            $table->integer('IPK');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formal');
    }
};
