<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorkOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('work_orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('user_id')->unsigned()->nullable()->index('work_orders_user_id_foreign');
			$table->integer('category_id')->unsigned()->nullable()->index('work_orders_category_id_foreign');
			$table->integer('location_id')->unsigned()->nullable()->index('work_orders_location_id_foreign');
			$table->integer('request_id')->unsigned()->nullable()->unique();
			$table->integer('status_id')->unsigned()->index('work_orders_status_id_foreign');
			$table->integer('priority_id')->unsigned()->index('work_orders_priority_id_foreign');
			$table->dateTime('started_at')->nullable();
			$table->dateTime('completed_at')->nullable();
			$table->string('subject');
			$table->text('description', 65535)->nullable();
			$table->integer('customer_id')->unsigned()->nullable()->index('work_orders_customer_id_foreign');
			$table->integer('contractor_id')->unsigned()->nullable()->index('work_orders_contractor_id_foreign');
			$table->dateTime('scheduled')->nullable();
			$table->dateTime('scheduled_quote')->nullable();
			$table->dateTime('quote_prepared')->nullable();
			$table->decimal('contractor_quote')->nullable();
			$table->decimal('customer_quote')->nullable();
			$table->decimal('commission_deductions')->nullable();
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
		Schema::drop('work_orders');
	}

}
