<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWidgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('widgets', function (Blueprint $table) {
            $table->increments('id');                 
            $table->string('footer_widget1_title');
            $table->text('footer_widget1_desc');   
            $table->string('footer_widget2_title');
            $table->text('footer_widget2_desc');   
            $table->string('footer_widget3_title');
            $table->text('footer_widget3_address'); 
            $table->string('footer_widget3_phone');
            $table->string('footer_widget3_email');            
            $table->string('about_title');
            $table->text('about_desc');                  
            $table->string('social_facebook');
            $table->string('social_twitter');
            $table->string('social_google');
            $table->string('social_instagram');
            $table->string('social_pinterest');
            $table->string('social_vimeo');
            $table->string('social_youtube');
            $table->string('need_help_title');
            $table->string('need_help_phone');             
            $table->text('need_help_time');
            $table->text('sidebar_advertise');              
             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('widgets');
    }
}
