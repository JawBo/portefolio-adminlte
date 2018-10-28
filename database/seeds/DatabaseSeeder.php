<?php

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
        $this->call(CommentsSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(SkillsSeeder::class);
        $this->call(IconesSeeder::class);
        $this->call(AboutsSeeder::class);

    }
}
