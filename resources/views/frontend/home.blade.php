@extends('frontend.layout.master')
@section('content')
    <section class="container-x">
         <div class="bg-white shadow-sm  h-32 mt-5 overflow-hidden" style="margin-top: 82px;">
             <div class="top_banner object-cover" style="height: auto !important;">
                <a href="https://yummys.com.bd/" target="_blank"><img src="https://i.ibb.co/MsDX8xf/yummysbanner.gif" alt="" text-align="center" border="0"> </a>
                <div style="width: 100%; height: auto; clear: both; text-align: center;" class="google-auto-placed"><ins style="display: block; margin: 10px auto; background-color: transparent; height: 280px;" data-ad-format="auto" class="adsbygoogle adsbygoogle-noablate" data-ad-client="ca-pub-4446967272607184" data-adsbygoogle-status="done"><ins id="aswift_1_expand" style="display:inline-table;border:none;height:280px;margin:0;padding:0;position:relative;visibility:visible;width:1200px;background-color:transparent;" tabindex="0" title="Advertisement" aria-label="Advertisement"><ins id="aswift_1_anchor" style="display: block; border: medium none; height: 280px; margin: 0px; padding: 0px; position: relative; visibility: visible; width: 1200px; background-color: transparent; overflow: visible;"><iframe id="aswift_1" name="aswift_1" style="left:0;position:absolute;top:0;border:0;width:1200px;height:280px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-4446967272607184&amp;output=html&amp;h=280&amp;adk=3088186576&amp;adf=683863926&amp;pi=t.aa~a.1174724044~rp.3&amp;w=1200&amp;fwrn=4&amp;fwrnh=100&amp;lmt=1611222841&amp;rafmt=1&amp;to=qs&amp;pwprc=3929863418&amp;psa=1&amp;format=1200x280&amp;url=https%3A%2F%2Fghatail.com%2F&amp;flash=0&amp;fwr=0&amp;rpe=1&amp;resp_fmts=3&amp;wgl=1&amp;adsid=ChEIgOmkgAYQ857_u8nd_LeeARI9AJAj4-T2nmXS62S2vUjzoOoWeP-MHq2W-kSXrYrcpPq0MnmSnZs_bcynIjeMbdDnCzIvZ167rRAUWZnXfQ&amp;dt=1611222840512&amp;bpp=10&amp;bdt=1728&amp;idt=587&amp;shv=r20210113&amp;cbv=r20190131&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D0a8057fc28ba39b9-2230f9488dc50050%3AT%3D1609843891%3ART%3D1609843891%3AS%3DALNI_MbC7SxIGArur586DwxPxwabq8k6RQ&amp;prev_fmts=0x0&amp;nras=1&amp;correlator=8466733144522&amp;frm=20&amp;pv=1&amp;ga_vid=1025428638.1609843890&amp;ga_sid=1611222841&amp;ga_hid=1473105702&amp;ga_fc=0&amp;u_tz=360&amp;u_his=2&amp;u_java=0&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_nplug=0&amp;u_nmime=0&amp;adx=75&amp;ady=218&amp;biw=1349&amp;bih=654&amp;scr_x=0&amp;scr_y=0&amp;eid=21068769%2C21068945%2C21069110&amp;oid=3&amp;pvsid=40168681140434&amp;pem=418&amp;rx=0&amp;eae=0&amp;fc=1920&amp;brdim=-8%2C-8%2C-8%2C-8%2C1366%2C0%2C1382%2C744%2C1366%2C654&amp;vis=1&amp;rsz=%7C%7CeE%7C&amp;abl=CS&amp;pfx=0&amp;fu=8320&amp;bc=31&amp;ifi=1&amp;uci=a!1&amp;fsb=1&amp;xpc=7z1n769XCF&amp;p=https%3A//ghatail.com&amp;dtd=717" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" data-google-container-id="a!1" data-google-query-id="CKLCzOrgrO4CFUq8fgoda_QAxA" data-load-complete="true" width="1200" height="280" frameborder="0"></iframe></ins></ins></ins></div></div>
                
                
                <a href="#" target="_blank"><img src="https://i.ibb.co/Qj6bxRJ/Mujib-Borso2020.jpg" alt="" height="300px" border="0"></a>
         </div>
         <div class="bg-white shadow-sm  p-5 mt-5 mb-5">
             {{-- <span class="bongabdo"></span> --}}
             <p class="mb-2"><span class="bongabdo"></span>, {{date('l, d M Y')}} </p>  
             <span class="ml-1 text-white bongabdo"></span>           
             <div class="border-t-2 border-gray-300">
                 <div class="md:flex lg:flex xl:flex gap-2">
                     <div class="md:w-4/6 lg:4/6 xl:4/6">
                        <div class=" lg:flex xl:flex gap-2">                      
                                  @if ($all_post)
                                  @isset($all_post[0])
                                      
                                  {{-- @endisset --}}
                                  <div class="parent-d sm:w-full md:w-full lg:w-3/5 xl:3/5">
                                    <a href="{{$all_post[0]->route}}">
                                        @if ($all_post[0]->img_path != null)
                                        <img class="w-full object-cover  pt-2 h-auto" src="{{$all_post[0]->img_path}}" alt="img">
                                         @else
                                         <img class="object-cover w-full" src="{{asset('/uploads/ghatail-post-default-image.jpg')}}" alt="">   
                                        @endif
                                        <span class="child-p p-3 ">                         
                                                    <p class=" font-semibold">{{$all_post[0]->headline}}</p>
                                            </span>
                                            <span class="overlay-span"></span>
                                        </div>
                                     </a> 
                                    @endisset
                                  @endif
                                                  
                                <div class="sm:w-full md:w-full lg:w-2/5 xl:2/5">
                                    @if ($all_post)
                                     @foreach($all_post as $key => $item)
                                        @if ($key > 0)
                                          <a href="{{$item->route}}">
                                            <div class="flex mt-2 p-2 bg-gray-100">
                                              @if ($item->img_path != null)
                                              <img class="w-20 h-16 mr-2" src="{{$item->img_path}}" alt="img">
                                              @else 
                                              <img class="w-20 h-16 mr-2" src="{{asset('/uploads/ghatail-post-default-image.jpg')}}" alt="img">   
                                              @endif
                                                
                                                <p class="text-sm">{{$item->headline}}</p>
                                            </div>
                                          </a>  
                                        @endif
                                      @endforeach
                                 @endif
                                </div>
                        </div>
                     </div>
                     <div class="md:w-2/6 lg:2/6 xl:2/6">
                        <img class="w-full mt-2" src="https://i.ibb.co/Qj6bxRJ/Mujib-Borso2020.jpg" alt="">
                     </div>
                 </div>
             </div>
         </div>
         {{-- <div class="bg-white shadow-sm h-80 p-5 mt-5 mb-5">
        </div> --}}
        {{-- -------------------------------     --}}
         <div class="bg-white shadow-sm p-5 mt-5 mb-5 md:flex lg:flex xl:flex gap-2">
             <div class="md:w-4/6 lg:4/6 xl:4/6">
                <h1 class="border-b-2 border-gray-300 py-2 font-semibold">ঘাটাইল</h1>
                        <div class=" lg:flex xl:flex gap-2"> 
                               @if ($ghatail)
                                 @isset($ghatail->PostlimitFive[0])
                                  <div class="sm:w-full md:w-full lg:w-3/5 xl:3/5">
                                      <a href="{{$ghatail->PostlimitFive[0]->route}}">
                                      @if ($ghatail->PostlimitFive[0]->img_path != null)
                                      <img class="w-full pt-2 h-60" src="{{$ghatail->PostlimitFive[0]->img_path}}" alt="img">
                                      @else   
                                      <img class="w-full pt-2 h-60" src="{{asset('/uploads/ghatail-post-default-image.jpg')}}" alt="no image"> 
                                      @endif
                                   
                                      <h2 class="text-xl mt-2 mb-3">{{$ghatail->PostlimitFive[0]->headline}}</h2>
                                      <p class="text-sm">{{$ghatail->PostlimitFive[0]->short_details}} 
                                      </p>
                                      </a>
                                  </div>
                                     
                                 @endisset
                                   
                               @endif                     
                                <div class="sm:w-full md:w-full lg:w-2/5 xl:2/5">
                                    @if ($ghatail->PostlimitFive)
                                        @foreach ($ghatail->PostlimitFive as $key => $item)
                                           @if ($key > 0)
                                              <a href="{{$item->route}}">
                                                <div class="flex mt-2 p-2 bg-gray-100">
                                                    @if ($item->img_path != null)
                                                    <img class="w-20 h-16 mr-2" src="{{$item->img_path}}" alt="img">
                                                    @else
                                                    <img class="w-20 h-16 mr-2" src="{{asset('/uploads/ghatail-post-default-image.jpg')}}" alt="">   
                                                    @endif
                                                    <p class="text-sm">{{$item->headline}}</p>
                                                </div>
                                               </a>
                                           @endif
                                       
                                        @endforeach
                                    @endif
                                </div>
                        </div>
             </div>
              <div class="md:w-2/6 lg:2/6 xl:2/6">
                {{-- <h1 class="border-b-2 border-gray-300 py-2 font-semibold">সর্বশেষ সংবাদ</h1> --}}
                   <div class="bg-white">
                    <nav class="flex flex-col sm:flex-row pt-4">
                      <button class="clickLatest text-gray-600 mb-2 px-6 block hover:text-blue-500 focus:outline-none border-b-2 border-blue-500 text-blue-500">
                        সর্বশেষ সংবাদ
                      </button>
                      <button class=" clickCorona mb-2 px-6 block hover:text-blue-500 focus:outline-none  border-b-2 font-medium">
                          করোনা
                      </button>
                    </nav>
                    <div class="latestCorona hideMe">
                        <ul class="px-2">
                            @if ($corona)
                              @foreach ($corona->Postlimit as $item)
                                 <li class="mb-3"><a class="text-sm" href="{{$item->route}}"><i class="fas fa-arrow-right mr-1"></i> {{$item->headline}}</a></li>               
                              @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="latestNews ">
                        <ul class="px-2">
                            @if ($letestNews)
                                @foreach ($letestNews as $item)
                                    
                                <li class="mb-3"><a class="text-sm" href="{{$item->route}}"><i class="fas fa-arrow-right mr-1"></i>{{$item->headline}}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
         </div>
         {{-- ----------------------- --}}
         {{-- জাতীয় --}}
         <div class="my-5">
             <div class="bg-white shadow-md">
                <h2 class="font-semibold border-b-2 border-gray-300 pt-5 pb-3 pl-5">টাঙ্গাইল জেলার খবর</h2>
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4  xl:grid-cols-4 gap-2 px-5 py-3">
                   @if ($tangail)
                       @foreach ($tangail->Postlimit as $item)
                          <a href="{{$item->route}}">
                            <div class="my-2">
                                @if ($item->img_path)
                                <img class="h-40 w-full object-cover" src="{{$item->img_path}}" alt="img">
                                @else    
                                 <img class="h-40 w-full object-cover" src="{{asset('/uploads/ghatail-post-default-image.jpg')}}" alt="no image"> 
                                @endif
                                <p class="mt-2">{{$item->headline}}</p>
                            </div>
                           </a>
                       @endforeach
                   @endif
                </div>
             </div>
         </div>
         {{-- ----------------------------------- --}}
         <div>
             <div class="bg-white shadow-md">
                 <div class=" lg:flex xl:flex px-5 gap-2">
                     <div class="sm:w-full md:w-full lg:w-4/6 xl:4/6">
                        <h2 class="font-semibold border-b-2 border-gray-300 pt-5 pb-3">বাংলাদেশ</h2>
                        <div class="grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2  xl:grid-cols-3 gap-2 pb-3">
                           @if ($bangladesh)
                            @foreach($bangladesh->PostlimitSix as $item)
                              <a href="{{$item->route}}">
                                <div class="my-2">
                                    @if ($item->img_path)
                                    <img class="h-40 w-full object-cover" src="{{$item->img_path}}" alt="img">
                                    @else  
                                    <img class="h-40 w-full object-cover" src="{{asset('/uploads/ghatail-post-default-image.jpg')}}" alt="img">  
                                    @endif
                                    
                                    <p class="mt-2">{{$item->headline}}</p>
                                </div>  
                                </a>                
                              @endforeach
                          @endif  
                       </div>                 
                    </div>
                     <div class=" sm:w-full md:w-full lg:w-2/6 xl:2/6 mt-3">
                        <h2 class="font-semibold border-b-2 border-gray-300 pt-2 pb-3">করোনা</h2>
                        @if ($coronaSide)
                            @foreach($coronaSide->PostlimitFive as $item)
                              <a href="{{$item->route}}">
                                <div class="flex mt-2 p-2 bg-gray-100">
                                  @if ($item->img_path)
                                  <img class="w-20 h-16 mr-2" src="{{$item->img_path}}" alt="img">
                                  @else   
                                  <img class="w-20 h-16 mr-2" src="{{asset('/uploads/ghatail-post-default-image.jpg')}}" alt="img"> 
                                  @endif
                                    
                                    <p class="text-sm">{{$item->headline}}</p>
                                </div>
                              </a>  
                            @endforeach
                        @endif
                    </div>
                 </div>
             </div>
         </div>
         {{-- ----------------------------------------- --}}
          <div class="my-5">
             <div class="bg-white shadow-md">
                <h2 class="font-semibold border-b-2 border-gray-300 pt-5 pb-3 pl-5">আন্তর্জাতিক</h2>
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4  xl:grid-cols-4 gap-2 px-5 py-3">
                   @if ($international)
                       @foreach ($international->Postlimit as $item)
                          <a href="{{$item->route}}">
                            <div class="my-2">
                                @if ($item->img_path)
                                <img class="h-40 w-full object-cover" src="{{$item->img_path}}" alt="img">
                                @else  
                                <img class="h-40 w-full object-cover" src="{{asset('/uploads/ghatail-post-default-image.jpg')}}" alt="img">  
                                @endif
                                
                                <p class="mt-2">{{$item->headline}}</p>
                            </div>
                           </a>
                       @endforeach
                   @endif 
                </div>
             </div>
         </div>
         {{-- ----------------------------------------------- --}}
         <div class="mb-5 ">
             <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-2">
                 <div class="bg-white p-5 shadow-md">
                     <h2 class="border-b-2 font-semibold pb-3 border-gray-300">আইন আদালত</h2>
                     <div class="parent-d">
                        @if ($justics)
                          @isset($justics->Postlimitfour[0])
                            <a href="{{$item->route}}">
                              <img class="w-100 mt-5" src="{{$justics->Postlimitfour[0]->img_path}}" alt="img">
                              <span class="child-p p-3 ">                         
                                      <p class=" font-semibold">{{$justics->Postlimitfour[0]->headline}}</p>
                              </span>
                              <span class="overlay-span"></span>   
                            </a>                                          
                          @endisset
                        @endif 
                     </div>
                      <ul class="">
                         @if ($justics)
                           @foreach ($justics->Postlimitfour as $key => $item)
                              @if ($key > 0)
                                <li class="my-2"><a class="text-sm" href="{{$item->route}}"><i class="fas fa-arrow-right fa-fw"></i> {{$item->headline}}</a></li>    
                              @endif 
                           @endforeach
                         @endif  
                    </ul>
                 </div>
                 <div class="bg-white p-5 shadow-md">
                     <h2 class="border-b-2 font-semibold pb-3 border-gray-300">রাজনীতি</h2>
                     <div class="parent-d">
                        @if ($politics)
                          @isset($politics->Postlimitfour[0])
                            <a href="{{$item->route}}">
                                <img class="w-100 mt-5" src="{{$politics->Postlimitfour[0]->img_path}}" alt="img">
                                <span class="child-p p-3 ">                         
                                        <p class=" font-semibold">{{$politics->Postlimitfour[0]->headline}}</p>
                                </span>
                                <span class="overlay-span"></span> 
                            </a>                            
                          @endisset
                        @endif 
                     </div>
                      <ul class="">
                         @if ($politics)
                           @foreach ($politics->Postlimitfour as $key => $item)
                              @if ($key > 0)
                                <li class="my-2"><a class="text-sm" href="{{$item->route}}"><i class="fas fa-arrow-right fa-fw"></i> {{$item->headline}}</a></li>    
                              @endif 
                           @endforeach
                         @endif  
                    </ul>
                    
                    {{-- <div>
                        <a class="text-sm underline text-blue-900" href="#">LOAD MORE</a>
                    </div> --}}
                 </div>
                 <div class="bg-white p-5 shadow-md">
                     <h2 class="border-b-2 font-semibold pb-3 border-gray-300">জনদুর্ভোগ</h2>
                     <div class="parent-d">
                        @if ($jonodorbog)
                          @isset($jonodorbog->Postlimitfour[0])
                            <a href="{{$item->route}}">
                                <img class="w-100 mt-5" src="{{$jonodorbog->Postlimit[0]->img_path}}" alt="img">
                                <span class="child-p p-3 ">                         
                                        <p class=" font-semibold">{{$jonodorbog->Postlimitfour[0]->headline}}</p>
                                </span>
                                <span class="overlay-span"></span>  
                            </a>                                         
                          @endisset
                        @endif 
                     </div>
                      <ul class="">
                         @if ($jonodorbog)
                           @foreach ($jonodorbog->Postlimitfour as $key => $item)
                              @if ($key > 0)
                                <li class="my-2"><a class="text-sm" href="{{$item->route}}"><i class="fas fa-arrow-right fa-fw"></i> {{$item->headline}}</a></li>    
                              @endif 
                           @endforeach
                         @endif  
                    </ul>
                    {{-- <div>
                        <a class="text-sm underline text-blue-900" href="#">LOAD MORE</a>
                    </div> --}}
                 </div>
             </div>
         </div>
         {{-- ------------------------------------------------------ --}}
           <div>
             <div class="bg-white shadow-md">
                 <div class=" lg:flex xl:flex px-5 gap-2">
                     <div class="sm:w-full md:w-full lg:w-4/6 xl:4/6">
                        <h2 class="font-semibold border-b-2 border-gray-300 pt-5 pb-3">খেলাধুলা</h2>
                        <div class="grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2  xl:grid-cols-2 gap-2 pb-3">
                          @if ($sports)
                              @foreach ($sports->Postlimitfour as $item)
                                  <a href="{{$item->route}}">
                                    <div class="my-2">
                                        @if ($item->img_path)
                                        <img class="h-48 w-full object-cover" src="{{$item->img_path}}" alt="img">
                                        @else  
                                        <img class="h-48 w-full object-cover" src="{{asset('/uploads/ghatail-post-default-image.jpg')}}" alt="img">  
                                        @endif
                                        
                                        <p class="mt-2">{{$item->headline}}</p>
                                    </div>   
                                </a>                         
                              @endforeach
                          @endif           
                       </div>                 
                    </div>
                     <div class=" sm:w-full md:w-full lg:w-2/6 xl:2/6 mt-3">
                        <h2 class="font-semibold border-b-2 border-gray-300 pt-2 pb-3">সংস্কৃতি-বিনোদন</h2>
                        @if ($entertainment)
                            @foreach ($entertainment->PostlimitSix as $item)
                              <a href="{{$item->route}}">
                                <div class="flex mt-2 p-2 bg-gray-100">
                                    <img class="w-20 h-16 mr-2" src="{{$item->img_path}}" alt="img">
                                    <p class="text-sm">{{$item->headline}}</p>
                               </div>  
                              </a>                
                            @endforeach
                        @endif
                       
                    </div>
                 </div>
             </div>
         </div>
         {{-- -------------------------------------------------------------- --}}
           <div class="mb-5  mt-5">
             <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-2 ">
                 <div class="bg-white p-5 shadow-md">
                     <h2 class="border-b-2 font-semibold pb-3 border-gray-300">অর্থনীতি</h2>
                     <div class="parent-d">
                        @if ($orthonity)
                         @isset($orthonity->Postlimitfour[0])
                          <a href="{{$orthonity->Postlimitfour[0]->route}}">
                            @if ($orthonity->Postlimitfour[0]->img_path)
                               <img class="h-48 w-full object-cover mt-5" src="{{$orthonity->Postlimitfour[0]->img_path}}" alt="img">
                            @else
                                <img class="h-48 w-full object-cover mt-5" src="{{asset('/uploads/ghatail-post-default-image.jpg')}}" alt="img">
                            @endif
                            
                            <span class="child-p p-3 ">                         
                                    <p class=" font-semibold">{{$orthonity->Postlimitfour[0]->headline}}</p>
                            </span>
                            <span class="overlay-span"></span> 
                          </a>                        
                             
                         @endisset
                        @endif 
                     </div>
                      <ul class="">
                         @if ($orthonity)
                           <a href="{{$item->route}}">
                           @foreach ($orthonity->Postlimitfour as $key => $item)
                              @if ($key > 0)
                                <li class="my-2"><a class="text-sm" href="{{$item->route}}"><i class="fas fa-arrow-right fa-fw"></i> {{$item->headline}}</a></li>    
                              @endif 
                           @endforeach
                         @endif  
                    </ul>
                
                 </div>

                 <div class="bg-white p-5 shadow-md">
                     <h2 class="border-b-2 font-semibold pb-3 border-gray-300">শিক্ষাঙ্গন</h2>
                    <div class="parent-d">
                      @isset($sikhaongon->Postlimitfour[0])
                        @if ($sikhaongon)
                            <a href="{{$sikhaongon->Postlimitfour[0]->route}}">
                              @if ($sikhaongon->Postlimitfour[0]->img_path)
                               <img class="h-48 w-full object-cover mt-5" src="{{$sikhaongon->Postlimitfour[0]->img_path}}" alt="img">
                              @else
                                  <img class="h-48 w-full object-cover mt-5" src="{{asset('/uploads/ghatail-post-default-image.jpg')}}" alt="img">
                              @endif
                              <span class="child-p p-3 ">                         
                                      <p class=" font-semibold">{{$sikhaongon->Postlimitfour[0]->headline}}</p>
                              </span>
                              <span class="overlay-span"></span>    
                            </a>                                    
                          @endisset
                        @endif 
                     </div> 
                       <ul class="">
                         @if ($sikhaongon)
                           @foreach ($sikhaongon->Postlimitfour as $key => $item)
                              @if ($key > 0)
                                <li class="my-2"><a class="text-sm" href="{{$item->route}}"><i class="fas fa-arrow-right fa-fw"></i> {{$item->headline}}</a></li>    
                              @endif 
                           @endforeach
                         @endif  
                    </ul>
                 </div>
                 
                  <div class="bg-white p-5 shadow-md">
                     <h2 class="border-b-2 font-semibold pb-3 border-gray-300">তথ্যপ্রযুক্তি</h2>
                     <div class="parent-d">
                        @if ($tothoProjucti)
                         @isset($tothoProjucti->Postlimitfour[0])
                          <a href="{{$tothoProjucti->Postlimitfour[0]->route}}">
                              @if ($tothoProjucti->Postlimitfour[0]->img_path)
                               <img class="h-48 w-full object-cover mt-5" src="{{$tothoProjucti->Postlimitfour[0]->img_path}}" alt="img">
                              @else
                                <img class="h-48 w-full object-cover mt-5" src="{{asset('/uploads/ghatail-post-default-image.jpg')}}" alt="img">
                              @endif
                            
                            <span class="child-p p-3 ">                         
                                    <p class=" font-semibold">{{$tothoProjucti->Postlimitfour[0]->headline}}</p>
                            </span>
                            <span class="overlay-span"></span> 
                          </a>                        
                             
                         @endisset
                        @endif 
                     </div>
                      <ul class="">
                         @if ($orthonity)
                           <a href="{{$item->route}}">
                           @foreach ($orthonity->Postlimitfour as $key => $item)
                              @if ($key > 0)
                                <li class="my-2"><a class="text-sm" href="{{$item->route}}"><i class="fas fa-arrow-right fa-fw"></i> {{$item->headline}}</a></li>    
                              @endif 
                           @endforeach
                         @endif  
                    </ul>
                
                 </div>   
             </div>
         </div>
        {{-- ---------------------------------------------------  --}}
        <div class="my-5 ">
            <div class="grid md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-2 ">
                <div class="p-5 bg-white shadow-md">
                    <h1 class="border-b-2 border-gray-300 font-semibold py-3">মতামত</h1>
                     <div class="grid md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 gap-2">
                         @if ($motamot)
                             @foreach ($motamot->PostlimitTwo as $item)
                               <a href="{{$item->route}}">
                                <div class="my-2">
                                    @if ($item->img_path)
                                     <img class="h-40 w-full object-cover" src="{{$item->img_path}}" alt="img">
                                     @else    
                                     <img class="h-40 w-full object-cover" src="{{asset('/uploads/ghatail-post-default-image.jpg')}}" alt="img">
                                    @endif
                                    <p class="mt-2">{{$item->headline}}</p>
                                </div>  
                               </a>      
                             @endforeach
                         @endif
                            {{-- <div class="my-2">
                                <img src="{{asset('/uploads/ghatail-post-default-image.jpg')}}" alt="img">
                                <p class="mt-2">টাংগাইলে নবাগত ক্যাডারদের শীতবস্ত্র বিতরণ</p>
                            </div> --}}
                     </div>
                </div>
                <div class="p-5 bg-white shadow-md">
                    <h1 class="border-b-2 border-gray-300 font-semibold py-3">সম্পাদকীয়</h1>
                     <div class="grid md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 gap-2">
                         @if ($sompadokio)
                             @foreach ($sompadokio->PostlimitTwo as $item)
                               <a href="{{$item->route}}">
                                <div class="my-2">
                                     @if ($item->img_path)
                                    <img class="h-40 object-fill" src="{{$item->img_path}}" alt="img">
                                    @else    
                                     <img class="h-40 w-full object-cover" src="{{asset('/uploads/ghatail-post-default-image.jpg')}}" alt="img">
                                    @endif
                                    <p class="mt-2">{{$item->headline}}</p>
                                </div>  
                                </a>      
                             @endforeach
                         @endif
                             {{-- <div class="my-2">
                                <img src="{{asset('/uploads/ghatail-post-default-image.jpg')}}" alt="img">
                                <p class="mt-2">টাংগাইলে নবাগত ক্যাডারদের শীতবস্ত্র বিতরণ</p>
                             </div>    --}}
                     </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('head')
    
@endsection
@section('script')
<script src="{{asset('js/jquery.bongabdo.js')}}"></script>
    <script>
        $('.clickLatest').click(() => {
            $('.latestNews').removeClass('hideMe')
            $('.latestCorona').addClass('hideMe')
             $('.clickCorona').removeClass('border-b-2 border-blue-500 text-blue-500')
             $('.clickLatest').addClass('border-b-2 border-blue-500 text-blue-500')
        })
        $('.clickCorona').click(() => {
            $('.latestNews').addClass('hideMe')
            $('.latestCorona').removeClass('hideMe')
            $('.clickLatest').removeClass('border-b-2 border-blue-500 text-blue-500')
            $('.clickCorona').addClass('border-b-2 border-blue-500 text-blue-500')
        })

        $(document).ready(function(){
          $('.bongabdo').bongabdo();
        });

        
    </script>
@endsection