<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('models', function(Blueprint $table) {
			$table->foreign('brand_id')->references('id')->on('brands')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('models', function(Blueprint $table) {
			$table->dropForeign('models_brand_id_foreign');
		});
	}
}