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
    public function up(): void
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('codigo');
            $table->string('logoUrl')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table('tenants')->insert([
            [
                'id' => 1,
                'nome' => 'Multfacil Comercial',
                'codigo' => 'multafacil',
                'logoUrl' => 'https://cataas.com/cat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'nome' => 'Franco da Rocha',
                'codigo' => 'franco',
                'logoUrl' => 'https://cataas.com/cat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'nome' => 'Mairipora',
                'codigo' => 'mairipora',
                'logoUrl' => 'https://cataas.com/cat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'nome' => 'Nilópolis',
                'codigo' => 'nilopolis',
                'logoUrl' => 'https://cataas.com/cat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'nome' => 'Ita',
                'codigo' => 'ita',
                'logoUrl' => 'https://cataas.com/cat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'nome' => 'Ilhabela',
                'codigo' => 'ilhabela',
                'logoUrl' => 'https://cataas.com/cat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'nome' => 'Guaratingueta',
                'codigo' => 'guaratingueta',
                'logoUrl' => 'https://cataas.com/cat',
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
        Schema::dropIfExists('tenants');
    }
};
