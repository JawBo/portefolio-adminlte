<?php

use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([

            [
                "name"=>"test",
                "mail"=>"test@m.fr",
                "image"=>"public/eQxgt8Qmb3AzJtNGVSQ242NEfpHubOCEPHiKAH4N.jpeg",
                "comment"=> "t'es un test"
            ]

        ]);
    }
}
