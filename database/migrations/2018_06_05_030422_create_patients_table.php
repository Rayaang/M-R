<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pxLast');
            $table->string('pxFirst');
            $table->string('pxGender');
            $table->date('pxBday');
            $table->string('timeBirth');
            $table->string('pxAddr');
            $table->string('pxContact');
            $table->string('pxFather');
            $table->string('pxMother');
            $table->string('typeDelivery');
            $table->integer('birthWeight');
            $table->integer('birthLength');
            $table->integer('headCircumference');
            $table->string('comBirth')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
