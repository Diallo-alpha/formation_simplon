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
            $table->enum('statut', ['en_cours', 'accepter', 'refuser', 'en_attente'])->default('en_cours');
            // $table->unsignedBigInteger('formation_id')->nullable();
            $table->foreignId('formation_id')->references('id')->on('formations')->onDelete('cascade');
            // $table->unsignedBigInteger('candidature_id')->nullable();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
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
