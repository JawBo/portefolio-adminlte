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
                "name"=>"Test",
                "mail"=>"test@mail.fr",
                "image"=>"5865-linux-online-inc-s-.png",
                "comment"=> "Ceci est un texte de test"
            ]

        ]);
    }
}