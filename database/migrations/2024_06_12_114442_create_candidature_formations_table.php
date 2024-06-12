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
        Schema::create('candidature_formations', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('formation_id')->nullable();
            $table->foreignId('formation_id')->references('id')->on('formations')->onDelete('cascade');
            // $table->unsignedBigInteger('candidature_id')->nullable();
            $table->foreignId('candidature_id')->references('id')->on('candidatures')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidature_formations');
    }
};
