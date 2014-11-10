<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManufacturersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('manufacturers', function(Blueprint $table)
        {
            //
            $table->increments('id');
            $table->string('manufacturername')->unique;
            $table->text('description');
            $table->string('website');
            $table->string('contactno');
            $table->string('recoveryno');
            $table->string('logopath');
            $table->tinyInteger('mainMenuInclude');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
        Schema::table('manufacturers', function(Blueprint $table)
        {
            Schema::drop('manufacturers');
        });
	}

}
