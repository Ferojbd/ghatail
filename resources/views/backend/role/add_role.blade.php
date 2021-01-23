@extends('backend.layout.master')
@section('head')
   
@endsection
@section('content')
      <section class="md:w-full lg:w-full xl:w-full">
         <div class="bg-gray-800 pt-3">
                <div class=" bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h3 class="font-bold pl-2">ADD ROLE</h3>
                </div>
            </div>
       <div class="p-5 m-5 bg-white text-gray-700 shadow-lg">
            <div class="flex">
               <div class="w-2/4">
                   <h1 class="font-bold text-2xl">ADD ROLE</h1>
               </div>
               <div class="w-2/4 text-right">
                   <a class="bg-gray-500 py-2 px-4 border-gray-500 rounded text-gray-100" href="{{route('role')}}"><i class="fas fa-undo"></i> BACK</a>
               </div>
            </div>
             <form action="{{route('add-role-action')}}" method="POST">
                @csrf
                  <div class="sm:w-full md:w-full lg:w-1/2 xl:w-1/2 m-2">
                        <label for="role" class="block">Role</label>
                        <input type="text" required class="w-full py-2 mt-2 border-2 border-gray-200 rounded px-2" name="role" id="role" placeholder="Enter role">
                        <button type="submit" class="py-1 my-4 px-5 bg-green-400 text-green-600 border-2 border-green-400 rounded">SUBMIT</button>
                    </div>
             </form>
        </div>


           
    </section>    

@endsection

@section('script')
 
    
@endsection