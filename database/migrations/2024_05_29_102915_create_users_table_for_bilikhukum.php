<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTableForBilikhukum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void

     */
    public function up() 
    {
        Schema::connection('mysql_second')->create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('whatsapp')->nullable();
            $table->string('password');
            $table->text('address')->nullable();
            $table->string('image')->nullable();
            $table->string('role');
            $table->date('dob')->nullable();
            $table->boolean('verified')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mysql_second')->dropIfExists('users');
    }
}
