<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
// use Gloudemans\Shoppingcart\Cart as ShoppingcartCart;
// use Gloudemans\Shoppingcart\Facades\Cart;
//use Cart;
use Livewire\Component;
use Gloudemans\Shoppingcart\Cart;
use Livewire\WithPagination;



class ShopComponent extends Component
{
    use WithPagination;

    public $min_value=0;
    public $max_value=1000;
    // public function mount($min_value, $max_value){
    //     $this->min_value= $min_value;
    //     $this->max_value= $max_value;
    // }

    public $pageSize=12;
    public $oderByProducts='Default Shorting';

    public function store($product_id,$product_name,$product_quantity ,$product_price){

        Cart::instance('cart')->add($product_id,$product_name,$product_quantity,$product_price)->associate('App\Models\Product');
        session()->flash('success_messane','Product Added into Cart Successfully...!');
        return redirect()-> route('shop.cart');
        $this->emitTo('minicart-component', 'refreshCartlist');
    }
    public function changPagesize($sige){
        $this->pageSize=$sige;
    }
    public function orderProducts($orderby){
        $this->oderByProducts=$orderby;
    }
    public function removeWishlist($row_id){
        Cart::instance('wishlist')->remove($row_id);
        $this->emitTo('wishlist-component', 'refreshWishlist');
    }
    public function addWishList($product_id,$product_name,$product_price){
        Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_messane','Product Added into Cart Successfully...!');
        $this->emitTo('wishlist-component', 'refreshWishlist');
    }
    public function render()
    {
        if($this->oderByProducts=='Price: Low To High'){
            $products= Product::whereBetween('sell_price',[$this->min_value, $this->max_value])->orderBy('sell_price', 'ASC')->paginate($this->pageSize);
        }elseif($this->oderByProducts=='Price: High To Low'){
            $products= Product::whereBetween('sell_price',[$this->min_value, $this->max_value])->orderBy('sell_price', 'DESC')->paginate($this->pageSize);
        }elseif($this->oderByProducts=='Short By Newest'){
            $products= Product::whereBetween('sell_price',[$this->min_value, $this->max_value])->orderBy('created_at', 'DESC')->paginate($this->pageSize);
        }else{
            $products= Product::whereBetween('sell_price',[$this->min_value, $this->max_value])->paginate($this->pageSize);
        }


       $nproducts= Product::latest()->take(4)->get();
     //   $categories=Category::all();
    //    $products= Product::paginate($this->pageSize);
        return view('livewire.shop-component',['products'=>$products, 'nproducts'=>$nproducts]);
    }
}

