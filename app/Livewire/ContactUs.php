<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Page;

class ContactUs extends Component
{
    public function render()
    {
        $pages = Page::orderBy('title', 'ASC')->get();
        return view('livewire.contact-us', [
            'pages' => $pages
        ]);
    }
}
