<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('modulos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('rota')->nullable();
            $table->integer('idPai')->nullable();
            $table->timestamps();
        });

        DB::table('modulos')->insert([
            [
                'nome' => 'Portal do Aluno',
                'rota' => null,
                'idPai' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Portal da Comunidade',
                'rota' => null,
                'idPai' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Cadastrar Seção',
                'rota' => "modulo/1/cadastrar",
                'idPai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Gerenciar Seção',
                'rota' => "modulo/1/gerenciar",
                'idPai' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Cadastrar Seção',
                'rota' => "modulo/2/cadastrar",
                'idPai' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Gerenciar Seção',
                'rota' => "modulo/2/gerenciar",
                'idPai' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modulos');
    }
};
