<?php

use Illuminate\Database\Seeder;
use App\Counter;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('CounterTableSeeder');
        $this->command->info('Counter table seeded!');
    }
}

class CounterTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('counters')->delete();
        Counter::create([
          'animal' => 'cat',
          'counter' => 0
        ]);

        Counter::create([
          'animal' => 'dog',
          'counter' => 0
        ]);
    }
}
