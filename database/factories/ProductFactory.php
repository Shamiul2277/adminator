<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {   
        $product_name = $this->faker->unique()->words($nb= 6, $asText= true);
        $slug = Str::slug($product_name,'-');
        return [            
           'name' => $product_name,
           'slug' => $slug,
           'short_description' => $this->faker->text(200),
           'description' => $this->faker->text(500)  ,
           'regular_price' => $this->faker->numberBetween(10,500)     ,
           'sell_price' => $this->faker->numberBetween(10,500)      ,
           'buy_price' => $this->faker->numberBetween(10,500)      ,
           'addons' => $this->faker->text(60)    ,
           'SKU' => $this->faker->text(6).'-'.$this->faker->numberBetween(100,500).'-'. $this->faker->text(6).'-'.$this->faker->numberBetween(100,500)     ,
           'quantity' => $this->faker->numberBetween(10,50)    ,
         //  'featured' => 'false'    ,          
           'stock_status' =>  'instock' ,
           'image' => 'Product-'.$this->faker->numberBetween(1,30)    ,
           'images' => 'Product-'.$this->faker->numberBetween(1,30)     ,
           'category_id' => $this->faker->numberBetween(1,6)    
        ];
    }
}
