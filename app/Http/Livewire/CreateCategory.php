<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CreateCategory extends Component
{
    public $category;
    public $alcategory;
    protected $rules = [
        'category' => 'required',
    ];


    public function submit()

    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

        Category::create([
            'category' => $this->category,
            'parent_id' => $this->parent_id,
        ]);
        $this->category = "";
        session()->flash('message', 'Post successfully updated.');
        return redirect()->route('category');
    }

    public function render()
    {
        $this->alcategory = Category::all();
        return view('livewire.create-category');;
    }
}
