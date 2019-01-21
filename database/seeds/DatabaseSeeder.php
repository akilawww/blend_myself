<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(UsersTableSeeder::class);
        $this->call(RecipesTableSeeder::class);
        $this->call(RecipeProceduresTableSeeder::class);
        $this->call(MaterrialsTableSeeder::class);
        $this->call(TagsTableSeeder::class);

        Model::reguard(); //再設定
    }
}
