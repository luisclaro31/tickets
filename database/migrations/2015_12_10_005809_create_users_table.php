<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('full_name');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->enum('module',[1,2,3,4,5,6,7,8,8,9,10]);
			$table->integer('type_id')->unsigned();
			$table->rememberToken();
			$table->timestamps();
			$table->foreign('type_id')
					->references('id')
					->on('types')
					->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
