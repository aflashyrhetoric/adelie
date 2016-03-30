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
            $table->string('client-name');
            $table->text('about');
            $table->text('phase-one');
            // Optional phases
            $table->text('phase-two')->nullable();
            $table->text('phase-three')->nullable();
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
