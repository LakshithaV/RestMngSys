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
            'lastName' => 'Prem',
            'phone' => '0714561789',
            'email' => 'vineeth@gmail.com',
            'occasion' => 'Business Meal',
            'action' => 'Confirm',
        ]);

        BookTable::create([
            'people' => '3',
            'date' => '2022-01-21',
            'time' => '16.00',
            'seatingType' => 'Outdoor',
            'firstName' => 'Ragu',
            'lastName' => 'Arul',
            'phone' => '0778965289',
            'email' => 'ragu@gmail.com',
            'occasion' => 'Special Occation',
            'action' => 'Done',
        ]);

        BookTable::create([
            'people' => '4',
            'date' => '2022-06-15',
            'time' => '17.00',
            'seatingType' => 'Standard',
            'firstName' => 'Sunil',
            'lastName' => 'Jegath',
            'phone' => '0728567145',
            'email' => 'sunil@gmail.com',
            'occasion' => 'Business Meal',
            'action' => 'Confirm',
        ]);

        BookTable::create([
            'people' => '10',
            'date' => '2022-04-20',
            'time' => '16.30',
            'seatingType' => 'High Top',
            'firstName' => 'Varun',
            'lastName' => 'Sethu',
            'phone' => '0716487920',
            'email' => 'varun@gmail.com',
            'occasion' => 'Birthday',
            'action' => 'Pending',
        ]);

        BookTable::create([
            'people' => '5',
            'date' => '2022-02-10',
            'time' => '17.30',
            'seatingType' => 'Counter',
            'firstName' => 'Shehan',
            'lastName' => 'Vasantha',
            'phone' => '0715625689',
            'email' => 'shehan@gmail.com',
            'occasion' => 'Anniversary',
            'action' => 'Cancelled',
        ]);

        BookTable::create([
            'people' => '14',
            'date' => '2022-03-22',
            'time' => '15.30',
            'seatingType' => 'Outdoor',
            'firstName' => 'Sasi',
            'lastName' => 'Bala',
            'phone' => '0749856781',
            'email' => 'sasi@gmail.com',
            'occasion' => 'Date',
            'action' => 'done',
        ]);

        BookTable::create([
            'people' => '12',
            'date' => '2022-08-25',
            'time' => '18.00',
            'seatingType' => 'Standard',
            'firstName' => 'Anoj',
            'lastName' => 'Velu',
            'phone' => '0713285474',
            'email' => 'anoj@gmail.com',
            'occasion' => 'Business Meal',
            'action' => 'Pending',
        ]);

        BookTable::create([
            'people' => '15',
            'date' => '2022-07-16',
            'time' => '18.30',
            'seatingType' => 'Outdoor',
            'firstName' => 'Gaja',
            'lastName' => 'Durai',
            'phone' => '0775236981',
            'email' => 'gaja@gmail.com',
            'occasion' => 'Birthday',
            'action' => 'Confirm',
        ]);

        BookTable::create([
            'people' => '7',
            'date' => '2022-05-05',
            'time' => '19.00',
            'seatingType' => 'High Top',
            'firstName' => 'Rajitha',
            'lastName' => 'Bandara',
            'phone' => '0785687921',
            'email' => 'rajitha@gmail.com',
            'occasion' => 'Anniversary',
            'action' => 'Cancelled',
        ]);

        BookTable::create([
            'people' => '9',
            'date' => '2022-10-20',
            'time' => '15.00',
            'seatingType' => 'Counter',
            'firstName' => 'Dinush',
            'lastName' => 'Raja',
            'phone' => '0775236874',
            'email' => 'dinush@gmail.com',
            'occasion' => 'Date',
            'action' => 'Done',
        ]);

        BookTable::create([
            'people' => '11',
            'date' => '2022-03-25',
            'time' => '16.00',
            'seatingType' => 'Standard',
            'firstName' => 'Divagar',
            'lastName' => 'Pandy',
            'phone' => '0772358941',
            'email' => 'divagar@gmail.com',
            'occasion' => 'Special Occasion',
            'action' => 'Pending',
        ]);

        BookTable::create([
            'people' => '13',
            'date' => '2022-04-21',
            'time' => '17.00',
            'seatingType' => 'Out Door',
            'firstName' => 'Vinoth',
            'lastName' => 'Ram',
            'phone' => '0771256874',
            'email' => 'vinoth@gmail.com',
            'occasion' => 'Business Meal',
            'action' => 'Confirm',
        ]);

        BookTable::create([
            'people' => '2',
            'date' => '2022-08-01',
            'time' => '16.30',
            'seatingType' => 'High Top',
            'firstName' => 'Priyanth',
            'lastName' => 'Raj',
            'phone' => '0775285963',
            'email' => 'priyanth@gmail.com',
            'occasion' => 'Birthday',
            'action' => 'Cancelled',
        ]);

        BookTable::create([
            'people' => '4',
            'date' => '2022-11-12',
            'time' => '17.00',
            'seatingType' => 'Counter',
            'firstName' => 'Suman',
            'lastName' => 'Venujan',
            'phone' => '0773245897',
            'email' => 'suman@gmail.com',
            'occasion' => 'Anniversary',
            'action' => 'Done',
        ]);

        BookTable::create([
            'people' => '6',
            'date' => '2022-12-20',
            'time' => '18.00',
            'seatingType' => 'Standard',
            'firstName' => 'Veera',
            'lastName' => 'Perera',
            'phone' => '0725555897',
            'email' => 'veera@gmail.com',
            'occasion' => 'Date',
            'action' => 'Pending',
        ]);

        BookTable::create([
            'people' => '8',
            'date' => '2022-10-08',
            'time' => '19.00',
            'seatingType' => 'Out Door',
            'firstName' => 'Jhon',
            'lastName' => 'Thileeban',
            'phone' => '0782971632',
            'email' => 'jhon@gmail.com',
            'occasion' => 'Special Occation',
            'action' => 'Confirm',
        ]);

        BookTable::create([
            'people' => '10',
            'date' => '2022-06-29',
            'time' => '16.30',
            'seatingType' => 'High Top',
            'firstName' => 'Ashiq',
            'lastName' => 'Abdul',
            'phone' => '0778523699',
            'email' => 'ashiqgmail.com',
            'occasion' => 'Business Meal',
            'action' => 'Cancelled',
        ]);

        BookTable::create([
            'people' => '14',
            'date' => '2022-01-14',
            'time' => '17.30',
            'seatingType' => 'Counter',
            'firstName' => 'Sakith',
            'lastName' => 'Salindu',
            'phone' => '0768496321',
            'email' => 'sakith@gmail.com',
            'occasion' => 'Birthday',
            'action' => 'Done',
        ]);

        BookTable::create([
            'people' => '1',
            'date' => '2022-02-10',
            'time' => '18.30',
            'seatingType' => 'Standard',
            'firstName' => 'Sandil',
            'lastName' => 'Hasith',
            'phone' => '0728563418',
            'email' => 'sandil@gmail.com',
            'occasion' => 'Anniversary',
            'action' => 'Pending',
        ]);

        BookTable::create([
            'people' => '3',
            'date' => '2022-10-03',
            'time' => '19.30',
            'seatingType' => 'Out Door',
            'firstName' => 'Pudithya',
            'lastName' => 'Agash',
            'phone' => '0727896544',
            'email' => 'pudithya@gmail.com',
            'occasion' => 'Date',
            'action' => 'Confirm',
        ]);

        BookTable::create([
            'people' => '5',
            'date' => '2022-08-05',
            'time' => '15.00',
            'seatingType' => 'High Top',
            'firstName' => 'Lakshmitha',
            'lastName' => 'Pramith',
            'phone' => '0718523217',
            'email' => 'lakshmitha@gmail.com',
            'occasion' => 'Special Occasion',
            'action' => 'Cancelled',
        ]);

        BookTable::create([
            'people' => '7',
            'date' => '2022-05-10',
            'time' => '16.00',
            'seatingType' => 'Counter',
            'firstName' => 'Chanmira',
            'lastName' => 'Chenushka',
            'phone' => '0714444572',
            'email' => 'chanmira@gmail.com',
            'occasion' => 'Business Meal',
            'action' => 'Done',
        ]);

        BookTable::create([
            'people' => '9',
            'date' => '2022-06-14',
            'time' => '17.00',
            'seatingType' => 'Standard',
            'firstName' => 'Sadil',
            'lastName' => 'Chaneth',
            'phone' => '0768462416',
            'email' => 'sadil@gmail.com',
            'occasion' => 'Birthday',
            'action' => 'Pending',
        ]);

        BookTable::create([
            'people' => '11',
            'date' => '2022-02-13',
            'time' => '18.30',
            'seatingType' => 'Out Door',
            'firstName' => 'Sathmal',
            'lastName' => 'Bosilu',
            'phone' => '0716548529',
            'email' => 'sathmal@gmail.com',
            'occasion' => 'Anniversary',
            'action' => 'Confirm',
        ]);

        BookTable::create([
            'people' => '13',
            'date' => '2022-07-17',
            'time' => '18.00',
            'seatingType' => 'High Top',
            'firstName' => 'Sanjaya',
            'lastName' => 'Bashitha',
            'phone' => '0779517534',
            'email' => 'sanjaya@gmail.com',
            'occasion' => 'Date',
            'action' => 'Cancelled',
        ]);

        BookTable::create([
            'people' => '4',
            'date' => '2022-01-19',
            'time' => '19.00',
            'seatingType' => 'Standard',
            'firstName' => 'Siva',
            'lastName' => 'Madhi',
            'phone' => '0718585749',
            'email' => 'siva@gmail.com',
            'occasion' => 'Business Meal',
            'action' => 'Confirm',
        ]);
        ]);
    }
}
