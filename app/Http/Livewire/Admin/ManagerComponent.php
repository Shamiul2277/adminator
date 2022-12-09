<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ManagerComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.manager-component')->layout( 'layouts/admin' );
    }
}
