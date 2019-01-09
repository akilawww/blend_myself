<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MaterrialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Materrial::create([
            'name' => '酒1',
            'quantity' => '200ml',
            'degree' => '20',
            'recipe_id' => 1,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);

        App\Materrial::create([
            'name' => '酒2',
            'quantity' => '100ml',
            'degree' => '10',
            'recipe_id' => 1,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Materrial::create([
            'name' => '酒3',
            'quantity' => '20ml',
            'degree' => '40',
            'recipe_id' => 1,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Materrial::create([
            'name' => '果物',
            'quantity' => '1個',
            'degree' => '',
            'recipe_id' => 1,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
    }
}
