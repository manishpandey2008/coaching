<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration', function (Blueprint $table) {
            $table->id();
            $table->string('user_name',10)->unique();
            $table->string('first_name',50);
            $table->string('pass_code',10)->unique();
            $table->string('password',10);
            $table->string('phone_number',14);
            $table->string('email_id',50);
            $table->string('aadhar_number',13)->nullable();
            $table->string('gender',10);
            $table->string('class_id',50);
            $table->string('address');
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('registration');
    }
}
