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
        Schema::create('berita_kategoris', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('berita_id')->unsigned();
            $table->foreign('berita_id')->references('id')->on('beritas')->onDelete('cascade');
            $table->bigInteger('kategori_id')->unsigned();
            $table->foreign('kategori_id')->references('id')->on('kategoris')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita_kategoris');
    }
};
