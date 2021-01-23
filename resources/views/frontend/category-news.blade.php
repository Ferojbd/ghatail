@extends('frontend.layout.master')
@isset($cat_post[0]->category)
    
@section('title', $cat_post[0]->category)
@endisset

@section('content')
    <section class="my-5">
        <div class="container-x">
            {{-- <div class="w-full h-40 bg-white shadow-md">
                
            </div> --}}
            <div class="md:flex lg:flex xl:flex gap-2" style="margin-top: 100px;">
                {{-- <div class="mo:w-full sm:w-full md:w-3/3 lg:w-3/4 xl:w-3/4"> --}}
                <div class="mo:w-full sm:w-full md:w-3/3 lg:w-3/4 xl:w-3/4">
                    @if ($cat_post)
                        @foreach ($cat_post as $item)
                          @foreach ($item->Post as $i)
                            <div class="p-2 bg-white mb-2">
                                <a href="{{route('single-news', $i->id)}}"><h2 class="text-2xl font-semibold mb-2">{{$i->headline}}</h2></a>
                                <p class=" text-sm mb-1">প্রকাশিতঃ মঙ্গলবার, ২২/১২/২০২০</p>
                                <div class="flex">
                                    @if ($i->img_path != null)
                                        <img class="h-24 w-2/5 object-cover mr-2" src="{{$i->img_path}}" alt="img">
                                         @else
                                         <img class="h-24 w-2/5 object-cover mr-2" src="{{asset('/uploads/ghatail-post-default-image.jpg')}}" alt="">   
                                        @endif
                                    <div class="h-24 w-full overflow-hidden">
                                        <p class=" ml-2">{!!$i->newsbody!!}</p>
                                    </div>
                                </div>
                            </div>
                          @endforeach
                        @endforeach
                    @endif
                </div>
                <div class="mo:w-full sm:w-full md:w-1/3 lg:w-1/4 xl:w-1/4">
                     <div class="bg-white p-2 mb-2">
                      <img class="w-full" src="{{asset('/uploads/ghatail-post-default-image.jpg')}}" alt="">
                   </div>
                   <div class="bg-white p-2 mb-2">
                      <img class="w-full" src="{{asset('/uploads/ghatail-post-default-image.jpg')}}" alt="">
                   </div>
                   <div class="bg-white shadow-sm p-2 ">
                       <p class=" text-center">সর্বশেষ সংবাদ</p>
                    </div>
                    <ul class="mt-4">
                        @if ($catten)
                           @foreach ($catten->Postlimitten as $i)
                                <li class=" my-2 text-sm">
                                    {{$i->headline}}
                                </li>
                           @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('head')

@endsection

@section('script')

@endsection
