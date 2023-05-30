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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('shop_name');
            $table->string('shop_photo_1');
            $table->string('shop_photo_2')->nullable();
            $table->string('shop_photo_3')->nullable();
            $table->string('shop_photo_4')->nullable();
            $table->integer('shop_price_low');
            $table->integer('shop_price_high');
            $table->integer('shop_rate');
            $table->string('shop_location');
            $table->string('shop_description');
            $table->string('shop_address');
            $table->unsignedBigInteger('shop_id');
            $table->foreign('shop_id')->references('id')->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
