<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStandardsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('standards', function (Blueprint $table) {
            $table->id();
            $table->string('standard_name');
            $table->unsignedInteger('teacher_id')->nullable();
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
        Schema::dropIfExists('standards');
    }
}
