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
        Schema::create('users', function (Blueprint $table) {
            $table->id();           
            $table->String('fullname');
            $table->String('email')->unique();
            $table->String('phone')->nullable();
            $table->String('photo')->default('images/no-photo.png');
            $table->timestamp('email_verified_at')->nullable();
            $table->String('password');


            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles');

            
            $table->rememberToken();
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
};
