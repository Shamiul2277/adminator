<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

// use Illuminate\Support\Facades\Session;
class ProductsComponent extends Component

{
    use WithFileUploads;
           public $name;
           public $slug;
           public $short_description;
           public $description;
           public $regular_price;
           public $sell_price;
           public $buy_price;
           public $addons;
           public $SKU;
           public $quantity;
           public $featured;
           public $stock_status;
           public $image;
           public $images;
           public $category_id;

        public function updated($fields){
            $this->validateOnly($fields, [
                'name'=>'required|min:4',
                'slug'=>'required|min:4' ,
                'image'=>'image|max:5120',
                // 'short_description'='',
                // 'description'='',
                // 'regular_price'='',
                // 'sell_price'='',
                // 'buy_price'='',
                // 'addons'='',
                // 'SKU'='',
                // 'quantity'='',
                // 'featured'='',
                // 'stock_status'='',
                // 'image'='',
                // 'images'='',
                // 'category_id'=''
            ]);
        }

        public function generateSlug(){
            $this->slug = Str::slug($this->name);
        }
    public function storeProducts(){
        $product =new Product();

        // name
        // slug
        // short_description
        // description
        // regular_price
        // sell_price
        // buy_price
        // addons
        // SKU
        // quantity
        // featured
        // stock_status
        // image
        // images
        // category_id


        $this->validate([
            'name'=>'required|min:4',
                'slug'=>'required|min:4' ,
                'image'=>'image|max:5120',
                // 'short_description'='',
                // 'description'='',
                // 'regular_price'='',
                // 'sell_price'='',
                // 'buy_price'='',
                // 'addons'='',
                // 'SKU'='',
                // 'quantity'='',
                // 'featured'='',
                // 'stock_status'='',
                // 'image'='',
                // 'images'='',
                // 'category_id'=''
        ]);

        $image=$this->image->store('products');

        $product->name  =   $this->name;
        $product->slug  =   $this->slug;
        $product->short_description =   $this->short_description;
        $product->description   =   $this->description;
        $product->regular_price =   $this->regular_price;
        $product->sell_price    =   $this->sell_price;
        $product->buy_price =   $this->buy_price;
        $product->addons    =   $this->addons;
        $product->SKU   =   $this->SKU;
        $product->quantity  =   $this->quantity;
        $product->featured  =   $this->featured;
        $product->stock_status  =   $this->stock_status;
        $product->image =   $image;
        $product->images    =   $this->images;
        $product->category_id   =   $this->category_id;


        $product -> save();

        Session()->flash('message', 'Product Created Successfully...!');
        $this->resetProduct();

    }
    public function resetProduct(){
        $this->name='';
        $this->slug='';
        $this->short_description='';
        $this->description='';
        $this->regular_price='';
        $this->sell_price='';
        $this->buy_price='';
        $this->addons='';
        $this->SKU='';
        $this->quantity='';
        $this->featured='';
        $this->stock_status='';
        $this->image='';
        $this->images='';
        $this->category_id='';
    }
    public function render()
    {
        $product = Product::all();
        return view('livewire.admin.products-component', ['products'=>$product])->layout( 'layouts/admin' );
    }
}
