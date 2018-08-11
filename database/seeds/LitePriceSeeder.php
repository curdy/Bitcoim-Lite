<?php

use Illuminate\Database\Seeder;
use App\BitcoinLite;

class LitePriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bitcoinlite = new BitcoinLite();
        $bitcoinlite -> name = 'Bitcoin';
        $bitcoinlite -> rate_btc  = 0.01500000;
        $bitcoinlite -> buy_rate_btc  = 5;
        $bitcoinlite -> sell_rate_btc  = 3;
        $bitcoinlite -> save();
    }
}
