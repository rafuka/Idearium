<?php

use Illuminate\Database\Seeder;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('notes')->insert([
        'user_id' => 1,
        'text' => 'This is a test note!',
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString()

      ]);

      DB::table('notes')->insert([
        'user_id' => 1,
        'text' => 'This is another test note!',
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString()

      ]);

      DB::table('notes')->insert([
        'user_id' => 2,
        'text' => 'This is a different test note!',
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString()

      ]);
    }
}
