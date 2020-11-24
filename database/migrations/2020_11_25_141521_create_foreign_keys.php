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
        Schema::table('repaired_cars', function(Blueprint $table) {
            $table->foreign('model_id')->references('id')->on('models')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('repaired_cars', function(Blueprint $table) {
            $table->foreign('service_id')->references('id')->on('services')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
	}

	public function down()
	{
		Schema::table('models', function(Blueprint $table) {
			$table->dropForeign('models_brand_id_foreign');
		});
        Schema::table('repaired_cars', function(Blueprint $table) {
            $table->dropForeign('repaired_cars_model_id_foreign');
        });
        Schema::table('repaired_cars', function(Blueprint $table) {
            $table->dropForeign('repaired_cars_service_id_foreign');
        });
	}
}
