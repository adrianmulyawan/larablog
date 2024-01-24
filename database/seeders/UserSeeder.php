<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Adrian Mulyawan',
                'email' => 'adrianmulyawan@gmail.com',
                'username' => 'adrianmulyawan',
                'phone_number' => '089640001855',
                'role' => 'SUPER_ADMIN',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Budiono Siregar',
                'email' => 'budionosiregar@gmail.com',
                'username' => 'budionosiregar',
                'phone_number' => '089640001855',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Reza Alfianto',
                'email' => 'rezaalf@gmail.com',
                'username' => 'rezaalf',
                'phone_number' => '089640001855',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Bilal Indrajaya',
                'email' => 'indrajayabilal@gmail.com',
                'username' => 'bilalindrjy',
                'phone_number' => '089640001855',
                'password' => bcrypt('password')
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
