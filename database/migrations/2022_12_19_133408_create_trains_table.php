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

            $table->string('company', 100);
            $table->string('departure_station', 100);
            $table->string('arrival_station', 100);

            $table->timestamp('departure_time');
            $table->timestamp('arrival_time');

            $table->tinyInteger('code_train')->unsigned();
            $table->tinyInteger('carriage')->unsigned()->nullable();
            $table->tinyInteger('is_on_time')->default(1);
            $table->tinyInteger('got_canceled')->default(0);

            $table->timestamps();
        });
    }

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