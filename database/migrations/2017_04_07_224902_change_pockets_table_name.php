<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangePocketsTableName extends Migration
{
    public function up()
    {
        Schema::rename('pockets', 'wallets');
    }
}
