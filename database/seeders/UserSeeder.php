<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name'=>'admin',
            'username'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin'),
        ]);
        $wandika = User::create([
            'name'=>'wandika',
            'username'=>'wandika',
            'email'=>'wandika@gmail.com',
            'password'=>bcrypt('wandika'),
        ]);
        $rizaldi = User::create([
            'name'=>'rizaldi',
            'username'=>'rizaldi',
            'email'=>'rizaldi@gmail.com',
            'password'=>bcrypt('rizaldi'),
        ]);
    }
}
