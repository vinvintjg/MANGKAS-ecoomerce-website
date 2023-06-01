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
        Schema::create('booking_service', function (Blueprint $table) {
            $table->id();
            $table->integer('booking_id')->unsigned();
            $table->integer('service_id')->unsigned();

            // $table->unsignedBigInteger('booking_id');
            // $table->unsignedBigInteger('service_id');
            // $table->foreign('booking_id')->references('id')->on('bookings')
            // ->onUpdate('cascade')
            // ->onDelete('cascade');
            // $table->foreign('service_id')->references('id')->on('services')
            // ->onUpdate('cascade')
            // ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_service');
    }
};
