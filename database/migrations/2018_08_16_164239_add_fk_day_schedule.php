<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkDaySchedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('schedules', function (Blueprint $table) {
            //
            $table->unsignedInteger('class_id')->nullable();
            $table->unsignedInteger('lecture_id')->nullable();
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('lecture_id')->references('id')->on('lecturers')->onDelete('set null')->onUpdate('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('schedules', function (Blueprint $table) {
            //
        });
    }
}
