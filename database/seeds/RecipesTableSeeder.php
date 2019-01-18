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
        App\Recipe::create([
            'title' => 'ジンバック',
            'body' => 'さっぱりしていて美味しい',
            'image' => '/storage/testdata/ジンバック.jpg',
            'user_id' => 1,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Recipe::create([
            'title' => 'ブラックルシアン',
            'body' => 'めちゃ甘い',
            'image' => '/storage/testdata/ブラックルシアン.jpg',
            'user_id' => 1,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Recipe::create([
            'title' => 'チャールストンソーダ',
            'body' => '名前がオシャレ',
            'image' => '/storage/testdata/チャールストンソーダ.jpg',
            'user_id' => 1,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Recipe::create([
            'title' => 'ジムハイボール',
            'body' => '王道なハイボール',
            'image' => '/storage/testdata/ジムハイボール.jpg',
            'user_id' => 1,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Recipe::create([
            'title' => 'グリーンアイズ',
            'body' => '南国の風味がする夏向きカクテル',
            'image' => '/storage/testdata/グリーンアイズ.jpg',
            'user_id' => 1,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Recipe::create([
            'title' => 'グリーンアイズ',
            'body' => '南国の風味がする夏向きカクテル',
            'image' => '/storage/testdata/グリーンアイズ.jpg',
            'user_id' => 1,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Recipe::create([
            'title' => 'カルーアミルク',
            'body' => 'コーヒーミルクのようなカクテル',
            'image' => '/storage/testdata/not.jpg',
            'user_id' => 1,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now(),
        ]);
    }
}
