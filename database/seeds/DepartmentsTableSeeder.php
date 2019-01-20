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
                'slug' => 'managers',
            ],
            [
                'name' => 'Отдел кадров',
                'slug' => 'personal',
            ],
            [
                'name' => 'MTO',
                'slug' => 'mto',
            ],
            [
                'name' => 'Упраление проектами',
                'slug' => 'oup',
            ],
            [
                'name' => 'Юристы',
                'slug' => 'yurists',
            ]
        ];

        DB::table('departments')->insert($departments);

    }
}
