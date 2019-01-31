<!-- tag seeder -->
<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TagVerificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // recipe 1
        App\Tag_verification::create([
          'tag_id' => '3',
          'recipe_id' => '1',
          'created_at' => Carbon::now()->subDays(32),
          'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag_verification::create([
          'tag_id' => '5',
          'recipe_id' => '1',
          'created_at' => Carbon::now()->subDays(32),
          'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag_verification::create([
          'tag_id' => '8',
          'recipe_id' => '1',
          'created_at' => Carbon::now()->subDays(32),
          'updated_at' => Carbon::now()->subDays(32),
        ]);
        // recipe 2
        App\Tag_verification::create([
          'tag_id' => '1',
          'recipe_id' => '2',
          'created_at' => Carbon::now()->subDays(32),
          'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag_verification::create([
          'tag_id' => '7',
          'recipe_id' => '2',
          'created_at' => Carbon::now()->subDays(32),
          'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag_verification::create([
          'tag_id' => '10',
          'recipe_id' => '2',
          'created_at' => Carbon::now()->subDays(32),
          'updated_at' => Carbon::now()->subDays(32),
        ]);
        // recipe 3
        App\Tag_verification::create([
          'tag_id' => '3',
          'recipe_id' => '3',
          'created_at' => Carbon::now()->subDays(32),
          'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag_verification::create([
          'tag_id' => '5',
          'recipe_id' => '3',
          'created_at' => Carbon::now()->subDays(32),
          'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag_verification::create([
          'tag_id' => '12',
          'recipe_id' => '3',
          'created_at' => Carbon::now()->subDays(32),
          'updated_at' => Carbon::now()->subDays(32),
        ]);
        // recipe 4
        App\Tag_verification::create([
          'tag_id' => '3',
          'recipe_id' => '4',
          'created_at' => Carbon::now()->subDays(32),
          'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag_verification::create([
          'tag_id' => '5',
          'recipe_id' => '4',
          'created_at' => Carbon::now()->subDays(32),
          'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag_verification::create([
          'tag_id' => '14',
          'recipe_id' => '4',
          'created_at' => Carbon::now()->subDays(32),
          'updated_at' => Carbon::now()->subDays(32),
        ]);
        // recipe 5
        App\Tag_verification::create([
          'tag_id' => '1',
          'recipe_id' => '5',
          'created_at' => Carbon::now()->subDays(32),
          'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag_verification::create([
          'tag_id' => '6',
          'recipe_id' => '5',
          'created_at' => Carbon::now()->subDays(32),
          'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag_verification::create([
          'tag_id' => '11',
          'recipe_id' => '5',
          'created_at' => Carbon::now()->subDays(32),
          'updated_at' => Carbon::now()->subDays(32),
        ]);
        // recipe 6
        App\Tag_verification::create([
          'tag_id' => '1',
          'recipe_id' => '6',
          'created_at' => Carbon::now()->subDays(32),
          'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag_verification::create([
          'tag_id' => '5',
          'recipe_id' => '6',
          'created_at' => Carbon::now()->subDays(32),
          'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag_verification::create([
          'tag_id' => '12',
          'recipe_id' => '6',
          'created_at' => Carbon::now()->subDays(32),
          'updated_at' => Carbon::now()->subDays(32),
        ]);
        // recipe 7
        App\Tag_verification::create([
          'tag_id' => '1',
          'recipe_id' => '7',
          'created_at' => Carbon::now()->subDays(32),
          'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag_verification::create([
          'tag_id' => '5',
          'recipe_id' => '7',
          'created_at' => Carbon::now()->subDays(32),
          'updated_at' => Carbon::now()->subDays(32),
        ]);
        App\Tag_verification::create([
          'tag_id' => '17',
          'recipe_id' => '7',
          'created_at' => Carbon::now()->subDays(32),
          'updated_at' => Carbon::now()->subDays(32),
        ]);
    }
}
