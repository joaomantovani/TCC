<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsTable extends Migration
{
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('energy_required')->nullable();
            $table->float('reward')->nullable();
            $table->integer('difficult_id')->nullable();
            $table->integer('exp')->nullable();
            $table->string('achievement_slug')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('actions');
    }
}
