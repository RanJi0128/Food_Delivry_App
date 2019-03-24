<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('restaurant_type');                    
            $table->string('restaurant_name');
            $table->string('restaurant_slug');
            $table->longtext('restaurant_description');
            $table->text('restaurant_address');
            $table->text('delivery_charge'); 
            $table->string('restaurant_logo');           
            $table->string('restaurant_bg');
            $table->string('open_monday');
            $table->string('open_tuesday');
            $table->string('open_wednesday');
            $table->string('open_thursday');
            $table->string('open_friday');
            $table->string('open_saturday');
            $table->string('open_sunday');            
            $table->integer('review_avg');             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('restaurants');
    }
}
