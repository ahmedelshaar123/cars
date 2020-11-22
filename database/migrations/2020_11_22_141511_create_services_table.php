<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicesTable extends Migration {

	public function up()
	{
		Schema::create('services', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name_ar')->unique();
			$table->string('name_en')->unique();
			$table->text('desc_ar');
			$table->text('desc_en');
			$table->text('features_ar');
			$table->text('features_en');
		});
	}

	public function down()
	{
		Schema::drop('services');
	}
}