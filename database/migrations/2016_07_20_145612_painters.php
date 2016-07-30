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
<<<<<<< HEAD
            $table->increments('id');
=======
            $table->increments('painter_id');
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });
<<<<<<< HEAD

=======
        Schema::table('pictures_painters',function ($table){
            $table->foreign('painter_id')->integer('painter_id')->on('painters');
        });
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
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
