<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\BookTable;
use App\Models\User;

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
            'firstname' => 'Amal',
            'lastname'=> 'Perera',
            'email' => 'amal@gmail.com',
            'password' => Hash::make('amal123'),
            'phone' => '0117894856',
            'address' => 'Colombo',
            'gender' => 'm',
            'role' => 'manager',
            'salary' => '120000',
        ]);

        User::create([
            'firstname' => 'manager',
            'lastname'=> '',
            'email' => 'manager@gmail.com',
            'password' => Hash::make('manager123'),
            'phone' => '0123456789',
            'address' => 'Colombo',
            'gender' => 'm',
            'role' => 'manager',
            'salary' => '120000',
        ]);

        User::create([
            'firstname' => 'waiter',
            'lastname'=> '',
            'email' => 'waiter@gmail.com',
            'password' => Hash::make('waiter123'),
            'phone' => '0123456789',
            'address' => 'Colombo',
            'gender' => 'm',
            'role' => 'waiter',
            'salary' => '50000',
        ]);

        User::create([
            'firstname' => 'chef',
            'lastname'=> '',
            'email' => 'chef@gmail.com',
            'password' => Hash::make('chef123'),
            'phone' => '0123456789',
            'address' => 'Colombo',
            'gender' => 'm',
            'role' => 'chef',
            'salary' => '100000',
        ]);
    }
}
