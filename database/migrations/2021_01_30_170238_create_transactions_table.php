<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id')->unsigned();
            $table->integer('party_id')->unsigned();
            $table->integer('item_id')->unsigned();
            $table->integer('mrn_id')->unsigned();
            $table->integer('invoice_no');
            $table->string('party_name');
            $table->string('actual_recieved_from');
            $table->string('item_name');
            $table->string('shade');
            $table->integer('recieved_stock');
            $table->integer('actual_stock');
            $table->integer('return_stock');
            $table->integer('current_stock');
            $table->integer('cone_stock');
            $table->integer('beam_machine');
            $table->integer('beam_floor');
            $table->integer('weft');
            $table->integer('fabric_stock');
            $table->integer('dispatched');
            $table->integer('short_stock');
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
        Schema::dropIfExists('transactions');
    }
}
