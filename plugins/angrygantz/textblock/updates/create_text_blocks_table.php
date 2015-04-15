<?php namespace Angrygantz\Textblock\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateTextBlocksTable extends Migration
{

    public function up()
    {
        Schema::create('angrygantz_textblock_text_blocks', function($table)
        {
            Schema::dropIfExists('angrygantz_textblock_text_blocks');
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('ico');
            $table->text('text');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('angrygantz_textblock_text_blocks');
    }

}
