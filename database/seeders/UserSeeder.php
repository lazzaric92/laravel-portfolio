<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $myData= [
            'name' => 'Carla',
            'last_name' => 'Lazzari',
            'email' => 'carla@gmail.com',
            'password' => Hash::make('12345678'),
            'profile_img' => null,
            'cover_img' => null,
            'summary' => 'sommario di prova'
        ];

        User::create($myData);
    }
}
