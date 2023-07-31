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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('image')->unique()->nullable();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->integer('phone_number')->unique()->nullable();
            $table->tinyInteger('age')->nullable();
            $table->tinyInteger('gender')->default(1);
            $table->string('address')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('teachers');
    }
};
