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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('short_description')->nullable();
            $table->decimal('regular_price',8,2);
            $table->decimal('sell_price',8,2)->nullable;
            $table->decimal('buy_price',8,2);
            $table->text('addons');
            $table->string('SKU');
            $table->unsignedInteger('quantity')->default(10);
            $table->boolean('featured')->default(false);
            $table->enum('stock_status',['instock','outofstock']);
            $table->string('image');
            $table->text('images')->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('casecade')->onUpdate('casecade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
