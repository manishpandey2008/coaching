<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classdetails', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_pass_code',20);
            $table->string('class_id',20)->unique();
            $table->string('class_name',40);
            $table->string('subject_name',20);
            $table->string('class_time');
            $table->string('class_location',20);
            $table->string('class_working_time',10);
            $table->string('class_working_days',100)->nullable();
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
        Schema::dropIfExists('classdetails');
    }
}
