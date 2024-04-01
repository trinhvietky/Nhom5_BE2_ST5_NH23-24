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
        Schema::create('_tour', function (Blueprint $table) {
            $table->increments('Tour_id');
            $table->string('Tour_name');
            $table->date('Start_day');
            $table->date('End_day');
            $table->decimal('Price', 10, 2);
            $table->string('Vehicle');
            $table->integer('Place_id')->unsigned();
            $table->integer('Guide_id')->unsigned();
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
        Schema::dropIfExists('_tour');
    }
};
