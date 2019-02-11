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
        // создадим админа
        $user = [
            'name' => 'admin',
            'email' => 'admin@work.local',
            'email_verified_at' => now(),
            'password' => bcrypt('123123'),
            'remember_token' => str_random(10),
            'is_active' => '1',
        ];
        DB::table('users')->insert($user);

        // запустим фабрику пользователей
        factory(\App\Models\Personal\User::class, 'admin', 10)->create();
    }
}
