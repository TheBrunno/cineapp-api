<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tbFilmeTag', function (Blueprint $table) {
            $table->increments('idFilmeTag');
            $table->unsignedInteger('idTag');
            $table->foreign('idTag')->references('idTag')->on('tbTag');
            $table->unsignedInteger('idFilme');
            $table->foreign('idFilme')->references('idFilme')->on('tbFilme');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbFilmeTag');
    }
};
