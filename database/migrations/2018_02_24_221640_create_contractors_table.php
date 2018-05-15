<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContractorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contractors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('phone')->nullable();
			$table->string('email')->nullable();
			$table->integer('user_id')->unsigned()->nullable()->index('contractors_user_id_foreign');
			$table->integer('location_id')->unsigned()->nullable()->index('contractors_location_id_foreign');
			$table->integer('category_id')->unsigned()->nullable()->index('contractors_category_id_foreign');
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
		Schema::drop('contractors');
	}

}
