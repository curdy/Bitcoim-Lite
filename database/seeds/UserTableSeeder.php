<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user -> first_name = 'Rhulani';
        $user -> last_name = 'Ndhlovu';
        $user -> email = 'rhu@siliconburg.com';
        $user -> password = bcrypt('19950590Curdy');
        $user -> user_type = 'admin';
        $user -> save();

        $user = new User();
        $user -> first_name = 'Curdy';
        $user -> last_name = 'Lizgang';
        $user -> email = 'rhulanikreatives@gmail.com';
        $user -> password = bcrypt('19950590Curdy');
        $user -> user_type = 'client';
        $user -> save();
    }
}
