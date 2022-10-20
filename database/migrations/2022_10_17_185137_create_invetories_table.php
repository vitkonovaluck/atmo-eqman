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
        Schema::create('invetories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type')->references('id')->on('invetory_types');
            $table->string('title');
            $table->string('brand');
            $table->string('model');
            $table->string('serial');
            $table->integer('accounting_type')->references('id')->on('acounting_types');
            $table->integer('location');

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
        Schema::dropIfExists('invetories');
    }
};
