<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Painters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('painters', function (Blueprint $table) {
//            $table->primary('painter_id')->references('picture_id')->on('picture');

            $table->increments('painter_id');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });
//        Schema::table('pictures_painters',function ($table){
//            $table->foreign('painter_id')->integer('painter_id')->on('painters');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('painters');
    }
}
