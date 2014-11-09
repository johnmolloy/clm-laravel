<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('models', function(Blueprint $table)
        {
            //
            $table->increments('modelid');
            $table->tinyInteger('manufacturerid');
            $table->string('modelname')->unique;
            $table->text('description');
            $table->string('website');
            $table->string('picturepath');
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
        Schema::table('models', function(Blueprint $table)
        {
            Schema::drop('models');
        });
	}

}
