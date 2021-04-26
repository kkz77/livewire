<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = '';
    public $checkbox = false;
    public $option = ['Hello'];

    public function render()
    {
        return view('livewire.hello-world');
    }
}
