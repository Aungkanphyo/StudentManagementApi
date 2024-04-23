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
        Schema::create('students', function (Blueprint $table) {
            $table->integer('student_id')->autoIncrement();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('date_of_birth');
            $table->string('student_type');
            $table->integer('card_number');
            $table->foreign('student_type')->references('student_type')->on('student_types')->onDelete('cascade');
            $table->foreign('card_number')->references('card_number')->on('student_cards')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
