<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAchievementsTable extends Migration
{
    public function up()
    {
        Schema::create('achievements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->string('slug');
            $table->integer('exp');

            //Foreign key
            $table->integer('badge_id')->unsigned();
            $table->foreign('badge_id')->references('id')->on('badges');
                  

            $table->timestamps();
        });
    }
}
