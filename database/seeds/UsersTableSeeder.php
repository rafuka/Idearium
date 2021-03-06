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
          'email' => 'jill@harvard.edu',
          'name' => 'Jill',
          'password' => \Hash::make('helloworld'),
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString()

        ]);

        DB::table('users')->insert([
          'email' => 'jamal@harvard.edu',
          'name'  => 'Jamal',
          'password' => \Hash::make('helloworld'),
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString()

        ]);
    }
}
