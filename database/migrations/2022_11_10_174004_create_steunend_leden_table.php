<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSteunendLedenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steunend_leden', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('firstname')->nullable();
            $table->text('lastname')->nullable();
            $table->text('emailadres')->nullable();
            $table->text('phonenumber')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('steunend_leden');
    }
}
