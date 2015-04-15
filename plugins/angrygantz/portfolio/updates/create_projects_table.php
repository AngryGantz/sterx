<?php namespace Angrygantz\Portfolio\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateProjectsTable extends Migration
{

    public function up()
    {
        Schema::create('angrygantz_portfolio_projects', function($table)
        {
            Schema::dropIfExists('angrygantz_portfolio_projects');
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('type');
            $table->string('url');
            $table->string('note');
            $table->boolean('showhome');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('angrygantz_portfolio_projects');
    }

}
