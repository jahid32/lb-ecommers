<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('roles')->insert([
        'name' => 'Admin',
        'slug' => 'admin',
        'created_at' => now(),
      ]);
      DB::table('roles')->insert([
        'name' => 'Sub Admin',
        'slug' => 'sub_admin',
        'created_at' => now(),
      ]);
      DB::table('roles')->insert([
        'name' => 'User',
        'slug' => 'user',
        'created_at' => now(),
      ]);
    }
}
