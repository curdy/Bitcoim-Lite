<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBitcoinLitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitcoin_lites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->decimal('rate_btc',8,8);
            $table->float('buy_rate_btc');
            $table->float('sell_rate_btc');
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
        Schema::dropIfExists('bitcoin_lites');
    }
}
