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
        Schema::create('order_foods', function (Blueprint $table) {
            $table->id();
            //* Relacion a food
            $table->unsignedBigInteger('food_id');
            $table->unsignedBigInteger('order_id');
            $table->foreign('food_id')->references('id')->on('food');
            //* Relacion a order
            $table->foreign('order_id')->references('id')->on('orders');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_foods');
    }
};
