<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tbFilme', function (Blueprint $table) {
            $table->increments('idFilme');
            $table->string('filme', 100);
            $table->string('duracao', 10);
            $table->string('diretor', 100);
            $table->string('img', 100);
            $table->string('sinopse', 500);
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbFilme');
    }
};
