<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('category');
            $table->string('name');
            $table->string('phone');
            $table->string('address');
            $table->string('nid');
            $table->string('email');
            $table->string('password');
            $table->rememberToken();
        });
    }


    public function down()
    {
        Schema::dropIfExists('users');
    }
}
