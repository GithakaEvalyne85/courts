<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDefedantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('defedants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('idno');
            $table->integer('number');
            $table->string('casedscription');
            $table->string('filename');
            $table->string('date');
            $table->string('casetype');
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
        Schema::dropIfExists('defedants');
    }
}
