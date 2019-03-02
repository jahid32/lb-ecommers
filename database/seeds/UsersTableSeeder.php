<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        'role_id' => 1,
        'name' => 'Admin',
        'username' => 'Admin',
        'email' =>'admin@admin.com',
        'password' => bcrypt('123456'),
        'created_at' => now(),
      ]);
      DB::table('users')->insert([
        'role_id' => 2,
        'name' => 'Sub Admin',
        'username' => 'sub_admin',
        'email' =>'sub_admin@admin.com',
        'password' => bcrypt('123456'),
        'created_at' => now(),
      ]);
      DB::table('users')->insert([
        'name' => 'User',
        'username' => 'user',
        'email' =>'user@user.com',
        'password' => bcrypt('123456'),
        'created_at' => now(),
      ]);
    }
}
