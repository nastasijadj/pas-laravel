<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DodajBrojLjubimaca extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stanovniks', function (Blueprint $table) {
            $table->after('adresa', function ($table) {
                $table->integer('broj_ljubimaca');
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
            $table->dropColumn('broj_ljubimaca');
        });
    }
}
