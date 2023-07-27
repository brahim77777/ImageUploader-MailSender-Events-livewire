<div class="text-center">
    Counter => {{$counter}}
        <form action="/store" method="post" class="bg-gray-300 flex flex-col p-10 items-center" enctype="multipart/form-data" wire:submit.prevent="check">
            @csrf
            <input wire:model="image" type="file" name="files"  id="file" class="cursor-pointer">
            @error ('file')

                <li class="text-red-400 p-3">{{ $message }}</li>

            @endif
            <input wire:click="fire" type="submit" value="Upload" class="cursor-pointer w-20 bg-green-400 py-5 my-4">
        </form>
</div>