<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plaints', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('idno');
            $table->integer('telno');
            $table->string('acc_name');
            $table->string('acc_residence');
            $table->string('casedescription');
            $table->string('filename');
            $table->string('date');
            $table->string('casetype');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('plaints');
    }
}
