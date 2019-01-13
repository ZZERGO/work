<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $countries = [
            [
                'name' => "Россия",
                'alias' => "RU"
            ],
            [
                'name' => "Украина",
                'alias' => "UA"
            ],
            [
                'name' => "Казахстан",
                'alias' => "KZ"
            ]
        ];

        DB::table('countries')->insert($countries);
    }
}
