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
        factory(App\Models\User::class)->create([
            'name' => 'gordios',
            'email' => 'gordios2015@gmail.com',
            'password' => bcrypt('nautilus@dmin'),
            'admin' => 1
        ]);
    }
}
