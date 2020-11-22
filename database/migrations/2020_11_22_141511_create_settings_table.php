<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {

	public function up()
	{
		Schema::create('settings', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name_ar')->unique();
			$table->string('name_en')->unique();
			$table->string('value_ar');
			$table->string('value_en');
			$table->string('key')->unique();
			$table->string('type');
		});
	}

	public function down()
	{
		Schema::drop('settings');
	}
}