<?php namespace AdrisonLuz\NanoConfig\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdrisonluzNanoconfigGrupos extends Migration
{
    public function up()
    {
        Schema::create('adrisonluz_nanoconfig_grupos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('id_october')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('adrisonluz_nanoconfig_grupos');
    }
}
