<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            [
                'name' => 'Administrator',
                'email' => 'admin@giftbouquet.com',
                'username' => 'admin',
                'role' => 'admin',
                'phone' => '081361432123',
                'password' => Hash::make('password'),

            ],
            [
                'name' => 'SamuelSiahaan',
                'email' => 'samuel@admin.com',
                'username' => 'SamuelSiahaan',
                'role' => 'admin',
                'phone' => '082272944107',
                'password' => Hash::make('password'),

            ],
            [
                'name' => 'user',
                'email' => 'user@user.com',
                'username' => 'user',
                'role' => 'user',
                'phone' => '082161782942',
                'password' => Hash::make('password'),

            ]
        );
        foreach($data AS $d){
            User::create([
                'name' => $d['name'],
                'email' => $d['email'],
                'username' => $d['username'],
                'role' => $d['role'],
                'phone' => $d['phone'],
                'password' => $d['password'],
            ]);
        }
    }
}