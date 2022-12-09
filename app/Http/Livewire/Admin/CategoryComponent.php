<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;
class CategoryComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $slug;
    public $banner;
    public function storecategory()
    {
        $this->validate([
            'title' => 'required|min:4',
            'slug' => 'min:4',
            'banner' => 'image|max:1024', // 1MB Max
        ]);
    }
    public function render()
    {
        $categories= Category::all();
        return view('livewire.admin.category-component',['categories'=>$categories])->layout( 'layouts/admin' );
    }
}
