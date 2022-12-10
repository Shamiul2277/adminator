<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Livewire\WithPagination;

class CategoryComponent extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $category_id;
    public $category;
    public $slug;
    public $banner;

    public function updated($fields){
        $this->validateOnly($fields, [
            'category'=>'required|min:4',
            'slug'=>'required|min:4' ,
            'banner'=>'image|max:20480'
        ]);
    }

    public function generateSlug(){
        $this->slug = Str::slug($this->category);
    }
    public function refreshContent(){
        $this->Category_id='';
        $this->Category='';
        $this->slug='';
        $this->banner='';
    }
    public function storecategory()
    {
        $this->validate([
            'category'=>'required|min:4',
            'slug'=>'required|min:4' ,
            'banner'=>'image|max:20480'
        ]);

        $banner=$this->banner->store('photos');
        $category= new Category();

        $category->category= $this->category;
        $category->slug= $this->slug;
        $category->banner= $banner;

        $category->save();

        Session::flash('message', 'Category Created Successfully...!');
        $this->refreshContent();

    }
    public function updateCategory()
    {
        $this->validate([
            'category'=>'required|min:4',
            'slug'=>'required|min:4' ,
            'banner'=>'image|max:20480'
        ]);

        $banner=$this->banner->store('photos');
        $category=Category::find($this->category_id);

        $category->category= $this->category;
        $category->slug= $this->slug;
        $category->banner= $banner;

        $category->save();

        Session::flash('message', 'Category Updated Successfully...!');
        $this->refreshContent();

    }
    public function render()
    {
        $categories= Category::all();
        return view('livewire.admin.category-component',['categories'=>$categories])->layout( 'layouts/admin' );
    }
}
