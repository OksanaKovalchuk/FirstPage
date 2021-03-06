<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PicturesPainters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictures_painters', function (Blueprint $table) {

            $table->integer('picture_id')->unsigned();
            $table->integer('painter_id')->unsigned();
        });


        Schema::table('pictures_painters',function ($table){
            $table->foreign('picture_id')->references('id')->on('pictures')->onDelete('CASCADE');
        });

        Schema::table('pictures_painters',function ($table){
            $table->foreign('painter_id')->references('id')->on('painters')->onDelete('CASCADE');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pictures_painters');
    }
}
