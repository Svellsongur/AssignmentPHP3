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
        Schema::create('sale', function (Blueprint $table) {
            $table->id();
            $table->string('sale_code')->nullable();
            $table->tinyInteger('sale_percent')->nullable();
            $table->string('description');
            $table->tinyInteger('count')->nullable();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('sale');
    }
};
