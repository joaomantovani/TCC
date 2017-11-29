<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateStatsTable extends Migration
{
    public function up()
    {
        Schema::table('stats', function (Blueprint $table) {
            $table->boolean('inteligence')->nullable()->change();
            $table->boolean('charisma')->nullable()->change();
            $table->boolean('audacity')->nullable()->change();
            $table->boolean('luck')->nullable()->change();
        });
    }
}
