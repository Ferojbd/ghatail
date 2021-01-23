@extends('frontend.layout.master')
{{-- @section('head')
<meta property="og:locale" content="bn">
<meta property="og:type" content="article">
<meta property="og:url" content="{{$news->route}}">
<meta property="og:title" content="{{$news->headline}}">
<meta property="og:description" content="{{$news->headline}}">
<meta property="og:image" content="{{$news->img_path}}">
<meta property="og:site_name" content="{{env('APP_NAME', '')}}">
@endsection --}}
@section('title', $news->headline)

@section('content')
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=3715293461864739&autoLogAppEvents=1" nonce="SKyCtxXx"></script>

    <section class="my-5">
        <div class="container-x">
            <div class="h-40 w-full shadow-md bg-white mt-24">
 <a href="https://yummys.com.bd/" target="_blank"><img src="https://i.ibb.co/MsDX8xf/yummysbanner.gif" alt="" text-align="center" border="0"> </a>
            </div>
            @if ($news)
                <div class="md:flex lg:flex xl:flex gap-2" style="margin-top: 40px;">
                    {{-- <div class="mo:w-full sm:w-full md:w-3/3 lg:w-3/4 xl:w-3/4"> --}}
                    
                    <div class="sm:w-full">
                        <div class="md:flex lg:flex xl:flex mb-10">
                            <div class="sm:w-full md:w-2/3 lg:w-2/3 xl-2/3">
                                <h2 class="sm:2xl md:text-3xl lg:text-4xl xl:text-4xl  mb-5 mt-10">{{$news->headline}}</h2>
                                <div>
                                    <p><i class="fas fa-user-edit text-2xl text-gray-500"></i>{{$news->publisher}}</p>
                                    <p class="text-sm text-gray-500">প্রকাশ {{$news->created_at}} </p>
                                </div>
                            </div>
                            <div class="sm:w-full md:w-1/3 lg:w-1/3 xl-1/3">
                                <div class="bg-white shadow-md w-full h-64">
                                    <img src="https://i.ibb.co/Qj6bxRJ/Mujib-Borso2020.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        
                        {{-- <img class="w-full my-5" src="https://via.placeholder.com/468x60?text=Visit+Blogging.com+Now C/O https://placeholder.com/#How_To_Use_Our_Placeholders " alt=""> --}}
                        <div class="">
                            @if ($news->img_path != null)
                                        <img class="w-full max-wid imcenter" src="{{$news->img_path}}" alt="img">
                                         @else
                                         <img class="w-full max-wid imcenter" src="{{asset('/uploads/ghatail-post-default-image.jpg')}}" alt="">   
                                        @endif
                                        
                                        
                            {{-- <img class="w-full max-wid imcenter" src="{{$news->img_path}}" alt="img"> --}}
                            {{-- <img class="object-none object-center bg-yellow-300 w-24 h-24" src="{{$news->img_path}}"> --}}
                        </div>
                        <div class="container-x">

                            <p class=" mt-5">
                               {!!$news->ads_body!!}
                            </p>
                        </div>

                        <div class="fb-comments" data-href="{{$news->route}}" data-numposts="10" data-width="100%"></div>


                        @php
                        $share_title = str_replace('`', '-', $news->headline);
                        @endphp
                        <h2 class="heading_primary">শেয়ার করুন</h2>
                        <ul class="npnls news_share_btn mb-2">
                            <li style="display: inline-block"><a href="javascript:;" onclick="window.open(`http://www.facebook.com/share.php?u={{$news->route}}&title={{$share_title}}`,'sharer', 'toolbar=0,status=0,width=620,height=280');" class="facebook"><i class="fab fa-facebook"></i></a></li>
                            <li style="display: inline-block"><a href="javascript:;" onclick="window.open(`http://twitter.com/intent/tweet?status={{$share_title}}+{{$news->route}}`,'sharer', 'toolbar=0,status=0,width=620,height=280');" class="twitter"><i class="fab fa-twitter"></i></a></li>
                            <li style="display: inline-block"><a href="javascript:;" onclick="window.open(`https://pinterest.com/pin/create/button/?url={{$news->route}}&media=&description={{$share_title}}`,'sharer', 'toolbar=0,status=0,width=620,height=280');" class="pinterest"><i class="fab fa-pinterest"></i></a></li>
                            <li style="display: inline-block"><a href="javascript:;" onclick="window.open(`https://www.linkedin.com/shareArticle?mini=true&url={{$news->route}}&title=&summary={{$share_title}}&source=`,'sharer', 'toolbar=0,status=0,width=620,height=280');" class="linkedin"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    {{-- <div class="mo:w-full sm:w-full md:w-1/3 lg:w-1/4 xl:w-1/4">
                        <div class="bg-white p-2 mb-2">
                        <img class="w-full" src="https://www.thedome.org/wp-content/uploads/2019/06/300x300-Placeholder-Image.jpg" alt="">
                    </div>
                    <div class="bg-white p-2 mb-2">
                        <img class="w-full" src="https://www.thedome.org/wp-content/uploads/2019/06/300x300-Placeholder-Image.jpg" alt="">
                    </div>
                    <div class="bg-white shadow-sm p-2 ">
                        <p class=" text-center">সর্বশেষ সংবাদ</p>
                        </div>
                        <ul class="mt-4">
                            @if ($rel_news)
                               @foreach ($rel_news as $item)
                                    <li class=" my-2 text-sm">
                                        <a href="{{$item->route}}">{{$item->headline}}</a>
                                    </li>
                               @endforeach
                            @endif
                        </ul>
                    </div> --}}

                </div>

            @endif
        </div>
    </section>

    <section>
        <div class="container-x max-con">
            <div class="lg:flex xl:flex">
                {{-- <div class="sm:w-full md:w-full lg:w-3/4 xl:w-3/4"> --}}
                <div class="w-full">
                  <div class="bg-white text-center  rounded mb-2">
                         <p class="p-3 text-xl font-semibold">সম্পর্কিত সংবাদ</p>
                 </div>
                  {{-- <div class="grid  sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-2 mb-5"> --}}
                  <div class="w-full">
                      {{-- @foreach($rel_news as $item)
                           <div class="p-2 bg-white rounded ">
                               <img class="h-48" src="{{$item->img_path}}" alt="img">
                               <p class="my-4 "><a href="{{$item->route}}">{{$item->headline}}</a></p>
                           </div>
                      @endforeach --}}
                      @foreach($rel_news as $item)
                      <div class="p-3 bg-white mb-2">
                                <a href="{{route('single-news', $item->id)}}"><h2 class="text-2xl font-semibold mb-2">{{$item->headline}}</h2></a>
                                <p class=" text-sm mb-2">{{$item->created_at}}</p>
                                <div class="flex">
                                    @if ($item->img_path)
                                    <img class="h-40 w-64 object-cover mr-2" src="{{$item->img_path}}" alt="img">
                                        @else
                                    <img class="h-40 w-64 object-cover mr-2" src="{{asset('/uploads/ghatail-post-default-image.jpg')}}" alt="img">
                                    @endif
                                    
                                    <div class="h-40 w-full overflow-hidden">
                                        <p class="text-md ml-2">{!!$item->newsbody!!}</p>
                                    </div>
                                </div>
                            </div>
                      @endforeach      
                 </div>           
                </div>
            </div>
        </div>
     </section>
@endsection



@section('script')

@endsection
