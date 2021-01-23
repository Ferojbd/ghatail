<div>
    @if (session()->has('message'))
            <div class="p-2 bg-green-400 text-white shadow-md">
                {{ session('message') }}
            </div>
        @endif
        <form wire:submit.prevent="submit" class="mt-5">           
                    <div class="">
                        <div class="sm:w-full">
                            <label for="category" class="block">Category</label>
                            <input type="text"  class="input-cat w-full py-2 mt-2 border-2 border-gray-200 rounded px-2" wire:model="category" required placeholder="Enter category">
                            @error('name') <span class="error">{{ $message }}</span> @enderror
                        </div>              
                        <div class="sm:w-full">
                             @if ($alcategory->count() > 0)
                                            <select  wire:model="parent_id" class="p-2 mt-2 w-full border-2 border-gray-200 rounded">
                                                    <option selected>--Parent--</option>
                                                    @foreach($alcategory as $item)
                                                            <option value="({{$item->id}})">{{$item->category}}</option> 
                                                    @endforeach          
                                            </select> 
                                    @endif
                            @error('name') <span class="error">{{ $message }}</span> @enderror
                        </div>              
                    </div>             
                    <button type="submit" class="py-1 mt-5 px-5 border-2 bg-green-400 border-green-400 text-white font-semibold shadow-lg">SUBMIT</button>
         </form>
</div>
