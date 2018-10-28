<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;



class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')-> insert([
        'id'=>'1',
        'name'=>'J',
        'email'=>"j@m.fr",
        'password'=>Hash::make("test12")
    ]);
    }
}
