<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\City::insert(
            [
                [
                    'name' => 'مكـــــة',
                ],
                [
                    'name' => 'المديــــنة',
                ],
                [
                    'name' => 'جــــــدة',
                ],
                [
                    'name' => 'الرياض',
                ],
                [
                    'name' => 'تبوك',
                ]
            ]
        );
    }
}
