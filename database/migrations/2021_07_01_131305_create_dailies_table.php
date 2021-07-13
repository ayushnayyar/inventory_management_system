<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dailies', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id')->unsigned();
            $table->string('party_name');
            $table->integer('beam_machine');
            $table->integer('beam_floor');
            $table->integer('weft');
            $table->integer('fabric_stock');
            $table->integer('cone_stock');
            $table->integer('opening_stock');
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
        Schema::dropIfExists('dailies');
    }
}
