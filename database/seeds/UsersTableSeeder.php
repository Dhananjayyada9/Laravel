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
            'name' => 'Dhananjay Yadav',
            'email' => 'dhananjayyadav1960@gmail.com',
            'password' => bcrypt(12345),
        ]);

    }
}
