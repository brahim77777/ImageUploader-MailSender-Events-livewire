<?php

namespace App\Http\Livewire;


use Livewire\Component;

class Images extends Component
{
    public $image;
    protected $listeners = ['refreshFriend'];

    public function refreshFriend(){
        //
    }

    public function hydrateImage(){
        //
    }
    public function render()
    {
        return view('livewire.images');
    }
}
