<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('payment_description_id');
            $table->unsignedBigInteger('card_id')->nullable();
            $table->text('invoice_data')->nullable();
            $table->text('pay_data')->nullable();
            $table->tinyInteger('invoice_status')->default(0);
            $table->tinyInteger('payment_status')->default(0);
            $table->timestamps();

            $table->foreign('card_id')
                ->references('id')
                ->on('cards');

            $table->foreign('payment_description_id')
                ->references('id')
                ->on('payment_descriptions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
