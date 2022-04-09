<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('categorytours_id');
            $table->text('excerpt');
            $table->text('description');
            $table->string('phone');
            $table->string('website');
            $table->string('office_hours');
            $table->text('address');
            $table->string('longitude');
            $table->string('latitude');
            $table->timestamps();

            //relationship category
            $table->foreign('categorytours_id')->references('id')->on('category_tours');

            //relationship user
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('places');
    }
};
