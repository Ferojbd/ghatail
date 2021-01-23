@extends('frontend.layout.master')
@section('title', 'Search')

@section('content')
    <section class="my-5">
        <div class="container-x">
            <div class="md:flex lg:flex xl:flex gap-2">
                <div class="mo:w-full sm:w-full md:w-3/3 lg:w-3/4 xl:w-3/4">
                    @foreach ($news as $item)
                    <div class="p-2 bg-white mb-2">
                        <a href="{{route('single-news', $item->id)}}"><h2 class="text-2xl font-semibold mb-2">{{$item->headline}}</h2></a>
                        <p class=" text-sm mb-1">প্রকাশিতঃ মঙ্গলবার, ২২/১২/২০২০</p>
                        <div class="flex">
                            <img class="w-24 h-24 mr-2" src="{{$item->img_path}}" alt="img">
                            <div class="h-24 w-full overflow-hidden">
                                <p class=" ml-2">{!!$item->newsbody!!}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="mo:w-full sm:w-full md:w-1/3 lg:w-1/4 xl:w-1/4">
                     <div class="bg-white p-2 mb-2">
                      <img class="w-full" src="https://www.thedome.org/wp-content/uploads/2019/06/300x300-Placeholder-Image.jpg" alt="">
                   </div>
                   <div class="bg-white p-2 mb-2">
                      <img class="w-full" src="https://www.thedome.org/wp-content/uploads/2019/06/300x300-Placeholder-Image.jpg" alt="">
                   </div>
                   {{-- <div class="bg-white shadow-sm p-2 ">
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
                    </ul> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
