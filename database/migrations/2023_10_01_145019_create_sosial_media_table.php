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
        Schema::create('sosial_media', function (Blueprint $table) {
            $table->id();
            $table->string("instagram")->nullable();
            $table->string("tiktok")->nullable();
            $table->string("facebook")->nullable();
            $table->string("youtube")->nullable();
            $table->string("email")->nullable();
            $table->string("maps")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sosial_media');
    }
};
