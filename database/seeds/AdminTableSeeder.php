<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => str_random(10),
            'type' => 1,
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        DB::table('admins')->insert([
            'name' => str_random(10),
            'type' => 2,
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
