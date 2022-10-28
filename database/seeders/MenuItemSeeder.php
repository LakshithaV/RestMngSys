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
            'foodname' => 'String Hoppers',
            'status' => 'available',
            'price' => '400.00',
            'description' => 'String hoppers with coconut sambal, dhal curry or potato curry',
            'category' => 'breakfast',
            'image' => 'stringhoppers.jpg',
            'quantity' => '80',
            'alert_stock' => '50',
        ]);

        MenuItem::create([
            'foodname' => 'Coconut Roti',
            'status' => 'available',
            'price' => '400.00',
            'description' => 'Coconut roti with coconut sambal, dhal curry or potato curry',
            'category' => 'breakfast',
            'image' => 'coconutroti.jpg',
            'quantity' => '100',
            'alert_stock' => '50',
        ]);

        MenuItem::create([
            'foodname' => 'Noodles',
            'status' => 'available',
            'price' => '400.00',
            'description' => 'Vege noodles with fried egg ',
            'category' => 'breakfast',
            'image' => 'noodles.jpg',
            'quantity' => '25',
            'alert_stock' => '20',
        ]);
        
        MenuItem::create([
            'foodname' => 'Coffee',
            'status' => 'available',
            'price' => '100.00',
            'description' => 'Black coffee',
            'category' => 'breakfast',
            'image' => 'coffee.jpg',
            'quantity' => '25',
            'alert_stock' => '20',
        ]);
        

        MenuItem::create([
            'foodname' => 'Sandwitches',
            'status' => 'available',
            'price' => '150.00',
            'description' => 'Sanwitches with bacon,vegies and cheese',
            'category' => 'breakfast',
            'image' => 'sandwich.jpg',
            'quantity' => '60',
            'alert_stock' => '40',
        ]);

        MenuItem::create([
            'foodname' => 'Rice & Chicken Curry',
            'status' => 'available',
            'price' => '450.00',
            'description' => 'Rice with chicken curry, dhal curry,coconut sambal, vegetable salad and papadam',
            'category' => 'lunch',
            'image' => 'rice.jpg',
            'quantity' => '30',
            'alert_stock' => '15',
        ]);

        MenuItem::create([
            'foodname' => 'Rice & Prawn Curry',
            'status' => 'available',
            'price' => '450.00',
            'description' => 'Rice with prawn curry, dhal curry,coconut sambal, vegetable salad and papadam',
            'category' => 'lunch',
            'image' => 'prawn.jpg',
            'quantity' =>  '28',
            'alert_stock' => '15',
        ]);

        MenuItem::create([
            'foodname' => 'Rice & Fish Curry',
            'status' => 'available',
            'price' => '500.00',
            'description' => 'Rice with Fish curry, dhal curry,coconut sambal, vegetable salad and papadam',
            'category' => 'lunch',
            'image' => 'fish.jpg',
            'quantity' => '25',
            'alert_stock' => '15',
        ]);

        MenuItem::create([
            'foodname' => 'Egg Fried Rice',
            'status' => 'available',
            'price' => '500.00',
            'description' => 'Egg fried rice with chillie paste and tomato sauce',
            'category' => 'lunch',
            'image' => 'eggrice.jpg',
            'quantity' => '20',
            'alert_stock' => '15',
        ]);

        MenuItem::create([
            'foodname' => 'Chicken Fried Rice',
            'status' => 'available',
            'price' => '550.00',
            'description' => 'Chicken fried rice with chicken curry, chillie paste and tomato sauce',
            'category' => 'lunch',
            'image' => 'chickenrice.jpg',
            'quantity' => '20',
            'alert_stock' => '15',
        ]);
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

        MenuItem::create([
            'foodname' => 'Cheese Pizza',
            'status' => 'available',
            'price' => '890.00',
            'description' => 'Rich tomato sauce with a triple layer of mozzarella cheese',
            'category' => 'pizza',
            'image' => 'Cheesepizza1.jpg',
            'quantity' => '13',
            'alert_stock' => '10',
        ]);
        MenuItem::create([
            'foodname' => 'Spicy Chicken Pizza',
            'status' => 'available',
            'price' => '900.00',
            'description' => 'Spicy chunks of chicken, capsicums & onions with a double layer of cheese',
            'category' => 'pizza',
            'image' => 'spicychicken.jpg',
            'quantity' => '17',
            'alert_stock' => '10',
        ]);

        MenuItem::create([
            'foodname' => 'Sausage Delight Pizza',
            'status' => 'available',
            'price' => '850.00',
            'description' => 'Chicken sausages & onions with a double layer of cheese',
            'category' => 'pizza',
            'image' => 'sausage.jpg',
            'quantity' => '12',
            'alert_stock' => '10',
        ]);

        MenuItem::create([
            'foodname' => 'Veggie Pizza',
            'status' => 'available',
            'price' => '800.00',
            'description' => 'Mushrooms,tomatoes, onions, black olives and bell peppers with a double layer of mozzarella cheese',
            'category' => 'pizza',
            'image' => 'veggie.jpg',
            'quantity' => '20',
            'alert_stock' => '10',
        ]);

        MenuItem::create([
            'foodname' => 'Cheese Cake',
            'status' => 'available',
            'price' => '300.00',
            'description' => 'With lot of flavors like Classic, Starwberry, Blueberry, Mango, Oreo, Caramel, Chocolate',
            'category' => 'cake',
            'image' => 'cheesecake.jpg',
            'quantity' => '70',
            'alert_stock' => '40',
        ]);
        MenuItem::create([
            'foodname' => 'Cup Cake',
            'status' => 'available',
            'price' => '150.00',
            'description' => 'With lot of flavors like Starwberry, Blueberry, Lemon, Oreo, Chocolate, Red violet',
            'category' => 'cake',
            'image' => 'cupcake.jpg',
            'quantity' => '60',
            'alert_stock' => '30',
        ]);

        MenuItem::create([
            'foodname' => 'Lava Cake',
            'status' => 'available',
            'price' => '350.00',
            'description' => 'Slightly crunchy crust with warm liquid chocolate center',
            'category' => 'cake',
            'image' => 'lavacake.jpg',
            'quantity' => '40',
            'alert_stock' => '30',
        ]);
        
        MenuItem::create([
            'foodname' => 'Gateau Cake',
            'status' => 'available',
            'price' => '250.00',
            'description' => 'Cake layered with different flavors cream filling such as pineapple, chocolate, strawberry, Coffee, Black forest',
            'category' => 'cake',
            'image' => 'gateau.jpg',
            'quantity' => '30',
            'alert_stock' => '10',
        ]);

        MenuItem::create([
            'foodname' => 'Ice cream',
            'status' => 'available',
            'price' => '250.00',
            'description' => 'with flavors chocolate, vanila, strawberry, blueberry, fruit and nut',
            'category' => 'dessert',
            'image' => 'icecream.jpg',
            'quantity' => '40',
            'alert_stock' => '20',
        ]);

        MenuItem::create([
            'foodname' => 'Fruit Salad',
            'status' => 'available',
            'price' => '300.00',
            'description' => 'Pineapple, mango, grapes, banana, dragon fruit, strawberry with honey and lime',
            'category' => 'dessert',
            'image' => 'fruit.jpg',
            'quantity' => '30',
            'alert_stock' => '10',
        ]);

        MenuItem::create([
            'foodname' => 'Pudding',
            'status' => 'available',
            'price' => '200.00',
            'description' => 'with flavors chocolate, vanila, custard, caramel',
            'category' => 'dessert',
            'image' => 'pudding.jpg',
            'quantity' => '20',
            'alert_stock' => '10',
        ]);

        MenuItem::create([
            'foodname' => 'Brownie',
            'status' => 'available',
            'price' => '300.00',
            'description' => 'Brownnies with strawberry and icecream',
            'category' => 'dessert',
            'image' => 'brown.jpg',
            'quantity' => '18',
            'alert_stock' => '10',
        ]);

        MenuItem::create([
            'foodname' => 'Fresh Fruits',
            'status' => 'available',
            'price' => '150.00',
            'description' => 'Pineapple, Strawberry, Mango, Watermelon, Grapes',
            'category' => 'dessert',
            'image' => 'freshfruit.jpg',
            'quantity' => '20',
            'alert_stock' => '10',
        ]);

        MenuItem::create([
            'foodname' => 'Watalappan',
            'status' => 'available',
            'price' => '200.00',
            'description' => 'Creamy coconut custard sweetened with traditional kitul jaggery',
            'category' => 'dessert',
            'image' => 'watalappan.jpg',
            'quantity' => '30',
            'alert_stock' => '10',
        ]);



    }
}
