@extends('layouts.app')
@section('content')
<div class="fixed bottom-0 right-0 mr-8 mb-8 h-12 w-12 rounded-full bg-white shadow-xl z-20">
  <div class="flex h-full items-center justify-center w-full p-2">
    <a href="#" class="">
      <svg class="whatsapp-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 25 25">
        <defs>
          <style>
            .cls-1 {
              fill: #00bf6f;
              fill-rule: evenodd;
            }
          </style>
        </defs>
        <path id="logo-whatsapp" class="cls-1" d="M53.358,35.632a12.425,12.425,0,0,0-19.591,14.95L32,57l6.6-1.723a12.479,12.479,0,0,0,5.949,1.507h.005A12.437,12.437,0,0,0,57,44.395,12.287,12.287,0,0,0,53.358,35.632Zm-8.805,19.06h0a10.365,10.365,0,0,1-5.266-1.435l-.378-.223-3.916,1.022,1.045-3.8-.246-.391a10.355,10.355,0,1,1,8.764,4.826Zm5.675-7.711c-.311-.155-1.842-.9-2.125-1.007s-.493-.155-.7.155-.8,1-.985,1.214-.363.232-.674.077a8.507,8.507,0,0,1-2.5-1.536,9.335,9.335,0,0,1-1.73-2.144c-.181-.31-.02-.478.136-.632.14-.139.311-.362.467-.542a2.094,2.094,0,0,0,.311-.517.568.568,0,0,0-.026-.542c-.078-.155-.7-1.679-.959-2.3-.253-.6-.509-.522-.7-.531s-.391-.011-.6-.011a1.146,1.146,0,0,0-.829.387,3.469,3.469,0,0,0-1.089,2.583,6.023,6.023,0,0,0,1.27,3.2,13.828,13.828,0,0,0,5.313,4.674,18.031,18.031,0,0,0,1.773.652,4.282,4.282,0,0,0,1.959.123,3.2,3.2,0,0,0,2.1-1.472,2.584,2.584,0,0,0,.181-1.472C50.746,47.213,50.538,47.135,50.227,46.981Z" transform="translate(-32 -31.999)"/>
      </svg>
    </a>
  </div>
</div>
<!-- Navigation -->
<!-- Header -->
<section id="header-section" class="mt-4 bg-white">
  <div class="mx-auto flex flex-wrap justify-center">
    <div class="container m-auto px-16 w-1/2">
      <div class="justify-start px-4 py-3">
        <div class="mb-6">
          <h1 class="break-words text-gray-800 font-medium leading-0 lg:text-5xl py-2 pr-8 text-3xl">
            Consectetur adipiscing elit
          </h1>
          <p class="break-words font-light lg:text-lg text-left text-md text-gray-900">
            <strong class="font-medium" >Quisque tincidunt:</strong> Quisque ultricies, tortor vitae tincidunt molestie, arcu enim imperdiet urna, id aliquet ipsum massa luctus ipsum.
          </p>
        </div>
        <div class="flex py-3">
          <button class="btn cta-btn xl:w-9/12" data-hover="Quero me Inscrever">
            <span> Quero me candidatar </span>
          </button>
        </div>
      </div>
    </div>
    <div class="md:relative md:w-1/2 w-full header-section-img">
      <span class="absolute h-10 w-10 header-section-arrow z-10">
      </span> 
      <img src="http://localhost:8080/img/header-section-image.png" class="bg-contain bg-gray-300 bottom-0 h-full relative right-0 w-full">
    </div>
  </div>
</section>
<section id="video-section" class="pt-40 md:px-20 section-2" style="background-color: #00BF6F">
  <div class="container bg-white m-auto flex flex-wrap justify-center mx-auto">
    <div class="w-1/2 header-section-img md:relative  shadow-xl ">
      <div class="justify-start">
        <div class="border-l-8 border-blue-800 mb-2 px-16">
          <h1 class="break-words text-pink-500 font-medium leading-0 lg:text-5xl p-2 text-3xl">
            Proin eu massa odio?
          </h1>
        </div>
        <div class="flexbreak-words font-normal lg:text-lg text-left text-md text-gray-800 px-16 py-8">
          <p>
            <strong class="text-medium">Maecenas faucibus elementum ipsum nec rhoncus. Integer a tortor vitae felis lobortis rutrum.</strong>
            Donec convallis turpis et tincidunt pretium. Integer placerat luctus euismod. Nunc congue magna vel elementum.
          </p>
        </div>
      </div>
    </div>
      <div class="video-container bottom-0 h-full md:relative md:w-1/2 right-0 w-full">
        <div class="video">
          <svg xmlns="http://www.w3.org/2000/svg" width="108" height="108" viewBox="0 0 108 108" class="absolute z-10 play-icon">    
            <g id="Play" transform="translate(4 4)">
              <path id="Path_3096" data-name="Path 3096" class="circle" d="M164,114a50,50,0,1,0-50,50A50.013,50.013,0,0,0,164,114Z" transform="translate(-64 -64)" stroke-width="8px"></path>
              <path id="Path_3097" data-name="Path 3097" d="M204.25,217.281l29.8-18.005a2.836,2.836,0,0,0,0-4.844l-29.8-18.005a2.807,2.807,0,0,0-4.25,2.424v36.005a2.807,2.807,0,0,0,4.25,2.424Z" transform="translate(-164.583 -146.854)" fill="white" stroke="none"></path>
            </g>
          </svg>
          <img src="http://localhost:8080/img/Video.png" alt="Video Preview" class="object-fill bg-black h-full">
        </div>
      </div>
  </div>
</section>
<section id="section-3" class=" md:px-20 section-2 bg-white">
  <div class="container m-auto flex flex-wrap justify-center mx-auto">
    <div class="container m-auto w-1/2">
      <h1 class="break-words text-gray-800 font-medium leading-0 lg:text-5xl p-2 text-3xl">
        Ut eu dolor vitae elit bibendum fringilla elit...
      </h1>
    </div>
    <div class="md:w-1/2 flex justify-end">
        <img src="http://localhost:8080/img/Image 50.png" alt="" class="object-fill  h-full">
    </div>
  </div>
</section>
<section id="section-4" class="section-2">
  <div class="m-auto flex flex-wrap justify-center mx-auto">
    <div class="m-auto w-1/2 h-64" style="background-color: #00BF6F">
      1
    </div>
    <div class="m-auto w-1/2 bg-white h-64">
      2
    </div>
</section>
<section id="section-5" class="section-2 h-64">
  <div class="m-auto flex flex-wrap justify-center mx-auto">
    <div class="m-auto w-1/2 bg-white">
      1
    </div>
    <div class="m-auto w-1/2  h-64" style="background-color: #EF426F">
      2
    </div>
</section>
<section id="section-6" class="section-2 h-64">
  <div class="m-auto flex flex-wrap justify-center mx-auto" >
    <div class="m-auto w-1/2  h-64 " style="background-color: #363D87">
      1
    </div>
    <div class="m-auto w-1/2 bg-white  h-64">
      2
    </div>
</section>
<section id="section-6" class="section-2 h-64">
  <div class="m-auto flex flex-wrap justify-center mx-auto" >
    <div class="m-auto w-1/2  h-64 bg-white" >
      1
    </div>
    <div class="m-auto w-1/2 h-64 bg-gray-400">
      2
    </div>
</section>
<section id="section-end" class="section-2 bg-gray-900 " style="height:450px">
</section>
<footer class="bg-gray-200 h-screen">
</footer>
@endsection