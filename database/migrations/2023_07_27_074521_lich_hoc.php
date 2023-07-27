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
        Schema::create('lichhoc', function (Blueprint $table) {
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->foreign('cahoc_id')->references('id')->on('cahoc')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('lichhoc');
    }
};
