<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class LoadData extends Component
{
    public $category;
    public $editcat;

    
   
    public function editCategory($id){
        $cat = Category::findOrFail($id);
        $this->editcat = $cat->category;
    }
         
    public function deleteCategory($id)
    {
        
       $cat = Category::findOrFail($id);
       $cat->delete();
       session()->flash('message', 'Category deleted successfully.');
       
    }

    public function render()
    {
        $this->category = Category::all();
        return view('livewire.load-data');
    }
}
