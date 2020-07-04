<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('standard_id')->nullable();
            $table->unsignedInteger('teacher_id')->nullable();
            $table->string('section_name');
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
        Schema::dropIfExists('sections');
    }
}
