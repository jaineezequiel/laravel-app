<?php

namespace App\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $title;

    public function render()
    {
        return view('livewire.hello-world');
    }
}
