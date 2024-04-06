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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user')->constraint('users')->onDelete('cascade');
            $table->foreignId('host')->constraint('users')->ondelete('restrict');
            $table->foreignId('place')->constraint('places')->ondelete('cascade');
            $table->integer('guests');
            $table->integer('infants');
            $table->date('checkin_date');
            $table->date('checkout_date');
            $table->string('status');
            $table->integer('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
