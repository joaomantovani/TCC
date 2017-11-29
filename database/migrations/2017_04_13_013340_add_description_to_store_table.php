<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDescriptionToStoreTable extends Migration
{
    public function up()
    {
        Schema::table('stores', function (Blueprint $table) {
            $table->text('description')->nullable()->after('name');
        });
    }
}
