<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            //$table->string('state')->nullable();
            //$table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('locality')->nullable();
            $table->string('gender')->nullable();
            $table->string('salary')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('candidates');
    }
}
