<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){
        
        Schema::create('events',function($table)
                       {
                           $table->increments('id');
                           $table->string('title');    
                           $table->string('city');
                           $table->string('mood');
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
		Schema::drop('events');
	}

}
