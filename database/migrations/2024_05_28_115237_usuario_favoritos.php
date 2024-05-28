<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('tbFavoritos', function (Blueprint $table) {
            $table->increments('idFavorito');
            $table->unsignedInteger('idUsuario');
            $table->foreign('idUsuario')->references('idUsuario')->on('tbUsuarios');
            $table->unsignedInteger('idFilme');
            $table->foreign('idFilme')->references('idFilme')->on('tbFilme');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbFavoritos');
    }
};
