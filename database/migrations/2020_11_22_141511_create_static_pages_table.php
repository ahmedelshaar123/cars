<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStaticPagesTable extends Migration {

	public function up()
	{
		Schema::create('static_pages', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name_ar')->unique();
			$table->string('name_en')->unique();
			$table->text('value_ar')->nullable();
			$table->text('value_en')->nullable();
			$table->string('key')->unique();
			$table->string('type');
		});
	}

	public function down()
	{
		Schema::drop('static_pages');
	}
}