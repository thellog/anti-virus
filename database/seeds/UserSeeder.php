<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($dd = 0; $dd < 100; $dd++)
      {
        DB::table('users')->insert([
          'name' => Str::random(10),
          'email' => Str::random(10).'@gmail.com',
          'password' => Hash::make('password')
        ]);
      }
    }
}
