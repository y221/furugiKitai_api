<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->string('building')->nullable()->change();
            $table->string('access')->nullable()->change();
            $table->string('phone_number')->nullable()->change();
            $table->string('instagram_url')->nullable()->change();
            $table->string('holiday')->nullable()->change();
            $table->string('business_hour')->nullable()->change();
            $table->string('image_url')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->string('building')->nullable(false)->change();
            $table->string('access')->nullable(false)->change();
            $table->string('phone_number')->nullable(false)->change();
            $table->string('instagram_url')->nullable(false)->change();
            $table->string('holiday')->nullable(false)->change();
            $table->string('business_hour')->nullable(false)->change();
            $table->string('image_url')->nullable(false)->change();
        });
    }
}
