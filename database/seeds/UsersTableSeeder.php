<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'admin',
            'email' => 'admin@work.local',
            'email_verified_at' => now(),
            'password' => bcrypt('123123'),
            'remember_token' => str_random(10),
            'countries_id' => random_int(1, 3),
            'department_id' => random_int(1, 5),
            'gender' => 'male',
            'is_active' => '1',
        ];
        DB::table('users')->insert($user);
       //factory(\App\Models\User::class, 'admin', 10)->create();
    }
}
