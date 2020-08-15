@extends('layouts.app')
@section('content')

    <style>
* {
transition: 0.2s all;
}
.shadow-btn{
background-color : #EF426F;
box-shadow: 5px 5px 0px 1px  #363D87;
}
.shadow-btn:hover{
background-color: #FF4778;
transition-timing-function: linear;
box-shadow: 2px 2px 0px 1px  #363D87;
}

</style>
<div class=" mt-4 bg-white">
<div class="top-10">
<div class="flex justify-center">
<div class="m-auto w-1/2 w-1/3">
  <div class="justify-start px-16">
    <div class="">
      <h1 class="text-5xl leading-0 p-2  break-words font-medium">
        Consectetur adipiscing elit
      </h1>
      <p class="text-lg  font-light text-left break-words">
        Quisque tincidunt: Quisque ultricies, tortor vitae tincidunt molestie, arcu enim imperdiet urna, id aliquet ipsum massa luctus ipsum.
      </p>
    </div>
    <div class="mt-2 flex">
      <button class="appearance-none focus:outline-none px-4 py-2 font-light shadow-btn text-white uppercase">
        Quero me candidatar
      </button><button> 
    </button></div>
  </div>
</div>
<div class="relative w-1/2" style="
bottom: -3rem;
">
<img src="{{asset('img/header-section-image.png') }}" class="bg-blue-400 bg-contain bg-gray-300 bottom-0 h-full relative right-0 w-full">
</div>
</div>
</div>
</div><div class="w-full bg-green-400 h-screen">
</div>

@endsection