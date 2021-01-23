@extends('backend.layout.master')
@section('content')
    <section class="md:w-full lg:w-full xl:w-full">
    <div class="bg-gray-800 pt-3">
        <div class=" bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
        <h3 class="font-bold pl-2">Setting</h3>
        </div>
    </div>

    <div class="p-5 m-5 bg-white text-gray-700 shadow-lg">
    <div>
        <form action="{{route('setting')}}" method="POST">
            @csrf

            <div class="sm:w-full md:w-full lg:w-1/2 xl:w-1/2 m-2">
                <label for="user_name" class="block">Ad Code</label>
                <textarea name="ad_code" cols="30" rows="10" class="w-full py-2 mt-2 border-2 border-gray-200 rounded px-2">
                    {{$ad_code->value ?? ''}}
                </textarea>
                {{-- <input type="text" name="ad_code" id="name" placeholder="Enter your name"> --}}
            </div>

            <button class="py-1 mt-5 px-5 border-2 ml-2 bg-green-400 border-green-400 text-white font-semibold shadow-lg">SUBMIT</button>
        </form>
    </div>
    </div>
    </section>

@endsection
