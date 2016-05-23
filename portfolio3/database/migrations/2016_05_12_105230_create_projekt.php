<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjekt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projekt', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('text');
            $table->string('icon');
            $table->string('imgone');
            $table->string('imgtwo');
            $table->string('imgthree');
            $table->string('imgmain');
            $table->string('dec');
            $table->string('clip');
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
        Schema::drop('projekt');
    }
}
