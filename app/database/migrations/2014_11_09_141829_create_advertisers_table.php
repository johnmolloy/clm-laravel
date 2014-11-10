<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('advertisers', function(Blueprint $table)
		{
			//
            $table->bigIncrements('id');
            $table->string('advertisername')->unique;
            $table->string('secret');
            $table->text('description');
            $table->string('website');
            $table->string('contactno');
            $table->enum('advertisertype', array('broker', 'dealer'));
            $table->enum('accounttype', array('free', 'trial', 'paid'));
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
		Schema::table('advertisers', function(Blueprint $table)
		{
			Schema::drop('advertisers');
		});
	}

}
