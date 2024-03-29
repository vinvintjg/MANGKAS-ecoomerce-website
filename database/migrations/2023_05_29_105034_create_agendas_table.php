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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hairstylist_id');
            $table->date('date');
            $table->time('hour');
            $table->string('status');
            $table->unsignedBigInteger('shop_id');

            $table->foreign('hairstylist_id')->references('id')->on('hairstylists')
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('agendas');
    }
};
