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
        //
        Schema::create('bills', function (Blueprint $table) {
            $table->primary('id');
            $table->integer('price')->nullable();
            $table->integer('last_price')->nullable();
            $table->tinyInteger('status')->default(1); //1 la da tra 
            $table->foreign('sale_id')->references('id')->on('sale')->onDelete('cascade');
            $table->timestamps(); //tg tao bill
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('bill');
    }
};