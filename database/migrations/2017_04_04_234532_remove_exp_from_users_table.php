<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveExpFromUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('exp');
        });

        Schema::table('stats', function (Blueprint $table) {
            $table->integer('exp')->default(0)->after('level');
        });
    }
}
