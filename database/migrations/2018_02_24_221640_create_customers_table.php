<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('phone')->nullable();
			$table->string('email')->nullable();
			$table->integer('user_id')->unsigned()->nullable()->index('customers_user_id_foreign');
			$table->integer('location_id')->unsigned()->nullable()->index('customers_location_id_foreign');
			$table->timestamps();
			$table->text('description', 65535);
			$table->integer('is_active');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customers');
	}

}
