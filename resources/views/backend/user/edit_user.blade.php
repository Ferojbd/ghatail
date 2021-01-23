@extends('backend.layout.master')
@section('content')
      <section class="md:w-full lg:w-full xl:w-full">
         <div class="bg-gray-800 pt-3">
                <div class=" bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h3 class="font-bold pl-2">EDIT USER</h3>
                </div>
            </div>
       <div class="p-5 m-5 bg-white text-gray-700 shadow-lg">
            <div class="flex">
               <div class="w-2/4">
                   <h1 class="font-bold text-2xl">EDIT USER</h1>
               </div>
               <div class="w-2/4 text-right">
                   <a class="bg-gray-500 py-2 px-4 border-gray-500 rounded text-gray-100" href="{{route('user')}}"><i class="fas fa-undo"></i> BACK</a>
               </div>
            </div>
            @if ($user)
                
            <form action="{{route('edit-user-action')}}" method="POST" class="mt-5">
                @csrf
                <div class="lg:flex xl:flex">
                    <div class="sm:w-full md:w-full lg:w-1/2 xl:w-1/2 m-2">
                        <input type="hidden" name="id"  value="{{$user->id}}">
                        <label for="user_name" class="block">Name</label>
                        <input type="text" class="w-full py-2 mt-2 border-2 border-gray-200 rounded px-2" value="{{$user->name}}" name="name" id="name" placeholder="Enter your name">
                    </div>
                    <div class="sm:w-full md:w-full lg:w-1/2 xl:w-1/2 m-2">
                        <label for="email" class="block">Email</label>
                        <input type="email" class="w-full py-2 mt-2 border-2 border-gray-200 rounded px-2" value="{{$user->email}}" name="email" id="email" placeholder="example@gmail.com">
                    </div>
                </div>
                <div class="lg:flex xl:flex">
                    <div class="sm:w-full md:w-full lg:w-1/2 xl:w-1/2 m-2">
                        <label for="user_name" class="block">Phone</label>
                        <input type="text" class="w-full py-2 mt-2 border-2 border-gray-200 rounded px-2" value="{{$user->phone}}" name="phone" id="phone" placeholder="Enter your name">
                    </div>
                    <div class="sm:w-full md:w-1/2 lg:1/2 xl:1/2 mt-4">
                            <label for="ex-multiselect" class="block">Role</label>
                            <select id="ex-multiselect" multiple name="role[]" class="p-2 w-full border-2 border-gray-200 rounded">
                                @if ($role)
                                    @foreach($role as $item)
                                            <option value="{{$item->id}}">{{$item->role}}</option> 
                                    @endforeach
                                @endif
                        </select>
                     </div>  >
                </div>
                <div class="lg:flex xl:flex">
                    <div class="sm:w-full md:w-full lg:w-1/2 xl:w-1/2 m-2">
                        <label for="user_name" class="block">Password</label>
                        <input type="password" class="w-full py-2 mt-2 border-2 border-gray-200 rounded px-2" name="password" id="password" placeholder="********">
                    </div>
                    <div class="sm:w-full md:w-full lg:w-1/2 xl:w-1/2 m-2">
                        <label for="email" class="block">Confirm password</label>
                        <input type="password" class="w-full py-2 mt-2 border-2 border-gray-200 rounded px-2" name="password_confirmation" id="password" placeholder="********">
                    </div>
                </div>
                <button class="py-1 mt-5 px-5 border-2 ml-2 bg-green-400 border-green-400 text-white font-semibold shadow-lg">SUBMIT</button>
            </form>
            @endif
        </div>


           
    </section>    

@endsection
@section('script')
    <script>
         $('#ex-multiselect').picker();
    </script>
@endsection
@section('head')
    <style>
        #ex-multiselect{
            /* padding: 5px 10px;
            border: 1px solid red;
            width: 100%;            */
        }
        .picker{
            padding: 4px 10px;
            background: lightgray;
        }
        .pc-element{
            border-radius: 20px !important;
            margin-top: 4px;
            background: white;
            border: 1px solid transparent !important;
        }
        .pc-close{
            font-size: 10px !important;
            margin-top: -7px !important;
        }
    </style>
@endsection