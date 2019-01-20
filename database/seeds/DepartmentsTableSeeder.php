<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [
                'name' => 'АУП',
                'alias' => 'managers',
            ],
            [
                'name' => 'Отдел кадров',
                'alias' => 'personal',
            ],
            [
                'name' => 'MTO',
                'alias' => 'mto',
            ],
            [
                'name' => 'Упраление проектами',
                'alias' => 'oup',
            ],
            [
                'name' => 'Юристы',
                'alias' => 'yurists',
            ]
        ];

        DB::table('departments')->insert($departments);

    }
}
