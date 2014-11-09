<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        //
        Schema::create('invoices', function(Blueprint $table)
        {
            //
            $table->bigIncrements('invoiceid');
            $table->bigInteger('advertiserid');
            $table->bigInteger('total');
            $table->enum('status', array('paid', 'unpaid', 'overdue', 'default'));
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
        Schema::table('invoices', function(Blueprint $table)
        {
            Schema::drop('invoices');
        });
	}

}
