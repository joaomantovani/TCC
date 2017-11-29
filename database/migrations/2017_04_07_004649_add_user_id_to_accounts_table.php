<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserIdToAccountsTable extends Migration
{
    public function up()
    {
        Schema::table('accounts', function($table) {
            //Foregn key
            $table->integer('user_id')->unsigned()->after('money');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }
}
