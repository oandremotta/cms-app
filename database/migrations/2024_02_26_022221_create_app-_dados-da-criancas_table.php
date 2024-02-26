<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_dados_da_crianca', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('ra');
            $table->string('escola');
            $table->string('professor');
            $table->string('ano_serie');
            $table->string('periodo');
            $table->string('turma');
            $table->integer('ordem');
            $table->foreignId('idTenant')->constrained('tenants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app-_dados-da-criancas');
    }
};
