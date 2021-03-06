<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('TypeTableSeeder');
		$this->call('CategoryTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('StudentTableSeeder');
		$this->call('CallTableSeeder');

	}

}
