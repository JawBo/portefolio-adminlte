<?php

use Illuminate\Database\Seeder;

class AboutsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([

            [
                "icone"=>"fab fa-wordpress ",
                "about"=>"Web Developer",
                "description"=>"lorem ipsum dolores luces"
            ],
            [
                "icone"=>"fab fa-connectdevelop",
                "about"=>"Internet Marketing",
                "description"=>"lorem ipsum dolores luces"
            ],
            [
                "icone"=>"fas fa-chart-bar",
                "about"=>"Bussiness Plan",
                "description"=>"lorem ipsum dolores luces"
            ],
            

        ]);
    }
}
