<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSomeColumnsForStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dateTime('birthday')->nullable();
            $table->string('gender')->nullable();
            $table->boolean('is_student')->default(false);;
            $table->unsignedBigInteger('school_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dateTime('birthday');
            $table->string('gender');
            $table->boolean('is_student')->default(false);;
            $table->unsignedBigInteger('school_id');
        });
    }
}
