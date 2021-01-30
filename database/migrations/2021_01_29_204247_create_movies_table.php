<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('movies'))
        {
            Schema::create('movies', function (Blueprint $table) {
                $table->increments('id')->unsigned();
                $table->string('name');
                $table->char('year', 4);
                $table->string('sinopse');
                $table->string('duration');
                $table->string('directors');
                $table->string('writers');
                $table->longText('stars');
                $table->double('rating');
                $table->longText('image');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
