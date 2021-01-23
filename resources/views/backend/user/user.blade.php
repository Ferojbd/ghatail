@extends('backend.layout.master')
@section('content')
      <section class="md:w-full lg:w-full xl:w-full">
         <div class="bg-gray-800 pt-3">
                <div class=" bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h3 class="font-bold pl-2">USER</h3>
                </div>
            </div>
       <div class="p-5 m-5 bg-white text-gray-700 shadow-lg">
            <div class="flex">
               <div class="w-2/4">
                   <h1 class="font-bold text-2xl">ALL USERS</h1>
               </div>
               <div class="w-2/4 text-right">
                   <a class="bg-blue-500 py-2 px-4 border-gray-400 rounded text-gray-100" href="{{route('add-user')}}"><i class="fas fa-plus"></i> ADD USER</a>
               </div>
             
            </div>
             <div class="flex flex-col mt-4">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Registered
                            </th>
                            {{-- <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Status
                            </th> --}}
                            {{-- <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                               Status
                            </th> --}}
                            <th scope="col" class="relative text-left px-6 py-3 text-xs font-medium text-gray-500 tracking-wider">
                                Action
                            </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @if ($users)
                              @foreach($users as $user)
                                <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                    {{-- <div class="flex-shrink-0 h-10 w-10">
                                        <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="">
                                    </div> --}}
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                        {{$user->name}}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                        {{$user->email}}
                                        </div>
                                    </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-500">{{$user->created_at}}</div>
                                </td>
                                {{-- <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                   {{$user->status}}
                                    </span>
                                </td> --}}
                                {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 uppercase">
                                   {{$user->status}}
                                </td> --}}
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-left">
                                    {{-- <a href="{{route('edit-user', $user->id)}}" class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-edit"></i></a> --}}
                                    <a href="{{route('delete-user', $user->id)}}" class="text-red-600 hover:text-indigo-900"><i class="fas fa-trash"></i></a>
                                </td>
                                </tr>

                              @endforeach  
                            @endif

                            <!-- More rows... -->
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>

        </div>


           
    </section>    

@endsection