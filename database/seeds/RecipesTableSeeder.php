<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RecipesTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    // recipe 1
    App\Recipe::create([
      'title' => 'ジンバック',
      'body' => 'さっぱりしていて美味しい',
      'image' => '/storage/testdata/ジンバック.jpg',
      'user_id' => 2,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now()->subDays(32),
    ]);
    // recipe 2
    App\Recipe::create([
      'title' => 'ブラックルシアン',
      'body' => 'めちゃ甘い',
      'image' => '/storage/testdata/ブラックルシアン.jpg',
      'user_id' => 1,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now()->subDays(32),
    ]);
    // recipe 3
    App\Recipe::create([
      'title' => 'チャールストンソーダ',
      'body' => '名前がオシャレ',
      'image' => '/storage/testdata/チャールストンソーダ.jpg',
      'user_id' => 1,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now()->subDays(32),
    ]);
    // recipe 4
    App\Recipe::create([
      'title' => 'ジムハイボール',
      'body' => '王道なハイボール',
      'image' => '/storage/testdata/ジムハイボール.jpg',
      'user_id' => 1,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now()->subDays(32),
    ]);
    // recipe 5
    App\Recipe::create([
      'title' => 'グリーンアイズ',
      'body' => '南国の風味がする夏向きカクテル。メロンリキュールとラムの香りのハーモニー、パイナップルの酸味とココナッツミルクの滑らかな口当たり。メロンリキュール界の革命児カワサキによる革新的(kawasaki SuperEdition)',
      'image' => '/storage/testdata/グリーンアイズ.jpg',
      'user_id' => 1,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now(),
    ]);
    // recipe 6
    App\Recipe::create([
      'title' => 'カルーアミルク',
      'body' => 'コーヒーミルクのようなカクテル',
      'image' => '/storage/testdata/カルーアミルク.jpg',
      'user_id' => 1,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now(),
    ]);
    // recipe 7
    App\Recipe::create([
      'title' => 'アイスの実の革命',
      'body' => 'カクテルカラフルで見ていて楽しくなります',
      'image' => '/storage/testdata/ice.jpg',
      'user_id' => 1,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now()->subDays(32),
    ]);
  }
}
