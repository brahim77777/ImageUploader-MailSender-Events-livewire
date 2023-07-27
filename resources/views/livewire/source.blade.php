<div class="flex ">
@foreach($images as $image) 
                <p>{{$loop->index}}</p>
                @livewire('images' , ['image'=>$image])
@endforeach
</div>