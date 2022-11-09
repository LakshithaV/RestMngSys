<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('foodname');
            $table->enum('status', ['available', 'unavailable']);
            $table->integer('price');
            $table->string('description');
            $table->enum('category',['dessert', 'cake', 'pizza', 'lunch', 'breakfast']);
            $table->integer('quantity');
            $table->integer('alert_stock')->default('50');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_items');
    }
};
