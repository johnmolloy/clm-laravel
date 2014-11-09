<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDerivativesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('derivatives', function(Blueprint $table)
        {
            //
            $table->bigIncrements('derivativerid');
            $table->string('derivativename')->unique;
            $table->integer('manufacturerid');
            $table->bigInteger('modelid');
            $table->string('manufacturername');
            $table->string('modelname');
            $table->text('description');
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
        Schema::table('derivatives', function(Blueprint $table)
        {
            Schema::drop('derivatives');
        });
	}

}
