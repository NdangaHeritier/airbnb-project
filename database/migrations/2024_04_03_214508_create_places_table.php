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
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('place_name');
            $table->string('place_category');
            $table->string('place_type');
            $table->string('place_region');
            $table->string('province');
            $table->string('city');
            $table->string('street');
            $table->string('postal_code');
            $table->integer('number_of_guests');
            $table->integer('number_of_bedrooms');
            $table->integer('number_of_beds');
            $table->string('guests_to_accept');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};
