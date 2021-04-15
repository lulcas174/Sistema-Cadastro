<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCadastroEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro_empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomeEmpresa');
            $table->string('cnpj',11);
            $table->string('telefone',11);
            $table->string('nomeResponsavel');
            $table->string('email');
          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cadastro_empresas');
    }
}
