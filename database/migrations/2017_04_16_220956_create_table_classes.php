<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableClasses extends Migration
{
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->text('slogan')->nullable();
            $table->text('advantages')->nullable();
            $table->text('disadvantages')->nullable();
            $table->string('image')->nullable();
            $table->string('secondary_image')->nullable();
            $table->integer('initial_inteligence')->nullable();
            $table->integer('initial_charisma')->nullable();
            $table->integer('initial_audacity')->nullable();
            $table->integer('initial_luck')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
