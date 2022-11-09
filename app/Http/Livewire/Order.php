<?php

namespace App\Http\Livewire;

use App\Models\MenuItem;
use App\Models\Cart;
use Livewire\Component;

class Order extends Component
{
    public $products = [], $message = '', $product_code = '', $productInCart;
    public $pay_money = '', $balance = '';

    public function mount()
    {
        $this->products = MenuItem::all();
        $this->productInCart = Cart::all();
        
    }

    public function IncrementQty($cartId)
    {
        $carts = Cart::find($cartId);
        $carts->increment('product_qty', 1);
        $updatePrice = $carts->product_qty * $carts->product->price;
        $carts->update(['product_price' => $updatePrice]);
        $this->mount();
    }

    public function DecrementQty($cartId)
    {
        $carts = Cart::find($cartId);
        if($carts->product_qty == 1){
            return session()->flash('info', 'Product ' .$carts->product->foodname .' Quantity can not be less than 1');
        }
        $carts->decrement('product_qty', 1);
        $updatePrice = $carts->product_qty * $carts->product->price;
        $carts->update(['product_price' => $updatePrice]);
        $this->mount();
    }

    public function InserttoCart()
    {
        $countProduct = MenuItem::where('id', $this->product_code)->first();
    
        if (!$countProduct){
            return session()->flash('error', 'Product Not Found');
        }

        $countCartProduct = Cart::where('product_id', $this->product_code)->count();
    
        if ($countCartProduct > 0) {
            return session()->flash('info', 'Product ' .$countProduct->foodname .' alredy exist in cart please add quantity');
        }
        $add_to_cart = new Cart;
        $add_to_cart->product_id = $countProduct->id;
        $add_to_cart->product_qty = 1;
        $add_to_cart->product_price = $countProduct->price;
        $add_to_cart->user_id = auth()->user()->id;
        $add_to_cart->save();

        $this->productInCart->prepend($add_to_cart);

        $this->product_code = '';

        return session()->flash('success', 'Product Added Successfully');

    }   

    public function removeProduct($cartId)
    {
        $deleteCart = Cart::find($cartId);
        $deleteCart->delete();

        return session()->flash('success', 'Product Removed Successfully');

        $this->productInCart = $this->productInCart->except($cartId);
    }


    public function render()
    {
        if($this->pay_money != ''){
            $totalAmount = $this->pay_money - $this->productInCart->sum('product_price');
            $this->balance = $totalAmount;
        }
        return view('livewire.order');
    }
}
