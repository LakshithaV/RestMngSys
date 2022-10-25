<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\BookTable;
use App\Models\User;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookTable::create([
            'people' => '3',
            'date' => '2022-05-01',
            'time' => '15.30',
            'seatingType' => 'Outdoor',
            'firstName' => 'Nimal',
            'lastName' => 'Silva',
            'phone' => '0234567834',
            'email' => 'nimal@gmail.com',
            'occasion' => 'Date',
            'request'=> 'No flowers',
            'action' => 'Pending',
        ]);

        BookTable::create([
            'people' => '2',
            'date' => '2022-04-13',
            'time' => '19.30',
            'seatingType' => 'Standard',
            'firstName' => 'Lakshitha',
            'lastName' => 'Viraj',
            'phone' => '0767500411',
            'email' => 'viraj@gmail.com',
            'occasion' => 'Birthday',
            'request'=> '25th birthday',
            'action' => 'Pending',
        ]);

        BookTable::create([
            'people' => '8',
            'date' => '2022-05-19',
            'time' => '21.30',
            'seatingType' => 'Outdoor',
            'firstName' => 'Ravi',
            'lastName' => 'Rajapakse',
            'phone' => '0768965429',
            'email' => 'Ravi@gmail.com',
            'action' => 'Cancelled',
        ]);

        BookTable::create([
            'people' => '4',
            'date' => '2022-03-23',
            'time' => '15.30',
            'seatingType' => 'High top',
            'firstName' => 'Dinesh',
            'lastName' => 'Gamage',
            'phone' => '0787515498',
            'email' => 'dinesh@gmail.com',
            'occasion' => 'Date',
            'action' => 'Done',
        ]);

        BookTable::create([
            'people' => '2',
            'date' => '2022-06-20',
            'time' => '20.00',
            'seatingType' => 'Standard',
            'firstName' => 'Vineeth',
            'lastName' => 'P',
            'phone' => '0714561789',
            'email' => 'vineeth@gmail.com',
            'occasion' => 'Business Meal',
            'action' => 'Confirm',
        ]);
    }
}
