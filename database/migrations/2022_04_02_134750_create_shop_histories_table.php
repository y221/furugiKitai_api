<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('shop_id')->index();
            $table->string('name', 50);
            $table->integer('prefecture_id');
            $table->integer('area_id')->default(0);
            $table->tinyInteger('gender_id')->default(1);
            $table->string('city', 50);
            $table->string('address', 50);
            $table->string('building', 255)->nullable();
            $table->string('access', 255)->nullable();
            $table->double('latitude', 9, 6)->nullable();
            $table->double('longitude', 9, 6)->nullable();
            $table->string('phone_number', 255)->nullable();
            $table->string('instagram_url', 255)->nullable();
            $table->string('holiday', 255)->nullable();
            $table->string('business_hour', 255)->nullable();
            $table->string('image_url', 255)->nullable();
            $table->date('created_at');
            $table->date('updated_at');
            $table->integer('created_user_id');
            $table->integer('updated_user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_histories');
    }
}
