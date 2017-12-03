<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();

            $table->integer('publishing_houses_id')->unsigned();

            $table->string('name_of_publication')->nullable();
            $table->string('annotation')->nullable();
            $table->integer('number_of_publication')->unsigned()->nullable();
            $table->integer('year')->unsigned()->nullable();
            $table->integer('number_of_pages')->unsigned()->nullable();
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
        Schema::dropIfExists('publications');
    }
}
