<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateModelsTable extends Migration {

	public function up()
	{
		Schema::create('models', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name')->unique();
			$table->integer('brand_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('models');
	}
}
