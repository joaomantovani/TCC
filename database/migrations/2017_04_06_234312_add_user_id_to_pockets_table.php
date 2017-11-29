<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToPocketsTable extends Migration
{
    public function up()
    {
        Schema::table('pockets', function($table) {
            $table->integer('user_id')->unsigned()->after('money');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::drop('pockets');
    }
}
