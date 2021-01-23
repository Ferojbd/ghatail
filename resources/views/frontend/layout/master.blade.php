<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <title>ঘাটাইল ডট কম</title>
    <link rel="shortcut icon" href="{{asset('/uploads/logo-ghatail-dot-com.png')}}">
    @yield('head')
</head>
<body>
    <section class="">
        <nav class="bg-white shadow-md fixed w-full fixed-nav-bar main-nav">
            <div class="container-x flex justify-between">
                <div>
                    <a class="" href="{{url('/')}}"><img class="w-30" src="{{asset('/uploads/logo-ghatail-dot-com.png')}}" alt="logo"></a>                                                    
                </div>
                <div class=" xl:hidden mt-5">
                    <i class="clickMe fas fa-bars cursor-pointer"></i>
                </div>
                <ul class="flex main-n  mt-1 sm:hidden md:hidden lg:hidden xl:flex ">
                    {{-- {{dd($nav_items)}} --}}
                    @if ($nav_items->items)
                          <li class="menu-main py-4 mx-1 font-bold text-sm">
                              <a href="{{route('home')}}"> 
                               প্রচ্ছদ 
                            </a> 
                          </li>
                      @foreach ($nav_items->items as $item)
                          <li class="menu-main py-4 mx-1 font-bold text-sm">
                            <a href="{{route('category.single',$item['label'] )}}">{{$item['label']}} 
                               @if (count($item->child))
                                 <i class="fas fa-angle-down ml-1"></i>
                               @endif 
                            </a>                                     
                            <ul class="shadow-xl submenu-main">
                                @if (count($item->child))    
                                    @foreach ($item->child as $c)
                                      <li class="py-1 mx-2 text-sm"><a class="" href="{{route('category.single', $c['label'])}}">{{$c->label}}</a></li>         
                                    @endforeach                          
                                @endif 
                            </ul>
                        </li>
                        @endforeach
                    @endif
                </ul>
            </div>
            {{-- mobile nav  --}}
            <span class="mobile mobile-2 shadow-md">
                    <ul class="bg-white p-5 ">
                        <li><i class="fas fa-times againClick cursor-pointer ml-2 text-red-500"></i></li>
                         @if ($nav_items->items)
                           @foreach ($nav_items->items as $item)
                                <li class="py-1 mx-2 menu text-sm"><a href="{{route('category.single', $item['id'])}}">{{$item['label']}} <i class="fas fa-angle-down"></i></a>
                                    <ul class="ml-5 shadow-xl submenu">
                                         @if (count($item->child))    
                                            @foreach ($item->child as $c)
                                            <li class="py-1 mx-2 text-sm"><a class="" href="{{route('category.single', $c['id'])}}">{{$c->label}}</a></li>         
                                            @endforeach                          
                                        @endif                                   
                                    </ul>
                                </li>
                               @endforeach
                            @endif   
                   </ul>
            </span>
        </nav>
   </section>
   <section>
       @yield('content')
   </section>
   <footer class=" bg-gray-700 py-10">
       <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-2 container-x">
           <div class="">
               <p class="text-white">প্রকাশক ও সম্পাদক: এস এম ইমরুল কায়েস রাজিব</p>
               <p class="text-white">সম্পাদক: মোহাম্মদ সারোয়ার জাহান কলি | বার্তা প্রধান: মোহাম্মদ মাসুম মিয়া</p>
               <p class="text-white">প্রধান কার্যালয়: ঘাটাইল, টাঙ্গাইল ।</p>
               <p class="text-white">ইমেইলঃ ghatailkoly@gmail.com/ news@ghatail.com</p>
               <p class="text-white">মোবাইলঃ ০১৭৭১৯১৬৯৮৭, ০১৯৯১০৩২২৩৩</p>
           </div>
           <div>
               
           </div>
       </div>
   </footer>
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/bad080b564.js" crossorigin="anonymous"></script>
   <script>
       $('.clickMe').click(() => {
           $('.mobile').addClass('mobile-width')
       })
    //    $('.againClick').click(() => {
    //        $('.mobile').removeClass('mobile-width')
    //    })
        $(window).resize(() => {
            if($(window).width() > 1023){
                $('.mobile').removeClass('mobile-width')
            }

        })
        $('.againClick').click(() => {
           $('.mobile').removeClass('mobile-width')
       })
   </script>
   @yield('script')
</body>
</html>