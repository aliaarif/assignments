<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->text('body')->nullable();
            $table->string('slug')->unique();
            $table->unsignedInteger('category_id')->nullable();
            $table->boolean('featured')->default(false);
            $table->boolean('top_featured')->default(false);
            $table->string('created_by')->nullable();
            $table->string('created_by_avatar')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
