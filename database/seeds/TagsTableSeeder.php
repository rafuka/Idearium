<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tags')->insert([
        'note_id' => 1,
        'tag' => 'Love',
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString()

      ]);

      DB::table('tags')->insert([
        'note_id' => 1,
        'tag' => 'Ideas',
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString()

      ]);

      DB::table('tags')->insert([
        'note_id' => 2,
        'tag' => 'Programming',
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString()

      ]);

      DB::table('tags')->insert([
        'note_id' => 3,
        'tag' => 'A tag',
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString()

      ]);

      DB::table('tags')->insert([
        'note_id' => 3,
        'tag' => 'Another Tag',
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString()

      ]);
    }
}
