<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('entries',function($table)
                       {
                           $table->increments('id');
                           $table->string('title');    
                           $table->string('city');
                           $moods = array('Excited','Aprehensive','Plain happy','Angry','Sad','Reflexive');
                           $table->enum('mood', $moods);
                           $table->string('weather');
                           $table->text('notes');   
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
		Schema::drop('entries');
	}

}
