<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Service;

class ShowServices extends Component
{
    public function render()
    {
        $services = Service::orderBy('name', 'ASC')->get();
        return view('livewire.show-services', [
            'services' => $services
        ]);
    }
}
