<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;

class Source extends Component
{
    public $images;

    protected $listeners = ['refreshFriend'];

    public function refreshFriend(){
        //
    }

    public function mount() {
        $this->images = Image::all();
    }
    public function ref(){
        $this->images = Image::all();
    }

    public function render()
    {
        return view('livewire.source');
    }
}
