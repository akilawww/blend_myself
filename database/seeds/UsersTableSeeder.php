<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // created_at, updated_at is random
        App\User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subDays(32),
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);

        App\User::create([
            'name' => 'test-staff',
            'email' => 'staff@example.com',
            'password' => bcrypt('password'),
            'email_verified_at' => Carbon::now()->subDays(32),
            'created_at' => Carbon::now()->subDays(32),
            'updated_at' => Carbon::now()->subDays(32),
        ]);

        App\User::create([
          'name' => 'akira',
          'email' => 'kd1205710@st.kobedenshi.ac.jp',
          'password' => bcrypt('1203'),
          'email_verified_at' => Carbon::now()->subDays(32),
          'created_at' => Carbon::now()->subDays(32),
          'updated_at' => Carbon::now()->subDays(32),
        ]);

        factory(App\User::class, 10)->create();
    }
}
