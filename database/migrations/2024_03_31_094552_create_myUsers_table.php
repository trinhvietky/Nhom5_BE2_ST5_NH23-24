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
<<<<<<<< HEAD:database/migrations/2024_03_31_094552_create_myUsers_table.php
        Schema::create('myUsers', function (Blueprint $table) {
========
        Schema::create('my_users', function (Blueprint $table) {
>>>>>>>> 2dddd8ee624bf5e603facd8c3862cf602a2496e0:database/migrations/2024_03_31_094552_create_my_users_table.php
            $table->increments('User_id');
            $table->string('Username');
            $table->string('Password');
            $table->string('Admin');
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
<<<<<<<< HEAD:database/migrations/2024_03_31_094552_create_myUsers_table.php
        Schema::dropIfExists('myUsers');
========
        Schema::dropIfExists('my_users');
>>>>>>>> 2dddd8ee624bf5e603facd8c3862cf602a2496e0:database/migrations/2024_03_31_094552_create_my_users_table.php
    }
};
