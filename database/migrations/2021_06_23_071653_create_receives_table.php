<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receives', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id')->unsigned();
            $table->string('actual_recieved_from');
            $table->string('type');
            $table->string('shade');
            $table->integer('recieved_stock');
            $table->integer('actual_stock');
            $table->integer('no_of_boxes');
            $table->integer('short_stock');
            $table->integer('return_stock');
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
        Schema::dropIfExists('receives');
    }
}
