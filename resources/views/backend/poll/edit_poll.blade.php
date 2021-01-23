@extends('backend.layout.master')
@section('content')
      <section class="md:w-full lg:w-full xl:w-full">
         <div class="bg-gray-800 pt-3">
                <div class=" bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h3 class="font-bold pl-2">EDIT POLL</h3>
                </div>
            </div>
       <div class="p-5 m-5 bg-white text-gray-700 shadow-lg">
            <div class="flex">
               <div class="w-2/4">
                   <h1 class="font-bold text-2xl">EDIT POLL</h1>
               </div>
               <div class="w-2/4 text-right">
                   <a class="bg-gray-500 py-2 px-4 border-gray-500 rounded text-gray-100" href="{{route('poll')}}"><i class="fas fa-undo"></i> BACK</a>
               </div>
            </div>
            @if ($poll)
                <form action="{{route('edit-pole-action')}}" method="POST" enctype="multipart/form-data" class="mt-5">
                    @csrf
                    <div class="lg:flex xl:flex">
                        <div class="sm:w-full ">
                            <input type="hidden" name="id" id="id" value="{{$poll->id}}">
                            <label for="title" class="block">Title</label>
                            <input type="text" value="{{$poll->title}}" class="w-full py-2 mt-2 border-2 border-gray-200 rounded px-2" name="title" required id="title" placeholder="Slider title">
                        </div>
                    </div>
                
                    <div class="lg:flex xl:flex">
                        <div class="sm:w-full md:w-1/2 lg:1/2 xl:1/2 md:mr-2 lg:mr-2 xl:mr-2">
                            <label for="yes_poll" class="block">Yes Poll</label>
                            <input type="text" value="{{$poll->yes_poll}}" class="w-full py-2 mt-2 border-2 border-gray-200 rounded px-2" name="yes_poll" required id="yes_poll" placeholder="Yes Poll">
                        </div>
                    <div class="sm:w-full md:w-1/2 lg:1/2 xl:1/2">
                            <label for="no_poll" class="block">No Poll</label>
                            <input type="text" value="{{$poll->no_poll}}" class="w-full py-2 mt-2 border-2 border-gray-200 rounded px-2" name="no_poll" required id="no_poll" placeholder="No poll">
                        </div>
                    </div>
                    <div class="lg:flex xl:flex">
                        <div class="sm:w-full md:w-1/2 lg:1/2 xl:1/2 md:mr-2 lg:mr-2 xl:mr-2">
                            <label for="no_comment_poll" class="block">No comments poll</label>
                            <input type="number" value="{{$poll->no_comment_poll}}" class="w-full py-2 mt-2 border-2 border-gray-200 rounded px-2" name="no_comment_poll" required id="no_comment_poll" placeholder="No comments poll">
                        </div>
                        <div class="sm:w-full md:w-1/2 lg:1/2 xl:1/2">
                                <label for="status" class="block">Status</label>
                                <select name="status" id="status" class="p-2 w-full border-2 mt-2 border-gray-200 rounded">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>  
                    </div>
                
                    <button type="submit" class="py-1 mt-5 px-5 border-2  bg-green-400 border-green-400 text-white font-semibold shadow-lg">SUBMIT</button>
                    </div>
                </form>
                
            @endif
        </div>


           
    </section>    

@endsection

@section('script')
   
    <script>
        $('#ex-multiselect').picker();
        $('.content').richText();
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