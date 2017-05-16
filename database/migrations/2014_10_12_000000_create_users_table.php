<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('sex')->default(0);
            $table->string('vorname');
            $table->string('nachname');
            $table->string('password');
            $table->string('straße')->default('-');
            $table->string('hausnr')->default('-');
            $table->string('plz')->default('-');
            $table->string('ort')->default('-');
            $table->string('land')->default('-');
            $table->date('geburtsdatum')->default('1990-01-01');
            $table->string('persoid')->default('-');
            $table->string('email')->unique();
            $table->binary('patent');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('booking', function (Blueprint $table) {
            $table->increments('buchungsid');
            $table->integer('kundennr')->unsigned();
            $table->tinyInteger('bootstyp');
            $table->date('buchungsbeginn');
            $table->date('buchungsende');
            $table->time('szeit');
            $table->time('ezeit');
            $table->decimal('betrag', 6, 2);
            $table->foreign('kundennr')->references('id')->on('users');
        });

        Schema::create('event', function (Blueprint $table){
            $table->increments('eventid');
            $table->string('datum');
            $table->string('titel', 50);
        });

        Schema::create('zahlungsmethode', function (Blueprint $table){
            $table->increments('id');
            $table->string('typ');
            $table->string('inhaber', 50);
            $table->string('nummer', 16);
            $table->date('gueltigkeit');
            $table->string('pruefziffer', 4);
            $table->string('iban', 30);
            $table->string('bic', 11);
            $table->foreign('id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('booking');
        Schema::drop('users');
        Schema::drop('event');
    }
}
