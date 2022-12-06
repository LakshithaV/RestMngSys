<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Table;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Table::create([
            'TableType' => 'Standard',
            'status' => 'Available',
        ]);

        Table::create([
            'TableType' => 'Standard',
            'status' => 'Available',
        ]);

        Table::create([
            'TableType' => 'Standard',
            'status' => 'Available',
        ]);

        Table::create([
            'TableType' => 'Standard',
            'status' => 'Available',
        ]);

        Table::create([
            'TableType' => 'Standard',
            'status' => 'Available',
        ]);

        Table::create([
            'TableType' => 'Standard',
            'status' => 'Available',
        ]);

        Table::create([
            'TableType' => 'Outdoor',
            'status' => 'Available',
        ]);

        Table::create([
            'TableType' => 'High top',
            'status' => 'Available',
        ]);

        Table::create([
            'TableType' => 'High top',
            'status' => 'Available',
        ]);

        Table::create([
            'TableType' => 'Counter',
            'status' => 'Available',
        ]);

        Table::create([
            'TableType' => 'Counter',
            'status' => 'Available',
        ]);

        Table::create([
            'TableType' => 'Counter',
            'status' => 'Available',
        ]);

        Table::create([
            'TableType' => 'Counter',
            'status' => 'Available',
        ]);

        Table::create([
            'TableType' => 'Outdoor',
            'status' => 'Available',
        ]);

        Table::create([
            'TableType' => 'Outdoor',
            'status' => 'Available',
        ]);

        Table::create([
            'TableType' => 'Standard',
            'status' => 'Available',
        ]);
    }
}
