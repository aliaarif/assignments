<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFailedJobsTable extends Migration
{
    public function up()
    {
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->text('connection')->nullable();
            $table->text('queue')->nullable();
            $table->longText('payload')->nullable();
            $table->longText('exception')->nullable();
            $table->softDeletes();
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }
}
