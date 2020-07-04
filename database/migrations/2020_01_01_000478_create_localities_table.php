<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalitiesTable extends Migration
{
    
    public function up()
    {
        Schema::create('localities', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('city_id')->nullable();
            $table->string('name')->nullable();  
            $table->boolean('seo')->default(true);  
            $table->timestamps();
            $table->softDeletes();          
        });
    }

    public function down()
    {
        Schema::dropIfExists('localities');
    }
}
