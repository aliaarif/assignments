<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('department_id')->nullable();
            $table->unsignedInteger('standard_id')->nullable();
            //$table->string('attendance_date')->nullable();
            $table->date('attendance_date')->nullable();
            $table->string('attendance_type')->default('Student');
            $table->string('attendance')->default('Present');
            //$table->boolean('attendance');
            $table->string('created_by')->nullable();
            $table->string('created_by_avatar')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}
