<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pictures extends Migration

{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictures', function (Blueprint $table) {
            $table->increments('picture_id');
            $table->text('reference');
            $table->string('name');
            $table->text('napping_story');
            $table->increments('painter_id');
            $table->timestamps();
        });
        Schema::table('pictures_painters',function ($table){
            $table->foreign('picture_id')->integer('picture_id')->on('pictures');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pictures');
    }
}
