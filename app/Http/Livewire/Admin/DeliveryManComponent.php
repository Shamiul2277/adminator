<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class DeliveryManComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.delivery-man-component')->layout( 'layouts/admin' );
    }
}
