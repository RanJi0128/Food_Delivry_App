<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');                
            $table->string('site_name');
            $table->string('currency_symbol');
            $table->string('site_email');
            $table->string('site_logo');
            $table->string('site_favicon');
            $table->string('site_description');
            $table->text('site_header_code');
            $table->text('site_footer_code');
            $table->string('site_copyright');
            $table->text('addthis_share_code');
            $table->text('disqus_comment_code');
            $table->text('facebook_comment_code');             
            $table->string('home_slide_image1');
            $table->string('home_slide_image2');
            $table->string('home_slide_image3');
            $table->string('page_bg_image');
            $table->integer('total_restaurant'); 
            $table->integer('total_people_served');
            $table->integer('total_registered_users');
             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('settings');
    }
}
