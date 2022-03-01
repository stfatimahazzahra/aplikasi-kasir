<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Siti Fatimah Azzahra',
                'username' => 'akuzahra',
                'password' => bcrypt('admin1'),
                'role' => 'Admin'
            ],
            [
                'name' => 'Belle',
                'username' => 'bellebel',
                'password' => bcrypt('kasir1'),
                'role' => 'Kasir'
            ],
            [
                'name' => 'William',
                'username' => 'willfm',
                'password' => bcrypt('manajer1'),
                'role' => 'Manajer'
            ]
        ];
        foreach($users as $user) {
            User::create($user);
        }
    }
}