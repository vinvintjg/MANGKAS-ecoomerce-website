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
        Schema::create('hairstylists', function (Blueprint $table) {
            $table->id();
            $table->string('hairstylist_name');
            $table->string('hairstylist_logo');
            $table->string('hairstylist_description');
            $table->integer('hairstylist_rate');
            $table->integer('hairstylist_review');
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
        Schema::dropIfExists('hairstylists');
    }
};
