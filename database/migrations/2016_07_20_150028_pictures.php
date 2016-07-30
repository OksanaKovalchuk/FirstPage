<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

<<<<<<< HEAD
class Pictures extends Migration
=======
class Picture extends Migration
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictures', function (Blueprint $table) {
<<<<<<< HEAD
            $table->increments('id');
            $table->text('reference');
            $table->string('name');
            $table->text('napping_story');
//            $table->increments('painter_id');
            $table->timestamps();
        });

=======
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
>>>>>>> 038177dd1036d09609ad31b2b35133ed6711cea3
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
