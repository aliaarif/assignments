<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('ucode')->default('ucodel'.time());
            $table->unsignedInteger('role_id')->default(1);
            $table->unsignedInteger('user_id')->nullable();
            //$table->string('utype')->nullable();
            $table->unsignedInteger('standard_id')->nullable();
            $table->unsignedInteger('section_id')->nullable();
            $table->unsignedInteger('department_id')->nullable();
            //$table->unsignedInteger('batch')->default(2020);
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->rememberToken()->nullable();
            $table->boolean('verified')->default(false);
            $table->string('api_token')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
