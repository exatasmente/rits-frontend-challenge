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
      <img src="{{ asset('img/header-section-image.png') }}" class="bg-contain bg-gray-300 bottom-0 h-full relative right-0 w-full">
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
          <img src="{{  asset('img/Video.png')}}" alt="Video Preview" class="object-fill bg-black h-full">
        </div>
      </div>
  </div>
</section>
<section id="section-3">
  <div class="container m-auto flex flex-wrap justify-center mx-auto">
    <div class="container m-auto w-1/2">
      <h1 class="break-words text-gray-800 font-medium leading-0 lg:text-5xl p-2 text-3xl">
        Ut eu dolor vitae elit bibendum fringilla elit...
      </h1>
    </div>
    <div class="md:w-1/2 flex justify-end">
        <img src="{{ asset('img/Image 50.png') }}" alt="" class="object-fill  h-full">
    </div>
  </div>
</section>
<section id="features">
  <div id="feature-1" class="section-2">
    <div class="m-auto flex flex-wrap justify-center mx-auto">
      <div class="relative w-1/2" style="background-color: #00BF6F">
        <div class="absolute right-0 top-0 w-8/12" style="top: -10rem;">
          <img  src="{{ asset('img/iStock-511918608.png') }}">
        </div>
        <div>
          <h1 class="text-lg font-medium"><span class="text-white">Suspendisse feugiat orci sed velit pulvinar.</span> Aliquam vitae lorem?</h1>
        </div>
      </div>
      <div class="m-auto w-1/2 bg-white p-12">
        <ul>
          <li class="flex flex-wrap -mx-2 overflow-hidden">
              <div class="my-2 px-2 w-2/12 overflow-hidden">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60">
                  <defs>
                    <style>
                      .cls-1 {
                        fill: #00bf6f;
                      }
                
                      .cls-2 {
                        fill: #fff;
                      }
                
                      .cls-3 {
                        fill: #003575;
                      }
                    </style>
                  </defs>
                  <g id="Group_13131" data-name="Group 13131" transform="translate(-261.013 -337.188)">
                    <g id="Group_13214" data-name="Group 13214">
                      <path id="Path_3237" data-name="Path 3237" class="cls-1" d="M0,0H6.989V28.991H0Z" transform="translate(262.468 366.834)"/>
                      <path id="Path_3111" data-name="Path 3111" class="cls-1" d="M278.83,380.161V341.979l3.665-3.665H309.98l3.3,3.3v43.828H296.277v-4.687Z" transform="translate(6.479 0.41)"/>
                      <path id="Path_3113" data-name="Path 3113" class="cls-1" d="M288.893,352.314v10.659l8.693-5.115Z" transform="translate(10.138 5.501)"/>
                    </g>
                    <path id="Path_3110" data-name="Path 3110" class="cls-2" d="M295.49,373.689h17.748v6.424l-2.508,2.508H282.621l-3.668-3.668,3.571-3.571h9.983Z" transform="translate(6.524 13.273)"/>
                    <path id="Path_3112" data-name="Path 3112" class="cls-2" d="M281.87,360.877h-8.693l-5.284,4.858V382.5l7.415,2.749,6.563-.682,5.355-4.517,10.229-.341,2.542-2.9-.741-3.883H281.785Z" transform="translate(2.502 8.614)"/>
                    <circle id="Ellipse_71" data-name="Ellipse 71" class="cls-2" cx="11.586" cy="11.586" r="11.586" transform="translate(291.17 351.774)"/>
                    <circle id="Ellipse_72" data-name="Ellipse 72" class="cls-2" cx="11.801" cy="11.801" r="11.801" transform="translate(290.698 351.774)"/>
                    <g id="Group_13130" data-name="Group 13130" transform="translate(261.013 337.188)">
                      <path id="Path_3114" data-name="Path 3114" class="cls-3" d="M314.8,337.188H290.193a6.251,6.251,0,0,0-6.209,6.28v23.72a.629.629,0,0,1-.629.629H278.24a6.112,6.112,0,0,0-4.252,1.717l-.027.026-1.672,1.488a.63.63,0,0,1-.419.16.627.627,0,0,1-.627-.629v-3.39a1.288,1.288,0,0,0-1.287-1.286H262.3a1.287,1.287,0,0,0-1.286,1.286V395.9a1.287,1.287,0,0,0,1.286,1.286h7.657a1.288,1.288,0,0,0,1.287-1.286v-2.2a.625.625,0,0,1,.32-.548.618.618,0,0,1,.307-.08.631.631,0,0,1,.329.093,13.505,13.505,0,0,0,7.328,2.111,9.937,9.937,0,0,0,4.7-1.092.628.628,0,0,1,.811.213,6.165,6.165,0,0,0,5.157,2.793H314.8a6.251,6.251,0,0,0,6.209-6.28V343.468A6.251,6.251,0,0,0,314.8,337.188Zm-46.135,56.8a.628.628,0,0,1-.629.629h-3.828a.628.628,0,0,1-.629-.629V369.1a.629.629,0,0,1,.629-.629h3.828a.629.629,0,0,1,.629.629Zm16.7-3.635c-1.733,1.313-3.1,2.35-5.842,2.35a11.951,11.951,0,0,1-7.4-2.671c-.214-.149-.41-.28-.61-.413a.626.626,0,0,1-.278-.522V375.7a.624.624,0,0,1,.21-.469l4.285-3.818a3.591,3.591,0,0,1,2.5-1.028h5.116a.63.63,0,0,1,.629.629v7.657a.629.629,0,0,1-.629.629h-1.915a1.286,1.286,0,0,0,0,2.572h17.284a2.451,2.451,0,0,1,2.487,2.467,2.589,2.589,0,0,1-2.487,2.618h-3.893A13.946,13.946,0,0,0,285.369,390.352Zm33.072.556a3.677,3.677,0,0,1-3.637,3.708H290.193a3.624,3.624,0,0,1-3.019-1.665.626.626,0,0,1,.147-.847,11,11,0,0,1,7.52-2.573h3.884a4.943,4.943,0,0,0,3.719-1.7.632.632,0,0,1,.469-.211h14.9a.628.628,0,0,1,.629.629Zm0-6.491a.628.628,0,0,1-.629.627H304.405a.628.628,0,0,1-.447-.187.635.635,0,0,1-.181-.449c0-.033,0-.064.008-.1a5.056,5.056,0,0,0-5.059-5.01h-11.54a.628.628,0,0,1-.629-.629V343.468a3.676,3.676,0,0,1,3.637-3.706H314.8a3.676,3.676,0,0,1,3.637,3.706Z" transform="translate(-261.013 -337.188)"/>
                      <path id="Path_3115" data-name="Path 3115" class="cls-3" d="M284.76,345.376H303.9a1.286,1.286,0,1,0,0-2.572H284.76a1.286,1.286,0,1,0,0,2.572Z" transform="translate(-252.845 -335.146)"/>
                      <path id="Path_3116" data-name="Path 3116" class="cls-3" d="M294.842,347.015a12.771,12.771,0,1,0,12.772,12.772A12.785,12.785,0,0,0,294.842,347.015Zm0,22.97a10.2,10.2,0,1,1,10.2-10.2A10.21,10.21,0,0,1,294.842,369.985Z" transform="translate(-253.356 -333.615)"/>
                      <path id="Path_3117" data-name="Path 3117" class="cls-3" d="M299.2,357.152l-9.569-5.742a1.306,1.306,0,0,0-.667-.184,1.274,1.274,0,0,0-.63.168,1.288,1.288,0,0,0-.653,1.118V364a1.287,1.287,0,0,0,1.949,1.1l9.57-5.744a1.285,1.285,0,0,0,0-2.205Zm-4.058,1.642-3.937,2.36a.628.628,0,0,1-.952-.539v-4.722a.628.628,0,0,1,.952-.539l3.937,2.362a.628.628,0,0,1,0,1.077Z" transform="translate(-251.314 -332.083)"/>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="my-2 px-2 w-10/12 overflow-hidden">
                <p class="text-lg xl:text-2xl">
                  <strong class="text-medium">Maecenas faucibus elementum ipsum nec rhoncus</strong>, Nullam sit amet pretium justo, metus.  
                </p>
              </div>
          </li>
          <li class="flex flex-wrap -mx-2 overflow-hidden">
            <div class="my-2 px-2 w-2/12 overflow-hidden">
              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60">
                <defs>
                  <style>
                    .cls-1 {
                      fill: #00bf6f;
                    }
              
                    .cls-2 {
                      fill: #fff;
                    }
              
                    .cls-3 {
                      fill: #003575;
                    }
                  </style>
                </defs>
                <g id="Group_13131" data-name="Group 13131" transform="translate(-261.013 -337.188)">
                  <g id="Group_13214" data-name="Group 13214">
                    <path id="Path_3237" data-name="Path 3237" class="cls-1" d="M0,0H6.989V28.991H0Z" transform="translate(262.468 366.834)"/>
                    <path id="Path_3111" data-name="Path 3111" class="cls-1" d="M278.83,380.161V341.979l3.665-3.665H309.98l3.3,3.3v43.828H296.277v-4.687Z" transform="translate(6.479 0.41)"/>
                    <path id="Path_3113" data-name="Path 3113" class="cls-1" d="M288.893,352.314v10.659l8.693-5.115Z" transform="translate(10.138 5.501)"/>
                  </g>
                  <path id="Path_3110" data-name="Path 3110" class="cls-2" d="M295.49,373.689h17.748v6.424l-2.508,2.508H282.621l-3.668-3.668,3.571-3.571h9.983Z" transform="translate(6.524 13.273)"/>
                  <path id="Path_3112" data-name="Path 3112" class="cls-2" d="M281.87,360.877h-8.693l-5.284,4.858V382.5l7.415,2.749,6.563-.682,5.355-4.517,10.229-.341,2.542-2.9-.741-3.883H281.785Z" transform="translate(2.502 8.614)"/>
                  <circle id="Ellipse_71" data-name="Ellipse 71" class="cls-2" cx="11.586" cy="11.586" r="11.586" transform="translate(291.17 351.774)"/>
                  <circle id="Ellipse_72" data-name="Ellipse 72" class="cls-2" cx="11.801" cy="11.801" r="11.801" transform="translate(290.698 351.774)"/>
                  <g id="Group_13130" data-name="Group 13130" transform="translate(261.013 337.188)">
                    <path id="Path_3114" data-name="Path 3114" class="cls-3" d="M314.8,337.188H290.193a6.251,6.251,0,0,0-6.209,6.28v23.72a.629.629,0,0,1-.629.629H278.24a6.112,6.112,0,0,0-4.252,1.717l-.027.026-1.672,1.488a.63.63,0,0,1-.419.16.627.627,0,0,1-.627-.629v-3.39a1.288,1.288,0,0,0-1.287-1.286H262.3a1.287,1.287,0,0,0-1.286,1.286V395.9a1.287,1.287,0,0,0,1.286,1.286h7.657a1.288,1.288,0,0,0,1.287-1.286v-2.2a.625.625,0,0,1,.32-.548.618.618,0,0,1,.307-.08.631.631,0,0,1,.329.093,13.505,13.505,0,0,0,7.328,2.111,9.937,9.937,0,0,0,4.7-1.092.628.628,0,0,1,.811.213,6.165,6.165,0,0,0,5.157,2.793H314.8a6.251,6.251,0,0,0,6.209-6.28V343.468A6.251,6.251,0,0,0,314.8,337.188Zm-46.135,56.8a.628.628,0,0,1-.629.629h-3.828a.628.628,0,0,1-.629-.629V369.1a.629.629,0,0,1,.629-.629h3.828a.629.629,0,0,1,.629.629Zm16.7-3.635c-1.733,1.313-3.1,2.35-5.842,2.35a11.951,11.951,0,0,1-7.4-2.671c-.214-.149-.41-.28-.61-.413a.626.626,0,0,1-.278-.522V375.7a.624.624,0,0,1,.21-.469l4.285-3.818a3.591,3.591,0,0,1,2.5-1.028h5.116a.63.63,0,0,1,.629.629v7.657a.629.629,0,0,1-.629.629h-1.915a1.286,1.286,0,0,0,0,2.572h17.284a2.451,2.451,0,0,1,2.487,2.467,2.589,2.589,0,0,1-2.487,2.618h-3.893A13.946,13.946,0,0,0,285.369,390.352Zm33.072.556a3.677,3.677,0,0,1-3.637,3.708H290.193a3.624,3.624,0,0,1-3.019-1.665.626.626,0,0,1,.147-.847,11,11,0,0,1,7.52-2.573h3.884a4.943,4.943,0,0,0,3.719-1.7.632.632,0,0,1,.469-.211h14.9a.628.628,0,0,1,.629.629Zm0-6.491a.628.628,0,0,1-.629.627H304.405a.628.628,0,0,1-.447-.187.635.635,0,0,1-.181-.449c0-.033,0-.064.008-.1a5.056,5.056,0,0,0-5.059-5.01h-11.54a.628.628,0,0,1-.629-.629V343.468a3.676,3.676,0,0,1,3.637-3.706H314.8a3.676,3.676,0,0,1,3.637,3.706Z" transform="translate(-261.013 -337.188)"/>
                    <path id="Path_3115" data-name="Path 3115" class="cls-3" d="M284.76,345.376H303.9a1.286,1.286,0,1,0,0-2.572H284.76a1.286,1.286,0,1,0,0,2.572Z" transform="translate(-252.845 -335.146)"/>
                    <path id="Path_3116" data-name="Path 3116" class="cls-3" d="M294.842,347.015a12.771,12.771,0,1,0,12.772,12.772A12.785,12.785,0,0,0,294.842,347.015Zm0,22.97a10.2,10.2,0,1,1,10.2-10.2A10.21,10.21,0,0,1,294.842,369.985Z" transform="translate(-253.356 -333.615)"/>
                    <path id="Path_3117" data-name="Path 3117" class="cls-3" d="M299.2,357.152l-9.569-5.742a1.306,1.306,0,0,0-.667-.184,1.274,1.274,0,0,0-.63.168,1.288,1.288,0,0,0-.653,1.118V364a1.287,1.287,0,0,0,1.949,1.1l9.57-5.744a1.285,1.285,0,0,0,0-2.205Zm-4.058,1.642-3.937,2.36a.628.628,0,0,1-.952-.539v-4.722a.628.628,0,0,1,.952-.539l3.937,2.362a.628.628,0,0,1,0,1.077Z" transform="translate(-251.314 -332.083)"/>
                  </g>
                </g>
              </svg>
            </div>
            <div class="my-2 px-2 w-10/12 overflow-hidden">
              <p class="text-lg xl:text-2xl">
                <strong class="text-medium">Maecenas faucibus elementum ipsum nec rhoncus</strong>, Nullam sit amet pretium justo, metus.  
              </p>
            </div>
        </li>
          <li class="flex flex-wrap -mx-2 overflow-hidden">
            <div class="my-2 px-2 w-2/12 overflow-hidden">
              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60">
                <defs>
                  <style>
                    .cls-1 {
                      fill: #00bf6f;
                    }
              
                    .cls-2 {
                      fill: #fff;
                    }
              
                    .cls-3 {
                      fill: #003575;
                    }
                  </style>
                </defs>
                <g id="Group_13131" data-name="Group 13131" transform="translate(-261.013 -337.188)">
                  <g id="Group_13214" data-name="Group 13214">
                    <path id="Path_3237" data-name="Path 3237" class="cls-1" d="M0,0H6.989V28.991H0Z" transform="translate(262.468 366.834)"/>
                    <path id="Path_3111" data-name="Path 3111" class="cls-1" d="M278.83,380.161V341.979l3.665-3.665H309.98l3.3,3.3v43.828H296.277v-4.687Z" transform="translate(6.479 0.41)"/>
                    <path id="Path_3113" data-name="Path 3113" class="cls-1" d="M288.893,352.314v10.659l8.693-5.115Z" transform="translate(10.138 5.501)"/>
                  </g>
                  <path id="Path_3110" data-name="Path 3110" class="cls-2" d="M295.49,373.689h17.748v6.424l-2.508,2.508H282.621l-3.668-3.668,3.571-3.571h9.983Z" transform="translate(6.524 13.273)"/>
                  <path id="Path_3112" data-name="Path 3112" class="cls-2" d="M281.87,360.877h-8.693l-5.284,4.858V382.5l7.415,2.749,6.563-.682,5.355-4.517,10.229-.341,2.542-2.9-.741-3.883H281.785Z" transform="translate(2.502 8.614)"/>
                  <circle id="Ellipse_71" data-name="Ellipse 71" class="cls-2" cx="11.586" cy="11.586" r="11.586" transform="translate(291.17 351.774)"/>
                  <circle id="Ellipse_72" data-name="Ellipse 72" class="cls-2" cx="11.801" cy="11.801" r="11.801" transform="translate(290.698 351.774)"/>
                  <g id="Group_13130" data-name="Group 13130" transform="translate(261.013 337.188)">
                    <path id="Path_3114" data-name="Path 3114" class="cls-3" d="M314.8,337.188H290.193a6.251,6.251,0,0,0-6.209,6.28v23.72a.629.629,0,0,1-.629.629H278.24a6.112,6.112,0,0,0-4.252,1.717l-.027.026-1.672,1.488a.63.63,0,0,1-.419.16.627.627,0,0,1-.627-.629v-3.39a1.288,1.288,0,0,0-1.287-1.286H262.3a1.287,1.287,0,0,0-1.286,1.286V395.9a1.287,1.287,0,0,0,1.286,1.286h7.657a1.288,1.288,0,0,0,1.287-1.286v-2.2a.625.625,0,0,1,.32-.548.618.618,0,0,1,.307-.08.631.631,0,0,1,.329.093,13.505,13.505,0,0,0,7.328,2.111,9.937,9.937,0,0,0,4.7-1.092.628.628,0,0,1,.811.213,6.165,6.165,0,0,0,5.157,2.793H314.8a6.251,6.251,0,0,0,6.209-6.28V343.468A6.251,6.251,0,0,0,314.8,337.188Zm-46.135,56.8a.628.628,0,0,1-.629.629h-3.828a.628.628,0,0,1-.629-.629V369.1a.629.629,0,0,1,.629-.629h3.828a.629.629,0,0,1,.629.629Zm16.7-3.635c-1.733,1.313-3.1,2.35-5.842,2.35a11.951,11.951,0,0,1-7.4-2.671c-.214-.149-.41-.28-.61-.413a.626.626,0,0,1-.278-.522V375.7a.624.624,0,0,1,.21-.469l4.285-3.818a3.591,3.591,0,0,1,2.5-1.028h5.116a.63.63,0,0,1,.629.629v7.657a.629.629,0,0,1-.629.629h-1.915a1.286,1.286,0,0,0,0,2.572h17.284a2.451,2.451,0,0,1,2.487,2.467,2.589,2.589,0,0,1-2.487,2.618h-3.893A13.946,13.946,0,0,0,285.369,390.352Zm33.072.556a3.677,3.677,0,0,1-3.637,3.708H290.193a3.624,3.624,0,0,1-3.019-1.665.626.626,0,0,1,.147-.847,11,11,0,0,1,7.52-2.573h3.884a4.943,4.943,0,0,0,3.719-1.7.632.632,0,0,1,.469-.211h14.9a.628.628,0,0,1,.629.629Zm0-6.491a.628.628,0,0,1-.629.627H304.405a.628.628,0,0,1-.447-.187.635.635,0,0,1-.181-.449c0-.033,0-.064.008-.1a5.056,5.056,0,0,0-5.059-5.01h-11.54a.628.628,0,0,1-.629-.629V343.468a3.676,3.676,0,0,1,3.637-3.706H314.8a3.676,3.676,0,0,1,3.637,3.706Z" transform="translate(-261.013 -337.188)"/>
                    <path id="Path_3115" data-name="Path 3115" class="cls-3" d="M284.76,345.376H303.9a1.286,1.286,0,1,0,0-2.572H284.76a1.286,1.286,0,1,0,0,2.572Z" transform="translate(-252.845 -335.146)"/>
                    <path id="Path_3116" data-name="Path 3116" class="cls-3" d="M294.842,347.015a12.771,12.771,0,1,0,12.772,12.772A12.785,12.785,0,0,0,294.842,347.015Zm0,22.97a10.2,10.2,0,1,1,10.2-10.2A10.21,10.21,0,0,1,294.842,369.985Z" transform="translate(-253.356 -333.615)"/>
                    <path id="Path_3117" data-name="Path 3117" class="cls-3" d="M299.2,357.152l-9.569-5.742a1.306,1.306,0,0,0-.667-.184,1.274,1.274,0,0,0-.63.168,1.288,1.288,0,0,0-.653,1.118V364a1.287,1.287,0,0,0,1.949,1.1l9.57-5.744a1.285,1.285,0,0,0,0-2.205Zm-4.058,1.642-3.937,2.36a.628.628,0,0,1-.952-.539v-4.722a.628.628,0,0,1,.952-.539l3.937,2.362a.628.628,0,0,1,0,1.077Z" transform="translate(-251.314 -332.083)"/>
                  </g>
                </g>
              </svg>
            </div>
            <div class="my-2 px-2 w-10/12 overflow-hidden">
              <p class="text-lg xl:text-2xl">
                <strong class="text-medium">Maecenas faucibus elementum ipsum nec rhoncus</strong>, Nullam sit amet pretium justo, metus.  
              </p>
            </div>
        </li>
        </ul>
      </div>
    </div>
  </div>
  <div id="feature-2" class="section-2 h-64">
    <div class="m-auto flex flex-wrap justify-center mx-auto">
      <div class="m-auto w-1/2 bg-white">
        1
      </div>
      <div class="m-auto w-1/2  h-64" style="background-color: #EF426F">
        2
      </div>
    </div>
  </div>
  <div id="feature-3" class="section-2 h-64">
    <div class="m-auto flex flex-wrap justify-center mx-auto" >
      <div class="m-auto w-1/2  h-64 " style="background-color: #363D87">
        1
      </div>
      <div class="m-auto w-1/2 bg-white  h-64">
        2
      </div>
    </div>
  </div>
</section>
<section id="partners" class="section-2 h-64">
  <div class="m-auto flex flex-wrap justify-center mx-auto" >
    <div class="m-auto w-1/2  h-64 bg-white" >
      1
    </div>
    <div class="m-auto w-1/2 h-64 bg-gray-400">
      2
    </div>
  </div>
</section>
<section id="more-info" class="section-2 bg-gray-900 " style="height:450px">
</section>
<footer id="footer" class="bg-gray-200 h-screen">
</footer>
@endsection