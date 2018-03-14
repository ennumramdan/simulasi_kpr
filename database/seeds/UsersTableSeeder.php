<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'address' => 'address',
            'income' => '999999',
            'job' => 'admin',
            'npwp' => '/images/default.png',
            'home_price' => 'rahasia',
            'password' => bcrypt('rahasia'),
        ]);
    }
}
