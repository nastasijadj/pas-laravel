<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DodajSpoljniKljuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stanovniks', function (Blueprint $table) {
            $table->after('broj_ljubimaca', function ($table) {
                $table->foreignId('opstina_id')->constrained('opstinas');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stanovniks', function (Blueprint $table) {
            //
        });
    }
}
