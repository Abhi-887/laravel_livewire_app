<?php
namespace App\Livewire;

use App\Models\Category;
use App\Models\Testimonial;
use Livewire\Component;

class ShowHome extends Component
{
    public function render()
    {
        // Fetch all categories
        $categories = Category::all();
        $testimonials = Testimonial::all();

        return view('livewire.show-home', [
            'categories' => $categories,
            'testimonials' => $testimonials,
        ]);


    }
}
