<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Gloudemans\Shoppingcart\Cart;
class HeaderCartWishComponent extends Component

{

    public function store($product_id, $product_name, $product_quantity, $product_price){
        Cart::instance('cart')->add($product_id, $product_name, $product_quantity, $product_price )->associate('App\Models\Product');
      //  session_flash->('success', 'cart Item Added Successfully');
    }


    public function increment($row_id){
        $product= Cart::instance('cart')->get($row_id);
        $qty= $product->qty+1;
        Cart::instance('cart')->update($row_id,$qty);

    }
    public function decrement($row_id){

        $product= Cart::instance('cart')->get($row_id);
        $qty= $product->qty-1;
        Cart::instance('cart')->update($row_id,$qty);

    }
    public function delete($row_id){
        Cart::instance('cart')->remove($row_id);

    }
    protected $listeners = ['refreshCartlist'=> '$refresh'];
    public function render()
    {
        return view('livewire.header-cart-wish-component');
    }
}
