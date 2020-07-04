<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    public function up()
    {
       Schema::create('cities', function (Blueprint $table) {
        $table->id();
        $table->string('name')->nullable();  
        $table->unsignedInteger('state_id')->nullable();
        $table->timestamps();
        $table->softDeletes();          
    });
   }
    
   public function down()
    {
        Schema::dropIfExists('cities');
    }
}
