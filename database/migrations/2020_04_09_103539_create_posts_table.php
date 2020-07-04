<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->text('body')->nullable();
            $table->string('slug')->unique();
            $table->unsignedInteger('category_id')->nullable();
            $table->string('type')->default('Socials');
            $table->boolean('friends_only')->default(false);
            $table->string('created_by')->nullable();
            $table->string('created_by_avatar')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
