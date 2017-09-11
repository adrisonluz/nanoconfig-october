<?php namespace AdrisonLuz\NanoConfig\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAdrisonluzNanoconfigNanoativos extends Migration
{
    public function up()
    {
        Schema::create('adrisonluz_nanoconfig_nanoativos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('nano');
            $table->string('token');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('adrisonluz_nanoconfig_nanoativos');
    }
}
