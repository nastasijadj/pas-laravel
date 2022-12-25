<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pas', function (Blueprint $table) {
            $table->id();
            $table->string('sifra');
            $table->string('rasa');
            $table->integer('godine');
            $table->foreignId('stanovnik_id')->constrained('stanovniks');
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
        Schema::dropIfExists('pas');
    }
}
