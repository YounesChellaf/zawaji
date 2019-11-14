<?php

use Illuminate\Database\Seeder;

class WeedingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\WeedingType::insert([
            [
                'name' => 'عـــــــرس',
                'color' => '#e83e8c'
            ],
            [
                'name' => 'خــطـــوبة',
                'color' => '#e46a76'
            ],
            [
                'name' => 'خـــــتـان',
                'color' => '#03a9f3'
            ],
            [
                'name' => 'عيـد ميـــلاد',
                'color' => '#fec107'
            ],
        ]);
    }
}
