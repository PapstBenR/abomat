<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies', function(Blueprint $table)
		{
			$table->bigIncrements('id');

			$table->string('short_name')->unique();
			$table->string('long_name');
			$table->string('department')->nullable();

			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('id')->on('categories');

			$table->integer('subcategory_id')->unsigned();
			$table->foreign('subcategory_id')->references('id')->on('subcategories');

			$table->string('street')->nullable();
			$table->integer('postzip')->nullable();
			$table->string('city')->nullable();
			$table->string('country')->nullable();

			$table->string('telephone')->nullable();
			$table->string('mobile')->nullable();
			$table->string('fax')->nullable();
			$table->string('email')->nullable();
			$table->string('url')->nullable();

			$table->longText('description')->nullable();

			$table->string('check_url');

			$table->boolean('status')->default(true);

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
		Schema::drop('companies');
	}

}
