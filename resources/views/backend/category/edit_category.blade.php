@extends('backend.layout.master')
@section('head')
    @livewireStyles
@endsection
@section('content')
      <section class="md:w-full lg:w-full xl:w-full">
         <div class="bg-gray-800 pt-3">
                <div class=" bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h3 class="font-bold pl-2">ADD CATEGORY</h3>
                </div>
            </div>
       <div class="p-5 m-5 bg-white text-gray-700 shadow-lg">
            <div class="flex">
               <div class="w-2/4">
                   <h1 class="font-bold text-2xl">ADD CATEGORY</h1>
               </div>
               <div class="w-2/4 text-right">
                   <a class="bg-gray-500 py-2 px-4 border-gray-500 rounded text-gray-100" href="{{route('category')}}"><i class="fas fa-undo"></i> BACK</a>
               </div>
            </div>
             {{-- @livewire('create-category') --}}
             <div class="shadow-xl form-c mt-4">
                        <form action="{{route('category-action')}}" method="POST" class="">
                            @csrf
                            <div class="">
                                <input type="hidden" class="w-full mr-1  p-1 mb-2 border-2 border-gray-300 rounded" name="id" value="{{$category->id}}" id="id" placeholder="Add new name">
                                <input type="text" class="w-full mr-1  p-1 mb-2 border-2 border-gray-300 rounded" name="category" value="{{$category->category}}" id="category" placeholder="Add new name">
                                {{-- <input type="text" class="w-full mr-1  p-1 mb-2 border-2 border-gray-300 rounded" name="parent_id" value="{{$category->Parent->category}}" id="parent_id" placeholder="Add new name"> --}}
                                    
                            </div>
                            <button type="submit" class="w-full bg-green-400 py-1 mt-2 text-green-700">SUBMIT</button>
                        </form>
                    </div>
             </div>

           
    </section>    

@endsection

@section('script')
 @livewireScripts
    
@endsection