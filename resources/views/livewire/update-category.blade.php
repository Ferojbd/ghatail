<div>
        <form wire:submit.prevent="submit" class="mt-5">
            <div class="lg:flex xl:flex">
                <div class="sm:w-full">
                    <label for="category" class="block">Category</label>
                    <input type="text" class="w-full py-2 mt-2 border-2 border-gray-200 rounded px-2" value="$cat->category" name="category" id="category" placeholder="Enter category">
                </div>              
            </div>             
            <button type="submit" class="py-1 mt-5 px-5 border-2 bg-green-400 border-green-400 text-white font-semibold shadow-lg">SUBMIT</button>
    </form>
</div>
