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
        // レシピ 1
        App\Materrial::create([
            'name' => 'ジン',
            'quantity' => '30ml',
            'degree' => '37%',
            'recipe_id' => 1,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Materrial::create([
            'name' => 'ジンジャエール',
            'quantity' => '160ml',
            'degree' => '0%',
            'recipe_id' => 1,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        // レシピ 2
        App\Materrial::create([
            'name' => 'ウォッカ',
            'quantity' => '40ml',
            'degree' => '50%',
            'recipe_id' => 2,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Materrial::create([
            'name' => 'カルーア',
            'quantity' => '20ml',
            'degree' => '20%',
            'recipe_id' => 2,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        // レシピ 3
        App\Materrial::create([
            'name' => 'マリーブリザールチャールストン',
            'quantity' => '30ml',
            'degree' => '20%',
            'recipe_id' => 3,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Materrial::create([
            'name' => 'ソーダ',
            'quantity' => '160ml',
            'degree' => '0%',
            'recipe_id' => 3,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        // レシピ 4
        App\Materrial::create([
            'name' => 'ジムビーム',
            'quantity' => '30ml',
            'degree' => '40%',
            'recipe_id' => 4,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Materrial::create([
            'name' => 'ソーダ',
            'quantity' => '160ml',
            'degree' => '0%',
            'recipe_id' => 4,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
    }
}
