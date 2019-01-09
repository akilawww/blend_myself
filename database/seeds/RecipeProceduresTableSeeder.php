<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RecipeProceduresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\RecipeProcedure::create([
            'process_num' => 1,
            'body' => '酒1に酒2を混ぜる',
            'image' => '',
            'recipe_id' => 1,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\RecipeProcedure::create([
            'process_num' => 2,
            'body' => '酒1に酒2の混合物に、酒3を混ぜる',
            'image' => '',
            'recipe_id' => 1,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\RecipeProcedure::create([
            'process_num' => 3,
            'body' => '果物を添える',
            'image' => '',
            'recipe_id' => 1,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
    }
}
