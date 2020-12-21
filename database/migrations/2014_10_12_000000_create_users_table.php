<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_role')->default('3')->unsigned();
            $table->integer('id_permission')->nullable()->unsigned();
            $table->string('full_name');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email')->nullable()->unique();
            $table->string('address')->nullable();
            $table->integer('phone')->nullable();       
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
        Schema::dropIfExists('users');
    }
}
