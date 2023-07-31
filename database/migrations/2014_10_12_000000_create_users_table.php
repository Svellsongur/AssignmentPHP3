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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('image')->unique()->nullable();
            $table->string('name')->nullable();
            $table->tinyInteger('age')->nullable();
            $table->integer('phone_number')->unique()->nullable();
            $table->string('password');
            $table->tinyInteger('gender')->default(1);
            $table->string('email')->unique()->nullable();
            $table->string('address')->nullable();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->tinyInteger('status')->default(1); //ban nguoi dung
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
