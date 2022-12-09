<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class OrderManageComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.order-manage-component')->layout( 'layouts/admin' );
    }
}
