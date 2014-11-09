<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('deals', function(Blueprint $table)
        {
            //
            $table->increments('dealid');
            $table->tinyInteger('manufacturerid');
            $table->tinyInteger('modelid');
            $table->string('manufacturername');
            $table->string('modelname');
            $table->string('derivativename');
            $table->string('profile');
            $table->tinyInteger('initialrental');
            $table->tinyInteger('contractLength');
            $table->tinyInteger('mileage');
            $table->tinyInteger('maintenance');
            $table->tinyInteger('personal');
            $table->tinyInteger('leadtime');
            $table->integer('dealprice');
            $table->string('dealurl');
            $table->string('dealDescription');
            $table->integer('views');
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
		//
        Schema::table('deals', function(Blueprint $table)
        {
            Schema::drop('deals');
        });
	}

}
