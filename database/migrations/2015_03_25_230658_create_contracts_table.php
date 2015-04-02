<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contracts', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');

			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('id')->on('categories');

			$table->integer('subcategory_id')->unsigned();
			$table->foreign('subcategory_id')->references('id')->on('subcategories');

			$table->bigInteger('company_id')->unsigned();
			$table->foreign('company_id')->references('id')->on('companies');

			$table->string('membership_identification');
			$table->string('membership_identification_extra')->nullable();

			$table->integer('duration');
			$table->date('inception_of_treaty');
			$table->integer('cancelation_period');

			$table->text('notice')->nullable();

			$table->boolean('canceled')->default(false);

			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contracts');
	}

}
