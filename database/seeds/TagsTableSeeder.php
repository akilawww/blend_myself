<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Tag::create([
            'tag_name' => '甘い系',
            'tag_type' => 1,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag::create([
            'tag_name' => '辛い系',
            'tag_type' => 1,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag::create([
            'tag_name' => 'サッパリ系',
            'tag_type' => 1,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);

        App\Tag::create([
            'tag_name' => '0％',
            'tag_type' => 2,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag::create([
            'tag_name' => '1%~15%',
            'tag_type' => 2,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag::create([
            'tag_name' => '16%~24%',
            'tag_type' => 2,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag::create([
            'tag_name' => '25%以上',
            'tag_type' => 2,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);

        App\Tag::create([
            'tag_name' => 'ジン',
            'tag_type' => 3,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag::create([
            'tag_name' => 'テキーラ',
            'tag_type' => 3,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag::create([
            'tag_name' => 'ウォッカ',
            'tag_type' => 3,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag::create([
            'tag_name' => 'ラム',
            'tag_type' => 3,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag::create([
            'tag_name' => 'リキュール',
            'tag_type' => 3,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag::create([
            'tag_name' => 'ワイン',
            'tag_type' => 3,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag::create([
            'tag_name' => 'ウィスキー',
            'tag_type' => 3,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag::create([
            'tag_name' => 'ブランデー',
            'tag_type' => 3,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag::create([
            'tag_name' => 'ビール',
            'tag_type' => 3,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag::create([
            'tag_name' => '焼酎',
            'tag_type' => 3,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag::create([
            'tag_name' => '日本酒',
            'tag_type' => 3,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
    }
}
