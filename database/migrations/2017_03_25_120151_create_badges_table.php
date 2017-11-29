<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBadgesTable extends Migration
{
    public function up()
    {
        Schema::create('badges', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('type');
            $table->string('color');
            
            $table->timestamps();
        });
    }
}
