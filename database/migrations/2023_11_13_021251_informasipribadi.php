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
        Schema::create('informasipribadi', function (Blueprint $table) {
        $table->id();
        $table->text('gambar');
        $table->text('namalengkap');
        $table->string('namapanggilan');
        $table->string('ttl');
        $table->text('agama');      
        $table->text('domisili');
        $table->text('rumah');
        $table->text('status');
        $table->text('deskripsi');
        $table->timestamps();

    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasipribadi');
    }
};
