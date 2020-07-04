<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('ucode')->default('ucodel'.time());
            $table->string('live_server_uri')->default('#');
            $table->string('dev_server_uri')->default('http://dev.mps/');
            $table->boolean('notifications')->default(true);
            $table->boolean('show_recent_activity')->default(false);
            $table->boolean('show_task_statistics')->default(false);
            $table->boolean('show_your_mails')->default(false);
            $table->boolean('email_notifications')->default(true);
            $table->boolean('system_logs')->default(false);
            $table->boolean('error_reporting')->default(false);
            $table->boolean('application_logs')->default(true);
            $table->boolean('backup_servers')->default(false);
            $table->boolean('audit_logs')->default(false);
            $table->string('menu_color')->default('collapsible-body active gradient-shadow gradient-45deg-purple-deep-orange');
            $table->boolean('menu_dark')->default(false);
            $table->boolean('menu_collapsed')->default(false);
            $table->string('menu_selection')->nullable();
            $table->string('navbar_color')->default('navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-shadow gradient-45deg-purple-deep-orange');
            $table->boolean('navbar_dark')->default(true);
            $table->boolean('navbar_fixed')->default(true);
            $table->boolean('footer_dark')->default(false);
            $table->boolean('footer_fixed')->default(false);            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
