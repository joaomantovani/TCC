<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAvataridToStoreTable extends Migration
{
    public function up()
    {
        Schema::table('stores', function (Blueprint $table) {
            $table->integer('avatar_id')->unsigned()->nullable()->after('slug');
            $table->foreign('avatar_id')->references('id')->on('avatars');
        });
    }
}
