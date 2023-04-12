<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Muhammad Asadillah Ramadhan',
            'username' => 'Rama',
            'password' => Hash::make('ramarama'),
            'email' => 'rama@gmail.com'
        ]);
    }
}
