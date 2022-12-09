<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
// use App\View\Components\AppLayout;

class DashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard-component')->layout( 'layouts/admin' );
    }
}
