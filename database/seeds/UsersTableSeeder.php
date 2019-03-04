<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('users')->insert([
            'role_id' => 1,
            'name' => $faker->name,
            'username' => 'Admin',
            'email' => 'admin@admin.com',
            'phone' => $faker->phoneNumber,
            'password' => bcrypt('123456'),
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Sub Admin',
            'username' => 'sub_admin',
            'email' => 'sub_admin@admin.com',
            'phone' => $faker->phoneNumber,
            'password' => bcrypt('123456'),
            'created_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => $faker->name,
            'username' => 'user',
            'email' => 'user@user.com',
            'phone' => $faker->phoneNumber,
            'password' => bcrypt('123456'),
            'created_at' => now(),
        ]);
    }
}
