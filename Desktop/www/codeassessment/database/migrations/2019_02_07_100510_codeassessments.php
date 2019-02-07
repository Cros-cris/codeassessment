<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Codeassessments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('codeassessments', function (Blueprint $table) {
          $table->increments('id')->length(500);
          $table->string('Naam')->lengt(500);
          $table->string('email')->unique()->length(500);
          $table->float('afstand')->length(500);
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
        Schema::dropIfExists('codeassessments');
    }
  }
