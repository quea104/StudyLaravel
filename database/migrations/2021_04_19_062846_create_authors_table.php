<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     * : Create authors Table
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function(Blueprint $table) {
            $table->increments('id');
            $table->string('email', 255);
            $table->string('password', 60);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * : Drop authors Table
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
