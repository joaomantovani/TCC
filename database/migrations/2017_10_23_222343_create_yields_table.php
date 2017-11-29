<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYieldsTable extends Migration
{

    public function up()
    {
        Schema::create('yields', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('account_id')->unsigned();
            $table->foreign('account_id')
                  ->references('id')->on('accounts')
                  ->onDelete('cascade');
            $table->float('old_money')->nullable();
            $table->float('new_money')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('yields');
    }
}
