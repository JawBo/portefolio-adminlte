<?php

use Illuminate\Database\Seeder;

class IconesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icones')->insert([
            [
                "name"=>"Tasks",
                "class"=>"fas fa-tasks"
            ],
            [
                "name"=>"Accessibility",
                "class"=>"fas fa-universal-access"
            ],
            [
                "name"=>"Visa",
                "class"=>"fab fa-cc-visa"
            ],
            [
                "name"=>"American Express",
                "class"=>"fab fa-cc-amex"
            ],
            [
                "name"=>"PayPal",
                "class"=>"fab fa-cc-paypal"
            ],
            [
                "name"=>"Trophy",
                "class"=>"fas fa-trophy"
            ],
            [
                "name"=>"Recycle",
                "class"=>"fas fa-recycle"
            ],
            [
                "name"=>"Graduation Cap",
                "class"=>"fas fa-graduation-cap"
            ],
            [
                "name"=>"Microscope",
                "class"=>"fas fa-microscope"
            ],
            [
                "name"=>"Sitemap",
                "class"=>"fas fa-sitemap"
            ],
            [
                "name"=>"Handshake",
                "class"=>"fas fa-handshake"
            ],
            [
                "name"=>"Happy Face",
                "class"=>"fas fa-grin-alt"
            ],
            [
                "name"=>"Coffee",
                "class"=>"fas fa-coffee"
            ],
            [
                "name"=>"Awards",
                "class"=>"fas fa-award"
            ],



        ]);
    }
}
