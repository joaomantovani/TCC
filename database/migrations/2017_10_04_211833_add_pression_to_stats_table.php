<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPressionToStatsTable extends Migration
{
    public function up()
    {
        Schema::table('stats', function (Blueprint $table) {
             $table->integer('pression')->default(0)->after('stamina');
        });
    }
}
