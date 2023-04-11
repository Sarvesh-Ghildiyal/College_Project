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
        Schema::create('complain', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacher_id');
            $table->string('department');
            $table->unsignedBigInteger('room_no');
            $table->string('reported_by');
            $table->string('problem');
            $table->string('comp_obs');
            $table->string('user_remarks');
            $table->string('comp_about');
            $table->string('admin_remarks');
            $table->string('admin_com');
            $table->string('complain_status');

            $table->foreign('teacher_id')->references('id')->on('teachers_data')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complain');
    }
};
