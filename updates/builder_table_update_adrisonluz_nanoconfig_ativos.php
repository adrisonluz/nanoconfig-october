<?php namespace AdrisonLuz\NanoConfig\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAdrisonluzNanoconfigAtivos extends Migration
{
    public function up()
    {
        Schema::rename('adrisonluz_nanoconfig_nanoativos', 'adrisonluz_nanoconfig_ativos');
    }
    
    public function down()
    {
        Schema::rename('adrisonluz_nanoconfig_ativos', 'adrisonluz_nanoconfig_nanoativos');
    }
}
