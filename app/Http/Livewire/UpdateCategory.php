<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class UpdateCategory extends Component
{
    public $cat;



    public function render($id)
    {
        $cat = Category::findOrFail($id);
        return view('livewire.update-category');
    }
}
