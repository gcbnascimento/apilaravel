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
            'name' => 'Gustavo Nascimento',
            'email' => 'gustavo@email.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
