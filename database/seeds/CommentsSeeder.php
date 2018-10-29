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
                "comment"=> "Lorem ipsum dolor amet consectetur adipisicing elit. Autem quae voluptatibus aliquam est inventore."
            ],
            [
                "name"=>"Kinaan",
                "mail"=>"Kinaan19@taras.fr",
                "image"=>"5865-linux-online-inc-s-.png",
                "comment"=> "J'ai adoré, t'es le meilleur, merci beaucoup ! "
            ]

        ]);
    }
}