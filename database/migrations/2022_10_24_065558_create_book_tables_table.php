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
        Schema::create('book_tables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->enum('people', ['1', '2', '3', '4','5','6','7','8','9','10','11','12','13','14','15']);
            $table->string('date');
            $table->enum('time',['15.00','15.30','16.00','16.30','17.00','17.30','18.00','18.30','19.00','19.30','20.00','20.30','21.00','21.30','22.00','22.30','23.00']);
            $table->enum('seatingType', ['Standard', 'Outdoor', 'High top', 'Counter']);
            $table->string('firstName');
            $table->string('lastName');
            $table->string('phone');
            $table->string('email');
            $table->enum('occasion', ['Birthday', 'Anniversary', 'Date', 'Special Occasion', 'Business Meal'])->nullable();
            $table->string('request')->nullable();
            $table->enum('action', ['Pending', 'Confirm', 'Cancelled', 'Done']);
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_tables');
    }
};
