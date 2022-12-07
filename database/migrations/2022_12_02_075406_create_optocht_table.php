<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptochtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('optocht', function (Blueprint $table) {
            $table->id();

            $table->text('name');
            $table->text('telephone');
            $table->text('theme');
            $table->text('slogan');
            $table->text('category');
            $table->text('age');

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
        Schema::dropIfExists('optocht');
    }
}
