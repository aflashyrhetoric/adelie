<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casestudies', function(Blueprint $table){
            $table->increments('id');
            $table->string('client_name');
            $table->string('tagline')->nullable();
            $table->string('thumbnail_url');
            $table->string('hero_url');
            $table->text('about');
            $table->text('phase_one');
            // Optional phases
            $table->text('phase_two')->nullable();
            $table->text('phase_three')->nullable();
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
        Schema::drop('casestudies');
    }
}
