<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePocketsTable extends Migration
{
    public function up()
    {
        Schema::create('pockets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('type')->nullable();
            $table->float('money');
            $table->timestamps();
        });
    }
}
