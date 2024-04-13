<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Service;

use Livewire\Component;

class ShowHome extends Component
{
    public function render()
    {

        $categories = Category::all()->get;
        return view('livewire.show-home', [

        ]);

    }
}
