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
            $table->bigIncrements('dealid');
            $table->bigInteger('advertiserid');
            $table->integer('manufacturerid');
            $table->bigInteger('modelid');
            $table->string('manufacturername');
            $table->string('modelname');
            $table->string('derivativename');
            $table->string('profile');
            $table->bigInteger('initialrental');
            $table->tinyInteger('contractLength');
            $table->bigInteger('mileage');
            $table->tinyInteger('maintenance');
            $table->tinyInteger('personal');
            $table->tinyInteger('leadtime');
            $table->bigInteger('dealprice');
            $table->string('dealurl');
            $table->string('dealDescription');
            $table->bigInteger('views');
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
