<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tbFilmeGenero', function (Blueprint $table) {
            $table->increments('idFilmeGenero');
            $table->unsignedInteger('idGenero');
            $table->foreign('idGenero')->references('idGenero')->on('tbGenero');
            $table->unsignedInteger('idFilme');
            $table->foreign('idFilme')->references('idFilme')->on('tbFilme');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbFilmeGenero');
    }
};
