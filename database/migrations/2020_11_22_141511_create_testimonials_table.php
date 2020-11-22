<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTestimonialsTable extends Migration {

	public function up()
	{
		Schema::create('testimonials', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name_ar');
			$table->string('name_en');
			$table->string('job_ar');
			$table->string('job_en');
			$table->text('desc_ar');
			$table->text('desc_en');
		});
	}

	public function down()
	{
		Schema::drop('testimonials');
	}
}