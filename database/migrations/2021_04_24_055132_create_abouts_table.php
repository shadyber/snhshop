<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('detail');
            $table->longText('mission')->nullable();
            $table->longText('vision')->nullable();
            $table->longText('goal')->nullable();
            $table->longText('values')->nullable();
            $table->longText('history')->nullable();
            $table->longText('photo')->nullable();
            $table->longText('logo')->default('/images/logo.png');
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
        Schema::dropIfExists('abouts');
    }
}
