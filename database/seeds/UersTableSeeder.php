<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Akrofi Benjamin',
            'email' => 'administrator@gmail.com',
            'password' => Hash::make('password'),
            'role_id'=> 3
        ]);

    }
}
