<?php

use App\Order;
use App\BitcoinLite;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UserTableSeeder::class);
        $this->call(LitePriceSeeder::class);
        //factory(App\BitcoinLite::class,1)->create();
        //factory(App\Order::class,20)->create();
    }
}
