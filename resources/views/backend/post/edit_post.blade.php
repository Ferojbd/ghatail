{{-- @extends('backend.layout.master')
@section('content')
      <section class="md:w-full lg:w-full xl:w-full">
         <div class="bg-gray-800 pt-3">
                <div class=" bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h3 class="font-bold pl-2">EDIT POST</h3>
                </div>
            </div>
       <div class="p-5 m-5 bg-white text-gray-700 shadow-lg">
            <div class="flex">
               <div class="w-2/4">
                   <h1 class="font-bold text-2xl">EDIT POST</h1>
               </div>
               <div class="w-2/4 text-right">
                   <a class="bg-gray-500 py-2 px-4 border-gray-500 rounded text-gray-100" href="{{route('post')}}"><i class="fas fa-undo"></i> BACK</a>
               </div>
            </div>
            @if ($news)
                <form action="{{route('edit-news-action')}}" method="POST" enctype="multipart/form-data" class="mt-5">
                   @csrf
                    <div class="lg:flex xl:flex">
                        <div class="sm:w-full ">
                            <input type="hidden" name="id" id="id" value="{{$news->id}}">
                            <label for="headline" class="block">Headline</label>
                            <input type="text" class="w-full py-2 mt-2 border-2 border-gray-200 rounded px-2" value="{{$news->headline}}" name="headline" id="headline" placeholder="News headline">
                        </div>
                    </div>
                     <div class="lg:flex xl:flex">
                    <div class="sm:w-full ">
                        <label for="short_details" class="block">Short Details</label>
                        <input type="text" class="w-full py-2 mt-2 border-2 border-gray-200 rounded px-2" value="{{$news->short_details}}" name="short_details" id="short_details" placeholder="Short details">
                    </div>
                </div>
                <div class="lg:flex xl:flex">
                     <div class="sm:w-full ">
                            <label for="publisher" class="w-full block mt-3 text-gray-500">Guest Publisher</label>
                            <input type="text" class="w-full  py-2 px-5 border-2 border-gray-200 mt-2 rounded" name="publisher" id="publisher" value="{{$news->publisher}}" placeholder="Guest publisher">
                        </div>    
                </div>
                {{-- <div class="lg:flex xl:flex">
                    <div class="sm:w-full ">
                        <label for="keywords" class="block">Keywords</label>
                        <input type="text" class="w-full py-2 mt-2 border-2 border-gray-200 rounded px-2" value="{{$news->keywords}}" name="keywords" id="keywords" placeholder="Add keywords">
                    </div>
                </div> --}}
                    {{-- <div class="mt-2">
                        <div class="sm:w-full">
                            <label for="newsbody" class="block">News Content</label>
                            <textarea name="newsbody" class="content w-full border-gray-200 border-2 p-2 rounded" id="" cols="10" rows="5">{{$news->newsbody}}</textarea>
                        </div>
                    </div>
                    <div class="md:flex lg:flex xl:flex mt-3">
                        
                            <div class="sm:w-full md:w-1/2 lg:1/2 xl:1/2">
                                <label for="user_name" class="block">Status</label>
                                <select name="status" id="status" class="p-2 w-full border-2 mt-2 border-gray-200 rounded">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>                     
                            
                            <div class="ml-2 sm:w-full md:w-1/2 lg:1/2 xl:1/2">
                                <label for="user_name" class="block imagePreview">Add Image</label>
                                <input type="file" class="w-full py-2 mt-2 border-2 border-gray-200 rounded " name="news_img" id="news_img" >
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
        $('.content').richText();
    </script>
@endsection
@section('head')
   
@endsection --}} 

@extends('backend.layout.master')
@section('content')
        <div class="bg-gray-800 pt-3 w-full">
                <div class=" bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h3 class="font-bold pl-2">ADD NEWS</h3>
                </div>
        </div>
        @if ($news) 
        <div class="lg:flex xl:flex">
           <div class="lg:ml-3 xl:ml-3 w-full  lg:w-4/6 xl:w-4/6 shadow-xl bg-white p-3 my-4">
               <form action="{{route('news-action')}}" method="POST" enctype="multipart/form-data" class="mt-5">
                    @csrf 
                    <div class="sm:w-full ">
                        <label for="headline" class="block mt-3 text-gray-500">Headline</label>
                        <input type="text" required class="w-full py-2 mt-2 border-2 border-gray-200 rounded px-2" value="{{$news->headline}}" name="headline" id="headline" placeholder="News headline">
                    </div>  
                    
                    <div class="sm:w-full ">
                        <label for="short_details" class="block mt-3 text-gray-500">Sub title</label>
                        <input type="text" required class="w-full py-2 mt-2 border-2 border-gray-200 rounded px-2" value="{{$news->short_details}}" name="short_details" id="short_details" placeholder="Short details">
                    </div>
                   
                                   
                    <div class="sm:w-full">
                        <label for="newsbody" class="block mt-3 text-gray-500">News Content</label>
                        <textarea name="newsbody" required class="content w-full border-gray-200 border-2 p-2 rounded" id="" cols="10" rows="5">{{$news->newsbody}}</textarea>
                    </div>
                   
                     <div class="w-full md:flex lg:flex xl:flex gap-2">
                        <div class="sm:full md:w-1/2 lg:w-1/2 xl:w-1/2">
                            <label for="publisher" class="w-full block mt-3 text-gray-500">Guest Publisher</label>
                                <input type="text" class="w-full  py-2 px-5 border-2 border-gray-200 mt-2 rounded" value="{{$news->publisher}}" name="publisher" id="publisher" placeholder="Guest publisher">
                        </div>    
                        
                         <div class="md:w-1/2 lg:w-1/2 xl:w-1/2">
                             <label for="status" class="block mt-3 text-gray-500">Status</label>
                             <select name="status" id="status" class="p-2 w-full border-2 mt-2 border-gray-200 rounded">
                                 <option value="active" selected>Active</option>
                                 <option value="inactive">Inactive</option>
                             </select>
                         </div>      
                    </div>                   

                
                   <button class="py-1 mt-5 px-5 border-2  bg-green-400 border-green-400 text-white font-semibold shadow-lg">PUBLISH</button>                                        
           </div>    
           <div class="lg:mx-3 xl:mx-3 w-full  lg:w-2/6 xl:w-2/6   my-4">
               <div class="shadow-xl bg-white p-3">
                   <h4 class="py-2 text-center font-bold text-xl text-gray-600">ALL CATEGORY</h4>
                   <div class="h-80 overflow-scroll">
                       <ul class="bg-gray-100 p-2">
                          @if ($news->Category)  
                             @foreach($news->Category as $item)
                                <li class="p-1 text-gray-500 my-1 pl-5"><span class=""><input type="checkbox" name="category[]" value="{{$item->id}}" checked class="form-checkbox h-4 w-4 text-purple-600"><span class="ml-2 text-gray-700">{{$item->category}}</span> </span>
                                    <ul class="w-full">
                                        @if (count($item->Children))
                                            @foreach ($item->Children as $c)
                                                 <li> <input type="checkbox" checked name="category[]" style="margin-top: -3px" value="{{$c->id}}" class=" form-checkbox h-4 w-4 text-green-600 ml-5 mt-3"><span class="ml-2 text-gray-700">{{$c->category}}</span></li>           
                                            @endforeach
                                        @endif
                                    </ul>
                                </li>
                             @endforeach
                          @endif
                        </ul>
                     
                   </div>
                   <div class="mt-3 text-center cursor-pointer">
                       
                   </div> 
                </div>
                <div class="shadow-xl form-c mt-4 bg-white p-2">
                     {{-- <h1 class="text-center py-2 border-b-2 border-gray-300 font-semibold mb-1">Featured image</h1> --}}
                     <div class="clickMe text-center py-4 cursor-pointer text-sm text-blue-800 underline">Set featured image</div>

                       <div class="w-full sssss">
                           <img class="w-full " id="category-img-tag" src="{{$news->img_path}}" alt="img">
                           <input type="file" name="news_img" id="news_img">
                        </div>
               </div>
           </div>   
        </form> 
        @endif
        </div>                
@endsection

@section('script')
   
    <script>
        $('#ex-multiselect').picker();
        $('#ex-multiselect-2').picker();
        $('.content').richText();

        $('.showcat').click(() => {
            $('.form-c').slideToggle();
        })
        // --------------------------------
        $('.clickMe').click(() => {
            // console.log("Hello")
           $('.sssss').show()
           $('.clickMe').hide()
        })
        //--------------------------------
        function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#category-img-tag').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#news_img").change(function(){
    readURL(this);
});
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
