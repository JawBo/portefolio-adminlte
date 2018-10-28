<?php

use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([

            [
                'icone' => 'fas fa-handshake',
                'amount' => '3',
                'skill' => 'Complete Project'
            ],
            [
                'icone' => 'fas fa-grin-alt',
                'amount' => '1',
                'skill' => 'Happy Clients'
            ],
            [
                'icone' => 'fas fa-coffee',
                'amount' => '130',
                'skill' => 'Complete Project'
            ],
            [
                'icone' => 'fas fa-award',
                'amount' => '3',
                'skill' => 'Awards'
            ],
            
                    
        ]);
    }
}
