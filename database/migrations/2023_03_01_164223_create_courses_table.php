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
        Schema::create('courses', function (Blueprint $table) {
            $table->increments("id");
            $table->timestamps();
            $table->unsignedBigInteger("student_id")->unsigned();
            $table->unsignedBigInteger("teacher_id")->unsigned();
            $table->string("name");
            
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');

            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
