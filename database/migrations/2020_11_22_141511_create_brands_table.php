<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBrandsTable extends Migration {

	public function up()
	{
		Schema::create('brands', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name_ar')->unique();
			$table->string('name_en')->unique();
		});
	}

	public function down()
	{
		Schema::drop('brands');
	}
}