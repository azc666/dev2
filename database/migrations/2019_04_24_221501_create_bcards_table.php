<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBcardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bcards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('title');
            $table->string('description');
            $table->string('property_website');
            $table->string('direct');
            $table->string('office');
            $table->string('cell');
            $table->string('fax');
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
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
        Schema::dropIfExists('bcards');
    }
}