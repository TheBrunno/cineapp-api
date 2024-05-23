<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tbTag', function (Blueprint $table) {
            $table->increments('idTag');
            $table->string('tag', 100);
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbTag');
    }
};
