<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    public function up()
    {

        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('role')->default('Student');
            $table->string('slug')->nullable();
            $table->string('ucode')->default('ucodel'.time());
            $table->string('utype')->default('Student');
            $table->unsignedInteger('role_no')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('batch')->nullable();
            $table->unsignedInteger('standard_id')->nullable();
            $table->unsignedInteger('section_id')->nullable();
            $table->string('gender')->nullable();
            $table->string('avatar')->default('storage/images/avatars/avatar.png');
            $table->string('profile_bg'  )->default('storage/images/avatars/bg/profile-bg.png');
            $table->timestamps();
            $table->softDeletes();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
