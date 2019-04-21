<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nickname' => 'asya',
            'email' => 'asyagubar@gmail.com',
            'password' => bcrypt('secret'),
            'email_verified_at' => now()
        ]);
        factory(App\User::class, 10)->create();
    }
}
