<?php

namespace App\Http\Livewire;

use App\Events\NewUpload;
use App\Models\Data;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class ImageUploader extends Component
{
    use WithFileUploads;

    protected $rules = [
        'image' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ];

    public $images;
    public $image; 
    public $counter =0;
    public function mount(){
        $images = Image::all();
    }
    public function hydrateImage(){
        $this->emit('refreshFriend');
    }

    public function check(){
        $this->counter++;
        Data::create(['number'=> rand(1,500)]);
        NewUpload::dispatch();
        $this->validate();
        Image::create(['image_path' =>$this->image->hashName()]);
        Storage::disk('public')->put('/images',$this->image );
        $this->emit('refreshFriend');
    }

    public function fire(){
        // event(new NewUpload());
        // dd('fire');
    }
    public function render()
    {
        return view('livewire.image-uploader');
    }
}
