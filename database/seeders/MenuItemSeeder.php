<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\MenuItem;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MenuItem::create([
            'foodname' => 'Margherita Pizza',
            'status' => 'available',
            'price' => '800.00',
            'description' => 'Italian Pizza Dough, Original Italian Tomato sauce, Mozzarella, Cheese, Basil',
            'category' => 'pizza',
            'image' => 'MargheritaPizza.jpg',
            'quantity' => '15',
            'alert_stock' => '10',
        ]);

    }
}
