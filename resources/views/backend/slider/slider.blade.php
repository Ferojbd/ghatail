@extends('backend.layout.master')
@section('head')
     
@endsection
@section('content')
      <section class="md:w-full lg:w-full xl:w-full">
         <div class="bg-gray-800 pt-3">
                <div class=" bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h3 class="font-bold pl-2">SLIDER</h3>
                </div>
            </div>
       <div class="p-5 m-5 bg-white text-gray-700 shadow-lg">
            <div class="flex">
               <div class="w-2/4">
                   <h1 class="font-bold text-2xl">ALL SLIDER</h1>
               </div>
               <div class="w-2/4 text-right">
                   <a class="bg-blue-500 py-2 px-4 border-gray-400 rounded text-gray-100" href="{{route('add-slider')}}"><i class="fas fa-plus"></i> ADD SLIDER</a>
               </div>
               
            </div>
             <div class="flex flex-col mt-4">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
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
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Position
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Status
                                                    </th>

                                                    <th scope="col" class="relative text-left px-6 py-3 text-xs font-medium text-gray-500 tracking-wider">
                                                        Action
                                                    </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                    @if ($slider)
                                                        @foreach($slider as $item)

                                                        <tr>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <div class="flex items-center">
                                                                <img class="w-10 h-10" src="{{asset('/uploads/slider/'.$item->image)}}" alt="">
                                                                <div class="ml-4">
                                                                    <div class="text-sm font-medium text-gray-900">
                                                                    {{$item->title}}
                                                                    
                                                                    </div>
                                                                
                                                                </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-left px-6 py-4">
                                                                    {{$item->position}}
                                                                </div>
                                                            </td>
                                                            <td class="uppercase px-6 py-4">
                                                                {{$item->status}}
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-left">
                                                                <a href="{{route('edit-slider', $item->id)}}"  class=" text-indigo-600 hover:text-indigo-900"><i class="fas fa-edit"></i></a>
                                                                <a href="{{route('delete-slider', $item->id)}}"   class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-trash text-red-400"></i></a>
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
@section('script')
   
@endsection