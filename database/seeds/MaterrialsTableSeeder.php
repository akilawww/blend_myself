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
    // recipe 1
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
    // recipe 2
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
    // recipe 3
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
    // recipe 4
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
    // recipe 5
    App\Materrial::create([
      'name' => 'ミドリ',
      'quantity' => '20ml',
      'degree' => '20%',
      'recipe_id' => 5,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now()->subDays(34),
    ]);
    App\Materrial::create([
      'name' => 'ブルガル　エクストラドライ',
      'quantity' => '30ml',
      'degree' => '40%',
      'recipe_id' => 5,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now()->subDays(34),
    ]);
    App\Materrial::create([
      'name' => 'マリブ',
      'quantity' => '15ml',
      'degree' => '21%',
      'recipe_id' => 5,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now()->subDays(34),
    ]);
    App\Materrial::create([
      'name' => 'フレッシュライムジュース',
      'quantity' => '15ml',
      'degree' => '0%',
      'recipe_id' => 5,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now()->subDays(34),
    ]);
    App\Materrial::create([
      'name' => 'パイナップルジュース',
      'quantity' => '15ml',
      'degree' => '0%',
      'recipe_id' => 5,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now(),
    ]);
    // recipe 6
    App\Materrial::create([
      'name' => 'カルーア',
      'quantity' => '30ml',
      'degree' => '20%',
      'recipe_id' => 6,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now(),
    ]);
    App\Materrial::create([
      'name' => 'ミルク',
      'quantity' => '90ml',
      'degree' => '0%',
      'recipe_id' => 6,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now(),
    ]);
  }
}
