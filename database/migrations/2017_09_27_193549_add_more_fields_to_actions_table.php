<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreFieldsToActionsTable extends Migration
{
    public function up()
    {
        Schema::table('actions', function (Blueprint $table) {
            $table->integer('class_id')->nullable()->unsigned()->after('exp');
            $table->foreign('class_id')->references('id')->on('classes');
        });
    }
}
