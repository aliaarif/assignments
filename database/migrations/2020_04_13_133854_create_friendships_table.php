<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendshipsTable extends Migration
{
    
    public function up()
    {
        Schema::create('friendships', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('requester')->nullable();
            $table->unsignedInteger('requested')->nullable();
            $table->boolean('status')->default(false);
            $table->timestamps();
            $table->softDeletes();          
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('friendships');
    }
}

