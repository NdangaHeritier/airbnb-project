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
        Schema::create('bathrooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('place_id')->constraint('places')->onDelete('cascade');
            $table->integer('private');
            $table->integer('dedicated');
            $table->integer('shared');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bathrooms');
    }
};
