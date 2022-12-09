<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ShopComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.shop-component')->layout( 'layouts/admin' );
    }
}
