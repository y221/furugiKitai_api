<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->integer('prefecture_id');
            $table->string('city', 50);
            $table->string('address', 50);
            $table->string('building', 50);
            $table->string('access', 50);
            $table->string('phone_number', 20);
            $table->string('instagram_url', 250);
            $table->string('holiday', 200);
            $table->string('business_hour', 200);
            $table->string('image_url', 100);
            $table->date('created_at');
            $table->integer('created_user_id');
            $table->date('updated_at')->nullable();
            $table->integer('updated_user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
