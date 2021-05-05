<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cpf', 14)->unique();
            $table->string('ctps');
            $table->string('department');
            $table->string('tel')->nullable('true');
            $table->string('tel2')->nullable('true');
            $table->string('tel3')->nullable('true');
            $table->string('tel4')->nullable('true');
            $table->string('tel5')->nullable('true');
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
        Schema::drop('users');
    }
}
