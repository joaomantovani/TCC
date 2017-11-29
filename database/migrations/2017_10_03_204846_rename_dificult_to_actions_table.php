<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameDificultToActionsTable extends Migration
{
    public function up()
    {
        Schema::table('actions', function (Blueprint $table) {
             $table->renameColumn('difficult_id', 'difficult');
        });
    }
}
