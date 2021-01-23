@extends('backend.layout.master')
@section('head')
     
@endsection
@section('content')
      <section class="md:w-full lg:w-full xl:w-full">
         <div class="bg-gray-800 pt-3">
                <div class=" bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h3 class="font-bold pl-2">APPEARENCE</h3>
                </div>
            </div>
       <div class="p-5 m-5 bg-white text-gray-700 shadow-lg">
            <div class="flex">
               <div class="w-2/4">
                   <h1 class="font-bold text-2xl">ALL APPEARENCE</h1>
               </div>
            </div>
             <div class="flex flex-col mt-4">
                 <form action="{{route('create-permission')}}" method="POST">
                    @csrf
                     <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                         <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                             @if ($users)
                                <div class="my-5">
                                    <select class="py-1 px-2 border-2 border-gray-500 rounded" name="user_id" id="user_id">
                                       @foreach ($users as $item)
                                         <option value="">--Select User--</option>
                                         <option value="{{$item->id}}">{{$item->name}}</option>
                                           
                                       @endforeach
                                    </select>
                                </div>
                                 
                             @endif
                             <div>
                                 <label class="inline-flex items-center">
                                     <input type="checkbox" name="permission[]" class="form-checkbox" value="edit_user">
                                     <span class="ml-2">Edit User</span>
                                 </label>
                             </div>
                             <div>
                                 <label class="inline-flex items-center">
                                     <input type="checkbox" name="permission[]" class="form-checkbox" value="delete_user">
                                     <span class="ml-2">Delete User</span>
                                 </label>
                             </div>
                             
                         </div>
                     </div>
                     <div>
                         <button type="submit" class="px-10 mt-5 py-1 bg-gray-800 text-white shadow-md rounded-full">SUBMIT</button>
                     </div>
                 </form>
                </div>

        </div>
      

           
    </section>    

@endsection
@section('script')
   
@endsection