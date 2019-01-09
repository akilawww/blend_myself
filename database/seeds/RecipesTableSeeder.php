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
            'title' => 'カクテル',
            'body' => '1915年に中毒性が疑問視され製造・流通・販売を禁止された幻の酒「アブサン」。
            禁止の原因であったニガヨモギの主成分“ツヨン”の濃度を基準値以内に抑えることで、2002年に「ぺルノ・アブサン」として復活した。
            「アブサン」という名前は「ヨモギ」をあらわすギリシア語に由来する。',
            'image' => '',
            'user_id' => 1,
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);
        factory(App\Recipe::class, 10)->create();
    }
}
