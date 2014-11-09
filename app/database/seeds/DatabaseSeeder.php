<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
        $this->call('AdvertisersTableSeeder');
        $this->call('ManufacturersTableSeeder');
        $this->call('ModelsTableSeeder');
        $this->call('DealsTableSeeder');
        $this->call('InvoicesTableSeeder');
        //$this->call('DerivativesTableSeeder');
	}

}
