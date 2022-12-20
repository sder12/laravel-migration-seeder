<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('company', 50);
            $table->string('departure_station', 80);
            $table->string('arrival_station', 80);


            // 1. uniti------> dateTime
            $table->dateTime('departure_day');
            $table->dateTime('arrival_day');

            //2. divisi -----> date + time || hour
            // $table->date('departure_day');
            // $table->time('departure_time');
            // $table->date('arrival_day');
            // $table->time('arrival_time');

            $table->string('code_train', 7); //not smallInteger perchè occupa + memoria e non devo fare operazioni matematiche
            $table->tinyInteger('wagon_number')->unsigned()->nullable();

            // $table->tinyInteger('is_on_time')->default(1);
            // $table->tinyInteger('got_canceled')->default(0);
            $table->boolean('is_on_time')->default(true);
            $table->boolean('got_canceled')->default(false);

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
        Schema::dropIfExists('trains');
    }
};


    //ID

    // Azienda -> stringa-> varchar 80-100
    // Stazione di partenza ->  stringa-> varchar 100
    // Stazione di arrivo -> stringa-> varchar 100

    // Orario di partenza -> time -> data + ora -> timestamp
    // Orario di arrivo -> time -> data + ora -> timestamp

    // Codice Treno -> tinyint unsigned
    // Numero Carrozze -> number -> tinyint unsigned nullable 
    // In orario -> boolean -> tinyint unsigned notnull -> default(1)
    // Cancellato -> boolean -> tinyint unsigned -> defauly (0)

    //TIMESTAMPS