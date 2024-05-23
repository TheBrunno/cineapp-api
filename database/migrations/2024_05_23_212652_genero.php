<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tbGenero', function (Blueprint $table) {
            $table->increments('idGenero');
            $table->string('genero', 100);
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbGenero');
    }
};
