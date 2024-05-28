<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tbUsuarios', function (Blueprint $table) {
            $table->increments('idUsuario');
            $table->string('nome', 100);
            $table->string('img', 100);
            $table->string('email', 100);
            $table->string('senha', 100);
            $table->string('cpf', 14);
            $table->string('cartao', 100);
            $table->string('bandeira', 100);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tbUsuarios');
    }
};
