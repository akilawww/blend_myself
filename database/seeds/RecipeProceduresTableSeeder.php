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
    // recipe 1
    App\RecipeProcedure::create([
      'process_num' => 1,
      'body' => 'グラスに氷を入れる',
      'image' => '/storage/testdata/グラス.jpg',
      'recipe_id' => 1,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now()->subDays(32),
    ]);
    App\RecipeProcedure::create([
      'process_num' => 2,
      'body' => 'ジンを注ぐ',
      'image' => '/storage/testdata/ジン.jpg',
      'recipe_id' => 1,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now()->subDays(32),
    ]);
    App\RecipeProcedure::create([
      'process_num' => 3,
      'body' => 'ジンジャエールを注ぐ',
      'image' => '/storage/testdata/ジンジャエール.jpg',
      'recipe_id' => 1,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now()->subDays(32),
    ]);
    App\RecipeProcedure::create([
      'process_num' => 4,
      'body' => '混ぜる',
      'image' => '/storage/testdata/ステア.jpg',
      'recipe_id' => 1,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now()->subDays(32),
    ]);
    // recipe 2
    App\RecipeProcedure::create([
      'process_num' => 1,
      'body' => 'グラスに氷を入れる',
      'image' => '/storage/testdata/グラス.jpg',
      'recipe_id' => 2,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now()->subDays(32),
    ]);
    App\RecipeProcedure::create([
      'process_num' => 2,
      'body' => 'ウォッカを入れる',
      'image' => '/storage/testdata/ウォッカ.jpg',
      'recipe_id' => 2,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now()->subDays(32),
    ]);
    App\RecipeProcedure::create([
      'process_num' => 3,
      'body' => 'カルーアを入れる',
      'image' => '/storage/testdata/カルーア.jpg',
      'recipe_id' => 2,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now()->subDays(32),
    ]);
    App\RecipeProcedure::create([
      'process_num' => 4,
      'body' => '混ぜる',
      'image' => '/storage/testdata/ステア.jpg',
      'recipe_id' => 2,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now()->subDays(32),
    ]);
    // recipe 3
    App\RecipeProcedure::create([
      'process_num' => 1,
      'body' => 'グラスに氷を入れる',
      'image' => '/storage/testdata/グラス.jpg',
      'recipe_id' => 3,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now()->subDays(32),
    ]);
    App\RecipeProcedure::create([
      'process_num' => 2,
      'body' => 'マリーブリザールチャールストンを注ぐ',
      'image' => '/storage/testdata/マリーブリザールチャールストン.jpg',
      'recipe_id' => 3,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now()->subDays(32),
    ]);
    App\RecipeProcedure::create([
      'process_num' => 3,
      'body' => 'ソーダをそっと優しく注ぐ',
      'image' => '/storage/testdata/ソーダ.jpg',
      'recipe_id' => 3,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now()->subDays(32),
    ]);
    App\RecipeProcedure::create([
      'process_num' => 4,
      'body' => '混ぜる',
      'image' => '/storage/testdata/ステア.jpg',
      'recipe_id' => 3,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now()->subDays(32),
    ]);
    // recipe 4
    App\RecipeProcedure::create([
      'process_num' => 1,
      'body' => 'グラスに氷を入れる',
      'image' => '/storage/testdata/グラス.jpg',
      'recipe_id' => 4,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now()->subDays(32),
    ]);
    App\RecipeProcedure::create([
      'process_num' => 2,
      'body' => 'ジムビームを注ぐ',
      'image' => '/storage/testdata/ジムビーム.jpg',
      'recipe_id' => 4,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now()->subDays(32),
    ]);
    App\RecipeProcedure::create([
      'process_num' => 3,
      'body' => 'ソーダをそっと優しく注ぐ',
      'image' => '/storage/testdata/ソーダ.jpg',
      'recipe_id' => 4,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now()->subDays(32),
    ]);
    App\RecipeProcedure::create([
      'process_num' => 4,
      'body' => '軽く混ぜる',
      'image' => '/storage/testdata/ステア.jpg',
      'recipe_id' => 4,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now()->subDays(32),
    ]);
    // recipe 5
    App\RecipeProcedure::create([
      'process_num' => 1,
      'body' => '氷をグラスに入れる',
      'image' => '/storage/testdata/グラス.jpg',
      'recipe_id' => 5,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now(),
    ]);
    App\RecipeProcedure::create([
      'process_num' => 2,
      'body' => 'ミドリver.2(kawasaki SuperEdition)を入れる',
      'image' => '/storage/testdata/ミドリ.jpg',
      'recipe_id' => 5,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now(),
    ]);
    App\RecipeProcedure::create([
      'process_num' => 3,
      'body' => 'ブルガル エクストラドライver.2(kawasaki SuperEdition)を入れる',
      'image' => '/storage/testdata/ブルガル.jpg',
      'recipe_id' => 5,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now(),
    ]);
    App\RecipeProcedure::create([
      'process_num' => 4,
      'body' => 'マリブ(ココナッツリキュール)を入れる',
      'image' => '/storage/testdata/マリブ.jpg',
      'recipe_id' => 5,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now(),
    ]);
    App\RecipeProcedure::create([
      'process_num' => 5,
      'body' => 'フレッシュライムジュース(超甘いver2)を入れる',
      'image' => '/storage/testdata/フレッシュライムジュース.jpg',
      'recipe_id' => 5,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now(),
    ]);
    App\RecipeProcedure::create([
      'process_num' => 6,
      'body' => 'パイナップルジュースを入れる',
      'image' => '/storage/testdata/パイナップルジュース.jpg',
      'recipe_id' => 5,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now(),
    ]);
    App\RecipeProcedure::create([
      'process_num' => 7,
      'body' => '軽く混ぜる',
      'image' => '/storage/testdata/ステア.jpg',
      'recipe_id' => 5,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now(),
    ]);
    // recipe 6
    App\RecipeProcedure::create([
      'process_num' => 1,
      'body' => '氷を入れたグラスを用意する',
      'image' => '/storage/testdata/グラス.jpg',
      'recipe_id' => 6,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now(),
    ]);
    App\RecipeProcedure::create([
      'process_num' => 2,
      'body' => 'カルーアとミルクを入れる',
      'image' => '/storage/testdata/カルーアミルク.jpg',
      'recipe_id' => 6,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now(),
    ]);
    App\RecipeProcedure::create([
      'process_num' => 1,
      'body' => '焼酎と炭酸水を混ぜ、アイスの実を入れます',
      'image' => '/storage/testdata/ice.jpg',
      'recipe_id' => 7,
      'created_at' => Carbon::now()->subDays(32),
      'updated_at' => Carbon::now(),
    ]);
  }
}
