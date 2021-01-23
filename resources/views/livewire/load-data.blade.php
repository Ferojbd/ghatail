<div>
        @if (session()->has('message'))
            <div class="p-2 bg-red-400 text-white shadow-md">
                {{ session('message') }}
            </div>
        @endif
    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>

                            <th scope="col" class="relative text-left px-6 py-3 text-xs font-medium text-gray-500 tracking-wider">
                                Action
                            </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @if ($category)
                                @foreach($category as $item)

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                       
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                            @if (!$editcat)
                                                {{$item->category}}            
                                            @endif    
                                            
                                            </div>
                                           
                                        </div>
                                        </div>
                                    </td>
        
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-left">
                                        {{-- <a href="" wire:click.prevent="editCategory({{$item->id}})" class=" text-indigo-600 hover:text-indigo-900"><i class="fas fa-edit"></i></a> --}}
                                        <a href="{{route('edit-category, $item->id')}}"  class=" text-indigo-600 hover:text-indigo-900"><i class="fas fa-edit"></i></a>
                                        <a href="" wire:click.prevent='deleteCategory({{$item->id}})'  class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-trash text-red-400"></i></a>
                                    </td>
                                
                                </tr>
                                @endforeach
                            @endif

                            <!-- More rows... -->
                        </tbody>
                        </table>
                       
</div>
