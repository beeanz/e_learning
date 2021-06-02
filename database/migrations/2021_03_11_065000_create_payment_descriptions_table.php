<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_descriptions', function (Blueprint $table) {
            $table->id();
            $table->string('payment_method');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('course_id');
            $table->string('amount');
            $table->tinyInteger('auto_payment')
                ->default(0);
            $table->string('payed_at')->nullable();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreign('course_id')
                ->references('id')
                ->on('courses');

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
        Schema::dropIfExists('payment_descriptions');
    }
}
