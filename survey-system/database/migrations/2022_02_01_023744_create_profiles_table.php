<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');            
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('DOB');
            $table->string('address');
            $table->string('password');
            $table->boolean('isVerified')->default(0);
            $table->boolean('isAdmin')->default(0);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
