<?php namespace AdrisonLuz\NanoConfig\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdrisonluzNanoconfigUsuarios extends Migration
{
    public function up()
    {
        Schema::create('adrisonluz_nanoconfig_usuarios', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('id_october')->unsigned();
            $table->string('rg')->nullable();
            $table->string('cpf');
            $table->date('nascimento');
            $table->string('telefone')->nullable();
            $table->string('celular')->nullable();
            $table->string('endereco')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('uf')->nullable();
            $table->string('cep')->nullable();
            $table->text('observacoes')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('adrisonluz_nanoconfig_usuarios');
    }
}
