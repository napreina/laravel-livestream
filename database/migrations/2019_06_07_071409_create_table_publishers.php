<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePublishers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_publishers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('avartar1')->default('default.png');
            $table->string('avartar2')->default('default.png');
            $table->string('phone');
            $table->string('password');
            $table->integer('rating')->default(0);
            $table->integer('age')->default(0);
            $table->string('country');
            $table->string('gender');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_publishers');
    }
}
