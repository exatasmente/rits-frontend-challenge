@extends('layouts.app')
@section('content')
    <div class="fixed bottom-0 right-0 mr-8 mb-8 h-12 w-12 rounded-full bg-white shadow-xl z-20">
        <div class="flex h-full items-center justify-center w-full p-2">
            <a href="#">
                <svg  class="text-theme-green fill-current" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 25 25">
                    <path id="logo-whatsapp"
                        d="M53.358,35.632a12.425,12.425,0,0,0-19.591,14.95L32,57l6.6-1.723a12.479,12.479,0,0,0,5.949,1.507h.005A12.437,12.437,0,0,0,57,44.395,12.287,12.287,0,0,0,53.358,35.632Zm-8.805,19.06h0a10.365,10.365,0,0,1-5.266-1.435l-.378-.223-3.916,1.022,1.045-3.8-.246-.391a10.355,10.355,0,1,1,8.764,4.826Zm5.675-7.711c-.311-.155-1.842-.9-2.125-1.007s-.493-.155-.7.155-.8,1-.985,1.214-.363.232-.674.077a8.507,8.507,0,0,1-2.5-1.536,9.335,9.335,0,0,1-1.73-2.144c-.181-.31-.02-.478.136-.632.14-.139.311-.362.467-.542a2.094,2.094,0,0,0,.311-.517.568.568,0,0,0-.026-.542c-.078-.155-.7-1.679-.959-2.3-.253-.6-.509-.522-.7-.531s-.391-.011-.6-.011a1.146,1.146,0,0,0-.829.387,3.469,3.469,0,0,0-1.089,2.583,6.023,6.023,0,0,0,1.27,3.2,13.828,13.828,0,0,0,5.313,4.674,18.031,18.031,0,0,0,1.773.652,4.282,4.282,0,0,0,1.959.123,3.2,3.2,0,0,0,2.1-1.472,2.584,2.584,0,0,0,.181-1.472C50.746,47.213,50.538,47.135,50.227,46.981Z"
                        transform="translate(-32 -31.999)" />
                </svg>
            </a>
        </div>
    </div>
    <nav id="nav" class="flex justify-between pt-4 px-32">
      <div class="w-2/12">
            <img src="{{ asset('img/rits-logo.png') }}">
      </div>
      <div class="flex items-baseline justify-end">
        <a href="#more-info" class="text-sm font-normal px-3 py-2 "> Proin</a>
        <a href="#nav" class="text-sm font-normal px-3 py-2">Atendimento</a>
      </div>
    </nav>
    <!-- Header -->
    <section id="header-section" class="mt-4 bg-white">
        <div class="mx-auto flex flex-wrap justify-center">
            <div class="container m-auto w-1/2">
                <div class="justify-start m-auto px-4 py-3 w-6/12">
                    <div class="my-2">
                        <h1 class="break-words text-theme-black font-medium leading-0 lx:text-5xl py-2 pr-8 text-4xl">
                            Consectetur adipiscing elit
                        </h1>
                        <p class="break-words text-theme-black text-left text-medium text-sm">
                            <strong class="font-medium">Quisque tincidunt:</strong> Quisque ultricies, tortor vitae
                            tincidunt molestie, arcu enim imperdiet urna, id aliquet ipsum massa luctus ipsum.
                        </p>
                    </div>
                    <div class="flex py-3">
                        <button class="btn cta-btn py-3 text-xs xl:w-9/12" data-hover="Quero me Inscrever">
                            <span> Quero me candidatar </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="md:relative md:w-1/2 w-full header-section-img">
                <span class="absolute h-10 w-10 header-section-arrow z-10">
                </span>
                <img src="{{ asset('img/header-section-image.png') }}"
                    class="bg-contain bg-gray-300 bottom-0 h-full relative right-0 w-full">
            </div>
        </div>
    </section>
    <section id="video-section" class="bg-theme-green lg:pt-32 pt-2" >
        <div class="justify-center lg:flex lg:w-8/12 md:flex-wrap mx-auto w-full">
            <div class="bg-white md:relative w-1/2 -mb-1">
                <div class="xl:absolute bottom-0 justify-start shadow-xl" style="bottom: -3rem;">
                  <div class="flex-col m-auto">
                    <div class="border-theme-blue border-l-8 mt-4">
                        <h1 class="break-words font-medium leading-0 lg:text-4xl p-2 px-16 text-3xl text-theme-pink">
                            Proin eu massa odio?
                        </h1>
                    </div>
                    <div class="break-words flex font-normal lg:text-md px-16 py-8 relative text-theme-black text-left text-sm">
                        <p>
                            <strong class="text-medium">Maecenas faucibus elementum ipsum nec rhoncus. Integer a tortor
                                vitae felis lobortis rutrum.</strong>
                            Donec convallis turpis et tincidunt pretium. Integer placerat luctus euismod. Nunc congue magna
                            vel elementum.
                        </p>
                    </div>
                  </div>
                </div>
                
            </div>
            <div class="bottom-0 md:relative md:w-1/2 video-container">
                <div class="relative video">
                    <svg xmlns="http://www.w3.org/2000/svg" width="108" height="108" viewBox="0 0 108 108"
                        class="absolute z-10 play-icon">
                        <g id="Play" transform="translate(4 4)">
                            <path id="Path_3096" data-name="Path 3096" class="circle"
                                d="M164,114a50,50,0,1,0-50,50A50.013,50.013,0,0,0,164,114Z" transform="translate(-64 -64)"
                                stroke-width="8px"></path>
                            <path id="Path_3097" data-name="Path 3097"
                                d="M204.25,217.281l29.8-18.005a2.836,2.836,0,0,0,0-4.844l-29.8-18.005a2.807,2.807,0,0,0-4.25,2.424v36.005a2.807,2.807,0,0,0,4.25,2.424Z"
                                transform="translate(-164.583 -146.854)" fill="white" stroke="none"></path>
                        </g>
                    </svg>
                    <img src="http://localhost:8080/img/Video.png" alt="Video Preview" class="object-fill bg-theme-black h-full">
                </div>
            </div>
        </div>
    </section>
    <section id="section-3">
        <div class="container m-auto flex flex-wrap justify-center mx-auto w-8/12">
            <div class="container m-auto w-1/2">
                <h1 class="break-words text-theme-black font-medium leading-0 lg:text-5xl p-2 text-3xl">
                    Ut eu dolor vitae elit bibendum fringilla elit...
                </h1>
            </div>
            <div class="md:w-1/2 flex justify-end">
                <img src="{{ asset('img/Image 50.png') }}" alt="" class="object-fill  h-full">
            </div>
        </div>
    </section>
    <section id="features" class="pt-10">
        <div id="feature-1" class="flex flex-wrap">
            <div class="-mt-1 flex flex-wrap justify-end w-1/2 bg-theme-green">
                <div class="-mt-1 flex justify-end w-full ">
                    <div class="w-4/12">
                        <div class="bg-white h-32 right-0 top-0 w-full"></div>
                    </div>
                    <div class="right-0 top-0 w-8/12">
                        <img src="{{ asset('img/image-from-rawpixel-id-2335470-original.png') }}" class="w-full"
                            style="top: -5rem;">
                    </div>
                </div>
                <div class="container my-auto pr-32 py-8 w-8/12 bg-theme-green">
                    <h1 class="font-medium text-3xl"><span class="text-white">Suspendisse feugiat orci sed velit
                            pulvinar.</span> Aliquam vitae lorem?</h1>
                </div>
                <div class="flex w-full">
                    <div class="bottom-0 m-auto p-2 relative" style="bottom: -1rem;">
                        <button class="btn cta-btn py-3 text-xs" data-hover="Quero me Inscrever">
                            <span> Quero me candidatar </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="m-auto w-1/2 bg-white px-4 py-4">
                <ul class="w-8/12">
                    <li class="-mx-2 my-2 flex overflow-hidden">
                        <div class="my-2 w-2/12">
                            <svg xmlns="http://www.w3.org/2000/svg" class="feature-1 icon" width="60" height="60" viewBox="0 0 60 60">
                                <g id="Group_13131" data-name="Group 13131" transform="translate(-261.013 -337.188)">
                                    <g id="Group_13214" data-name="Group 13214">
                                        <path id="Path_3237" data-name="Path 3237" class="cls-1" d="M0,0H6.989V28.991H0Z"
                                            transform="translate(262.468 366.834)"></path>
                                        <path id="Path_3111" data-name="Path 3111" class="cls-1"
                                            d="M278.83,380.161V341.979l3.665-3.665H309.98l3.3,3.3v43.828H296.277v-4.687Z"
                                            transform="translate(6.479 0.41)"></path>
                                        <path id="Path_3113" data-name="Path 3113" class="cls-1"
                                            d="M288.893,352.314v10.659l8.693-5.115Z" transform="translate(10.138 5.501)">
                                        </path>
                                    </g>
                                    <path id="Path_3110" data-name="Path 3110" class="cls-2"
                                        d="M295.49,373.689h17.748v6.424l-2.508,2.508H282.621l-3.668-3.668,3.571-3.571h9.983Z"
                                        transform="translate(6.524 13.273)"></path>
                                    <path id="Path_3112" data-name="Path 3112" class="cls-2"
                                        d="M281.87,360.877h-8.693l-5.284,4.858V382.5l7.415,2.749,6.563-.682,5.355-4.517,10.229-.341,2.542-2.9-.741-3.883H281.785Z"
                                        transform="translate(2.502 8.614)"></path>
                                    <circle id="Ellipse_71" data-name="Ellipse 71" class="cls-2" cx="11.586" cy="11.586"
                                        r="11.586" transform="translate(291.17 351.774)"></circle>
                                    <circle id="Ellipse_72" data-name="Ellipse 72" class="cls-2" cx="11.801" cy="11.801"
                                        r="11.801" transform="translate(290.698 351.774)"></circle>
                                    <g id="Group_13130" data-name="Group 13130" transform="translate(261.013 337.188)">
                                        <path id="Path_3114" data-name="Path 3114" class="cls-3"
                                            d="M314.8,337.188H290.193a6.251,6.251,0,0,0-6.209,6.28v23.72a.629.629,0,0,1-.629.629H278.24a6.112,6.112,0,0,0-4.252,1.717l-.027.026-1.672,1.488a.63.63,0,0,1-.419.16.627.627,0,0,1-.627-.629v-3.39a1.288,1.288,0,0,0-1.287-1.286H262.3a1.287,1.287,0,0,0-1.286,1.286V395.9a1.287,1.287,0,0,0,1.286,1.286h7.657a1.288,1.288,0,0,0,1.287-1.286v-2.2a.625.625,0,0,1,.32-.548.618.618,0,0,1,.307-.08.631.631,0,0,1,.329.093,13.505,13.505,0,0,0,7.328,2.111,9.937,9.937,0,0,0,4.7-1.092.628.628,0,0,1,.811.213,6.165,6.165,0,0,0,5.157,2.793H314.8a6.251,6.251,0,0,0,6.209-6.28V343.468A6.251,6.251,0,0,0,314.8,337.188Zm-46.135,56.8a.628.628,0,0,1-.629.629h-3.828a.628.628,0,0,1-.629-.629V369.1a.629.629,0,0,1,.629-.629h3.828a.629.629,0,0,1,.629.629Zm16.7-3.635c-1.733,1.313-3.1,2.35-5.842,2.35a11.951,11.951,0,0,1-7.4-2.671c-.214-.149-.41-.28-.61-.413a.626.626,0,0,1-.278-.522V375.7a.624.624,0,0,1,.21-.469l4.285-3.818a3.591,3.591,0,0,1,2.5-1.028h5.116a.63.63,0,0,1,.629.629v7.657a.629.629,0,0,1-.629.629h-1.915a1.286,1.286,0,0,0,0,2.572h17.284a2.451,2.451,0,0,1,2.487,2.467,2.589,2.589,0,0,1-2.487,2.618h-3.893A13.946,13.946,0,0,0,285.369,390.352Zm33.072.556a3.677,3.677,0,0,1-3.637,3.708H290.193a3.624,3.624,0,0,1-3.019-1.665.626.626,0,0,1,.147-.847,11,11,0,0,1,7.52-2.573h3.884a4.943,4.943,0,0,0,3.719-1.7.632.632,0,0,1,.469-.211h14.9a.628.628,0,0,1,.629.629Zm0-6.491a.628.628,0,0,1-.629.627H304.405a.628.628,0,0,1-.447-.187.635.635,0,0,1-.181-.449c0-.033,0-.064.008-.1a5.056,5.056,0,0,0-5.059-5.01h-11.54a.628.628,0,0,1-.629-.629V343.468a3.676,3.676,0,0,1,3.637-3.706H314.8a3.676,3.676,0,0,1,3.637,3.706Z"
                                            transform="translate(-261.013 -337.188)"></path>
                                        <path id="Path_3115" data-name="Path 3115" class="cls-3"
                                            d="M284.76,345.376H303.9a1.286,1.286,0,1,0,0-2.572H284.76a1.286,1.286,0,1,0,0,2.572Z"
                                            transform="translate(-252.845 -335.146)"></path>
                                        <path id="Path_3116" data-name="Path 3116" class="cls-3"
                                            d="M294.842,347.015a12.771,12.771,0,1,0,12.772,12.772A12.785,12.785,0,0,0,294.842,347.015Zm0,22.97a10.2,10.2,0,1,1,10.2-10.2A10.21,10.21,0,0,1,294.842,369.985Z"
                                            transform="translate(-253.356 -333.615)"></path>
                                        <path id="Path_3117" data-name="Path 3117" class="cls-3"
                                            d="M299.2,357.152l-9.569-5.742a1.306,1.306,0,0,0-.667-.184,1.274,1.274,0,0,0-.63.168,1.288,1.288,0,0,0-.653,1.118V364a1.287,1.287,0,0,0,1.949,1.1l9.57-5.744a1.285,1.285,0,0,0,0-2.205Zm-4.058,1.642-3.937,2.36a.628.628,0,0,1-.952-.539v-4.722a.628.628,0,0,1,.952-.539l3.937,2.362a.628.628,0,0,1,0,1.077Z"
                                            transform="translate(-251.314 -332.083)"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="my-2 px-12 w-10/12 overflow-hidden">
                            <p class="text-md font-normal text-theme-black">
                                <strong class="text-medium">Nunc congue</strong>, magna vel elementum.
                            </p>
                        </div>
                    </li>
                    <li class="-mx-2 my-2 flex overflow-hidden">
                        <div class="my-2 w-2/12">
                            <svg xmlns="http://www.w3.org/2000/svg" class="feature-1 icon" width="60" height="60" viewBox="0 0 60 60">
                                <g id="Group_13141" data-name="Group 13141" transform="translate(-188.306 -115.853)">
                                    <g id="Group_13215" data-name="Group 13215">
                                        <g id="Group_13135" data-name="Group 13135" transform="translate(201.286 139.012)">
                                            <g id="Group_13134" data-name="Group 13134">
                                                <path id="Path_3124" data-name="Path 3124" class="cls-1"
                                                    d="M229.317,138.4l-5.583-2.55-1.65-3.014H221.8a11.678,11.678,0,0,1-13.84.067c-.026-.022-.078.175-.1.151l-2.066,2.618-7.969,3.58V150.5h34.347v-7.883Z"
                                                    transform="translate(-197.825 -132.836)"></path>
                                            </g>
                                        </g>
                                        <g id="Group_13139" data-name="Group 13139" transform="translate(197.352 163.894)">
                                            <g id="Group_13138" data-name="Group 13138">
                                                <rect id="Rectangle_11154" data-name="Rectangle 11154" class="cls-1"
                                                    width="41.932" height="10.454"></rect>
                                            </g>
                                        </g>
                                    </g>
                                    <path id="Path_3123" data-name="Path 3123" class="cls-2"
                                        d="M217.089,125.44c0,4.82-2.4,8.727-5.355,8.727s-5.355-3.907-5.355-8.727,2.4-8.726,5.355-8.726S217.089,120.621,217.089,125.44Z"
                                        transform="translate(6.572 0.313)"></path>
                                    <g id="Group_13137" data-name="Group 13137" transform="translate(190.079 157.956)">
                                        <g id="Group_13136" data-name="Group 13136">
                                            <rect id="Rectangle_11153" data-name="Rectangle 11153" class="cls-2"
                                                width="56.761" height="4.432"></rect>
                                        </g>
                                    </g>
                                    <g id="Group_13140" data-name="Group 13140" transform="translate(188.306 115.853)">
                                        <path id="Path_3125" data-name="Path 3125" class="cls-3"
                                            d="M212.181,135.653c3.941,0,7.028-4.889,7.028-11.13,0-7.825-4.915-8.67-7.028-8.67s-7.03.845-7.03,8.67C205.151,130.764,208.238,135.653,212.181,135.653Zm0-17.228c1.1,0,4.456,0,4.456,6.1,0,4.559-2.082,8.56-4.456,8.56s-4.456-4-4.456-8.56C207.724,118.425,211.077,118.425,212.181,118.425Z"
                                            transform="translate(-182.181 -115.853)"></path>
                                        <path id="Path_3126" data-name="Path 3126" class="cls-3"
                                            d="M247.928,144.563l-3.828-3.829a1.286,1.286,0,1,0-1.819,1.818l3.269,3.269a.631.631,0,0,1,.184.445V149.3a.629.629,0,0,1-.629.629h-7.657a.628.628,0,0,1-.629-.629v-5.742a1.182,1.182,0,0,0-.008-.138,12.624,12.624,0,0,0-1.205-4.574c-1.17-1.827-2.89-2.142-4.556-2.448a7.249,7.249,0,0,1-4.1-2.944,1.29,1.29,0,0,0-1.174-.76,1.262,1.262,0,0,0-.526.115,1.284,1.284,0,0,0-.645,1.7,7.805,7.805,0,0,0,3.169,3.237,8.144,8.144,0,0,0,2.967,1.211c1.48.27,2.156.425,2.7,1.276a11.547,11.547,0,0,1,.806,3.36.638.638,0,0,1,0,.072V149.3a.629.629,0,0,1-.629.629h-3.829a.628.628,0,0,1-.627-.629v-3.828a1.286,1.286,0,1,0-2.572,0V149.3a.629.629,0,0,1-.629.629h-5.744a.628.628,0,0,1-.627-.629v-8.254a1.286,1.286,0,1,0-2.572,0V149.3a.629.629,0,0,1-.629.629h-5.742a.628.628,0,0,1-.629-.629v-3.828a1.286,1.286,0,1,0-2.572,0V149.3a.629.629,0,0,1-.629.629h-4.013a.628.628,0,0,1-.629-.629v-5.636a.626.626,0,0,1,0-.072,11.563,11.563,0,0,1,.8-3.357c.544-.854,1.229-1.009,2.858-1.306a7.954,7.954,0,0,0,2.806-1.185,7.787,7.787,0,0,0,3.17-3.235,1.282,1.282,0,0,0-1.17-1.811,1.3,1.3,0,0,0-1.177.757,5.414,5.414,0,0,1-2.187,2.108,5.483,5.483,0,0,1-2.066.863c-1.515.278-3.232.593-4.4,2.42a12.636,12.636,0,0,0-1.207,4.574c0,.045-.007.091-.007.138V149.3a.628.628,0,0,1-.629.629h-7.471a.628.628,0,0,1-.629-.629v-3.035a.625.625,0,0,1,.184-.445l3.267-3.269a1.285,1.285,0,0,0-1.818-1.818l-3.829,3.829a1.278,1.278,0,0,0-.376.91v11.486a1.287,1.287,0,0,0,1.286,1.285h5.742a.628.628,0,0,1,.629.629v9.571a1.287,1.287,0,0,0,1.286,1.286h42.113a1.288,1.288,0,0,0,1.287-1.286v-9.571a.628.628,0,0,1,.627-.629h5.744a1.287,1.287,0,0,0,1.286-1.285V145.472A1.274,1.274,0,0,0,247.928,144.563Zm-9.852,21.965a.628.628,0,0,1-.627.629H199.163a.628.628,0,0,1-.629-.629v-7.657a.628.628,0,0,1,.629-.629h38.285a.628.628,0,0,1,.627.629Zm7.658-11.486a.629.629,0,0,1-.629.629h-53.6a.628.628,0,0,1-.629-.629v-1.913a.628.628,0,0,1,.629-.629h53.6a.629.629,0,0,1,.629.629Z"
                                            transform="translate(-188.306 -109.729)"></path>
                                        <path id="Path_3127" data-name="Path 3127" class="cls-3"
                                            d="M209.363,135.389a1.286,1.286,0,1,0,1.286-1.286A1.287,1.287,0,0,0,209.363,135.389Z"
                                            transform="translate(-180.649 -109.217)"></path>
                                    </g>
                                </g>
                            </svg>

                        </div>
                        <div class="my-2 px-12 w-10/12 overflow-hidden">
                            <p class="text-md font-normal text-theme-black">
                                <strong class="text-medium">Donec convallis</strong>, turpis et tincidunt pretium.
                            </p>
                        </div>
                    </li>
                    <li class="-mx-2 my-2 flex overflow-hidden">
                        <div class="my-2 w-2/12">
                            <svg class="feature-1 icon" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60">

                                <g id="Group_13133" data-name="Group 13133" transform="translate(-287.5 -319.462)">
                                    <g id="Group_13216" data-name="Group 13216">
                                        <rect id="Rectangle_11145" data-name="Rectangle 11145" class="cls-1" width="57.443"
                                            height="33.898" transform="translate(288.443 321.306)"></rect>
                                        <rect id="Rectangle_11147" data-name="Rectangle 11147" class="cls-1" width="6.733"
                                            height="8.494" transform="translate(314.133 354.119)"></rect>
                                        <rect id="Rectangle_11150" data-name="Rectangle 11150" class="cls-1" width="6.733"
                                            height="8.494" transform="translate(291.162 369.46)"></rect>
                                        <rect id="Rectangle_11151" data-name="Rectangle 11151" class="cls-1" width="6.733"
                                            height="8.494" transform="translate(321.79 369.46)"></rect>
                                    </g>
                                    <path id="Path_3118" data-name="Path 3118" class="cls-2"
                                        d="M305.546,326.4v18.92l14.943-9.585Z" transform="translate(6.562 2.522)"></path>
                                    <rect id="Rectangle_11146" data-name="Rectangle 11146" class="cls-2" width="6.733"
                                        height="8.494" transform="translate(298.898 354.119)"></rect>
                                    <rect id="Rectangle_11148" data-name="Rectangle 11148" class="cls-2" width="6.733"
                                        height="8.494" transform="translate(329.369 354.119)"></rect>
                                    <rect id="Rectangle_11149" data-name="Rectangle 11149" class="cls-2" width="6.733"
                                        height="8.494" transform="translate(306.555 369.46)"></rect>
                                    <rect id="Rectangle_11152" data-name="Rectangle 11152" class="cls-2" width="6.733"
                                        height="8.494" transform="translate(337.026 369.46)"></rect>
                                    <g id="Group_13132" data-name="Group 13132" transform="translate(287.5 319.462)">
                                        <path id="Path_3119" data-name="Path 3119" class="cls-3"
                                            d="M346.214,319.462H288.786a1.287,1.287,0,0,0-1.286,1.286V355.2a1.287,1.287,0,0,0,1.286,1.286h3.828a1.286,1.286,0,1,0,0-2.572H290.7a.628.628,0,0,1-.629-.629V322.661a.628.628,0,0,1,.629-.627h53.6a.628.628,0,0,1,.629.627V353.29a.628.628,0,0,1-.629.629h-1.915a1.286,1.286,0,0,0,0,2.572h3.829A1.287,1.287,0,0,0,347.5,355.2V320.748A1.287,1.287,0,0,0,346.214,319.462Z"
                                            transform="translate(-287.5 -319.462)"></path>
                                        <path id="Path_3120" data-name="Path 3120" class="cls-3"
                                            d="M306.415,346.791a2.083,2.083,0,0,0,1.128-.331l13.744-8.816a2.021,2.021,0,0,0,0-3.419l-13.751-8.819a2.063,2.063,0,0,0-1.122-.329,2.122,2.122,0,0,0-1.009.256,2.034,2.034,0,0,0-1.062,1.784V344.75a2.031,2.031,0,0,0,1.061,1.782A2.123,2.123,0,0,0,306.415,346.791Zm.5-17.58a.628.628,0,0,1,.329-.551.615.615,0,0,1,.3-.078.632.632,0,0,1,.34.1l10.481,6.723a.628.628,0,0,1,0,1.057l-10.481,6.723a.62.62,0,0,1-.34.1.629.629,0,0,1-.629-.627Z"
                                            transform="translate(-281.374 -317.42)"></path>
                                        <path id="Path_3121" data-name="Path 3121" class="cls-3"
                                            d="M300.654,343.326a5.12,5.12,0,0,0-5.114,5.115v3.829a.629.629,0,0,1-.629.627H293a1.286,1.286,0,1,0,0,2.572h45.944a1.286,1.286,0,0,0,0-2.572h-1.915a.628.628,0,0,1-.629-.627v-3.829a5.115,5.115,0,0,0-10.23,0v3.829a.627.627,0,0,1-.627.627h-3.829a.629.629,0,0,1-.629-.627v-3.829a5.114,5.114,0,1,0-10.229,0v3.829a.628.628,0,0,1-.629.627H306.4a.628.628,0,0,1-.629-.627v-3.829A5.12,5.12,0,0,0,300.654,343.326Zm2.543,8.944a.628.628,0,0,1-.629.627h-3.828a.628.628,0,0,1-.629-.627v-3.829a2.543,2.543,0,1,1,5.085,0Zm25.544-3.829a2.543,2.543,0,1,1,5.085,0v3.829a.628.628,0,0,1-.629.627h-3.828a.628.628,0,0,1-.629-.627Zm-15.315,0a2.542,2.542,0,1,1,5.085,0v3.829a.627.627,0,0,1-.627.627h-3.829a.629.629,0,0,1-.629-.627Z"
                                            transform="translate(-285.969 -310.784)"></path>
                                        <path id="Path_3122" data-name="Path 3122" class="cls-3"
                                            d="M346.214,364.127a.629.629,0,0,1-.629-.629v-3.828a5.114,5.114,0,1,0-10.229,0V363.5a.628.628,0,0,1-.629.629H330.9a.628.628,0,0,1-.629-.629v-3.828a5.115,5.115,0,1,0-10.23,0V363.5a.628.628,0,0,1-.627.629h-3.829a.629.629,0,0,1-.629-.629v-3.828a5.114,5.114,0,1,0-10.229,0V363.5a.628.628,0,0,1-.629.629h-3.828a.628.628,0,0,1-.629-.629v-3.828a5.114,5.114,0,1,0-10.229,0V363.5a.629.629,0,0,1-.629.629,1.287,1.287,0,0,0,0,2.573h57.428a1.287,1.287,0,0,0,0-2.573Zm-49.143-.629a.629.629,0,0,1-.629.629h-3.829a.628.628,0,0,1-.627-.629v-3.828a2.543,2.543,0,0,1,5.085,0Zm15.314,0a.628.628,0,0,1-.629.629h-3.828a.628.628,0,0,1-.629-.629v-3.828a2.543,2.543,0,0,1,5.085,0Zm15.314,0a.628.628,0,0,1-.627.629h-3.829a.629.629,0,0,1-.629-.629v-3.828a2.543,2.543,0,0,1,5.085,0Zm15.315,0a.628.628,0,0,1-.629.629h-3.828a.628.628,0,0,1-.629-.629v-3.828a2.542,2.542,0,0,1,5.085,0Z"
                                            transform="translate(-287.5 -306.701)"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="my-2 px-12 w-10/12 overflow-hidden">
                            <p class="text-md font-normal text-theme-black">
                                <strong class="text-medium">Maecenas faucibus elementum ipsum nec rhoncus</strong>, Nullam
                                sit amet pretium justo, metus.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div id="feature-2" class="flex flex-wrap">
            <div class="bg-white flex justify-end px-4 py-4 w-1/2">
                <ul class="w-8/12">
                    <li class="-mx-2 my-2 flex overflow-hidden">
                        <div class="my-2 w-2/12">
                            <svg class="feature-2 icon" xmlns="http://www.w3.org/2000/svg" width="46.599" height="60" viewBox="0 0 46.599 60">
                                <g id="Group_13372" data-name="Group 13372" transform="translate(-219.414 -100.677)">
                                    <g id="Group_13373" data-name="Group 13373">
                                        <g id="Group_13354" data-name="Group 13354" transform="translate(220.566 151.907)">
                                            <g id="Group_13353" data-name="Group 13353">
                                                <rect id="Rectangle_11249" data-name="Rectangle 11249" class="cls-1"
                                                    width="41.989" height="7.443" />
                                            </g>
                                        </g>
                                        <g id="Group_13358" data-name="Group 13358" transform="translate(236.326 115.565)">
                                            <g id="Group_13357" data-name="Group 13357">
                                                <path id="Path_3254" data-name="Path 3254" class="cls-1"
                                                    d="M246.489,117.326l-9.158,9.158-5.515-5.515,9.375-9.375Z"
                                                    transform="translate(-231.816 -111.595)" />
                                            </g>
                                        </g>
                                        <g id="Group_13360" data-name="Group 13360" transform="translate(249.499 102.391)">
                                            <g id="Group_13359" data-name="Group 13359">
                                                <path id="Path_3255" data-name="Path 3255" class="cls-1"
                                                    d="M256.149,107.666l-9.158,9.158-5.515-5.515,9.375-9.375Z"
                                                    transform="translate(-241.477 -101.934)" />
                                            </g>
                                        </g>
                                    </g>
                                    <g id="Group_13356" data-name="Group 13356" transform="translate(244.373 142.986)">
                                        <g id="Group_13355" data-name="Group 13355">
                                            <rect id="Rectangle_11250" data-name="Rectangle 11250" class="cls-2"
                                                width="10.341" height="9.432" />
                                        </g>
                                    </g>
                                    <g id="Group_13362" data-name="Group 13362" transform="translate(230.701 126.197)">
                                        <g id="Group_13361" data-name="Group 13361">
                                            <path id="Path_3256" data-name="Path 3256" class="cls-2"
                                                d="M232.783,119.391l-5.092,5.092,4.687,4.688,5.273-5.273Z"
                                                transform="translate(-227.691 -119.391)" />
                                        </g>
                                    </g>
                                    <g id="Group_13364" data-name="Group 13364" transform="translate(246.857 108.978)">
                                        <g id="Group_13363" data-name="Group 13363">
                                            <circle id="Ellipse_81" data-name="Ellipse 81" class="cls-2" cx="5.428"
                                                cy="5.428" r="5.428" />
                                        </g>
                                    </g>
                                    <g id="Group_13371" data-name="Group 13371" transform="translate(219.414 100.677)">
                                        <g id="Group_13367" data-name="Group 13367">
                                            <g id="Group_13366" data-name="Group 13366">
                                                <g id="Group_13365" data-name="Group 13365">
                                                    <path id="Path_3257" data-name="Path 3257" class="cls-3"
                                                        d="M259.27,115.177a.632.632,0,0,1,.18-.375l6.187-6.187a1.288,1.288,0,0,0,0-1.818l-5.744-5.744a1.286,1.286,0,0,0-1.818,0l-6.187,6.187a.624.624,0,0,1-.375.18,7.065,7.065,0,0,0-6.214,6.214.626.626,0,0,1-.181.376l-8.66,8.66a.629.629,0,0,1-.889,0l-.56-.56a1.286,1.286,0,0,0-1.819,1.819l.562.56a.629.629,0,0,1,0,.889l-4.39,4.388a1.284,1.284,0,0,0,0,1.819l5.742,5.742a1.284,1.284,0,0,0,1.819,0l4.39-4.388a.627.627,0,0,1,.888,0l.56.56a1.286,1.286,0,0,0,1.819-1.819l-.56-.56a.629.629,0,0,1,0-.889l8.66-8.66a.624.624,0,0,1,.376-.18,7.026,7.026,0,0,0,4.362-2.193.629.629,0,0,1,.46-.2h.034a.622.622,0,0,1,.469.252,15.945,15.945,0,0,1-3.942,22.769,1.1,1.1,0,0,0-.15.121.63.63,0,0,1-.791.048,6.967,6.967,0,0,0-4.084-1.315H224.528a1.286,1.286,0,1,0,0,2.572h18.258a.628.628,0,0,1,.544.944,7.019,7.019,0,0,0-.945,3.513v1.915a.628.628,0,0,1-.629.629H220.7a1.287,1.287,0,0,0-1.286,1.286v7.657a1.287,1.287,0,0,0,1.286,1.286h42.113a1.287,1.287,0,0,0,1.286-1.286v-7.657a1.287,1.287,0,0,0-1.286-1.286h-5.742a.628.628,0,0,1-.629-.629v-1.915a6.96,6.96,0,0,0-.685-3.025.627.627,0,0,1,.214-.791,18.515,18.515,0,0,0,3.4-27.683l-.038-.038a.629.629,0,0,1-.161-.559C259.214,115.606,259.247,115.393,259.27,115.177Zm-14.314,32.729a4.457,4.457,0,0,1,8.914,0v1.915a.628.628,0,0,1-.629.629h-7.657a.629.629,0,0,1-.629-.629ZM260.9,153.02a.628.628,0,0,1,.629.629v3.828a.628.628,0,0,1-.629.629H222.613a.628.628,0,0,1-.627-.629v-3.828a.628.628,0,0,1,.627-.629Zm-21.4-21.9-3.035,3.035a.629.629,0,0,1-.889,0l-3.035-3.035a.629.629,0,0,1,0-.889l3.035-3.035a.629.629,0,0,1,.889,0l3.035,3.035A.629.629,0,0,1,239.494,131.122Zm9.556-9.556-6.85,6.85a.627.627,0,0,1-.888,0l-3.037-3.035a.629.629,0,0,1,0-.889l6.85-6.85a.619.619,0,0,1,.439-.168.631.631,0,0,1,.089.005.665.665,0,0,1,.472.311l.031.055c.06.1.121.206.185.307l.068.109c.08.12.162.24.251.357l.025.031c.082.108.166.211.256.316l.074.086a6.935,6.935,0,0,0,.626.625l.086.076c.1.087.207.172.314.252l.035.029c.115.086.234.168.359.25l.1.067c.1.064.2.125.315.188l.056.034a.627.627,0,0,1,.14.994Zm3.235-2.7a4.456,4.456,0,1,1,4.458-4.456A4.461,4.461,0,0,1,252.284,118.862Zm6.716-7.51a.687.687,0,0,1-.091-.007.639.639,0,0,1-.465-.323l-.031-.055q-.088-.155-.184-.307l-.07-.108c-.079-.121-.161-.24-.254-.363l-.022-.027c-.08-.108-.166-.211-.255-.316l-.074-.086a7.316,7.316,0,0,0-.626-.625l-.087-.076c-.1-.087-.207-.172-.312-.252l-.035-.029c-.116-.086-.236-.169-.355-.247l-.11-.071c-.1-.064-.2-.125-.31-.184l-.06-.037a.629.629,0,0,1-.14-.994l3.022-3.02a.627.627,0,0,1,.888,0l3.037,3.035a.627.627,0,0,1,0,.888l-3.022,3.022A.627.627,0,0,1,259,111.353Z"
                                                        transform="translate(-219.414 -100.677)" />
                                                </g>
                                            </g>
                                        </g>
                                        <g id="Group_13370" data-name="Group 13370" transform="translate(31.585 12.443)">
                                            <g id="Group_13369" data-name="Group 13369">
                                                <g id="Group_13368" data-name="Group 13368">
                                                    <path id="Path_3258" data-name="Path 3258" class="cls-3"
                                                        d="M243.862,109.8a1.286,1.286,0,1,0,1.287,1.286A1.286,1.286,0,0,0,243.862,109.8Z"
                                                        transform="translate(-242.576 -109.802)" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="my-2 px-12 w-10/12 overflow-hidden">
                            <p class="text-md font-normal text-theme-black">
                                <strong class="text-medium">Nullam sit amet pretium justo, quis convallis</strong> proin
                                faucibus lectus sed viverra hendrerit.
                            </p>
                        </div>
                    </li>
                    <li class="-mx-2 my-2 flex overflow-hidden">
                        <div class="my-2 w-2/12">
                            <svg class="feature-2 icon" xmlns="http://www.w3.org/2000/svg" width="60" height="59.999" viewBox="0 0 60 59.999">
                            
                                <g id="Group_13195" data-name="Group 13195" transform="translate(-115.367 -263.701)">
                                    <g id="Group_13221" data-name="Group 13221">
                                        <g id="Group_13189" data-name="Group 13189" transform="translate(125.424 264.609)">
                                            <g id="Group_13188" data-name="Group 13188">
                                                <ellipse id="Ellipse_78" data-name="Ellipse 78" class="cls-1" cx="19.943"
                                                    cy="19.787" rx="19.943" ry="19.787" />
                                            </g>
                                        </g>
                                        <g id="Group_13193" data-name="Group 13193" transform="translate(142.082 317.221)">
                                            <g id="Group_13192" data-name="Group 13192">
                                                <rect id="Rectangle_11169" data-name="Rectangle 11169" class="cls-1"
                                                    width="6.222" height="4.219" />
                                            </g>
                                        </g>
                                    </g>
                                    <g id="Group_13191" data-name="Group 13191" transform="translate(136.424 305.616)">
                                        <g id="Group_13190" data-name="Group 13190">
                                            <rect id="Rectangle_11168" data-name="Rectangle 11168" class="cls-2"
                                                width="17.887" height="10.739" />
                                        </g>
                                    </g>
                                    <g id="Group_13194" data-name="Group 13194" transform="translate(115.367 263.701)">
                                        <path id="Path_3220" data-name="Path 3220" class="cls-3"
                                            d="M143.325,263.7c-12.319,0-22.342,9.593-22.342,21.386a20.81,20.81,0,0,0,6.117,14.7,1.286,1.286,0,0,0,1.827-1.81,18.258,18.258,0,0,1-5.373-12.892c0-10.375,8.869-18.814,19.77-18.814s19.771,8.44,19.771,18.814a18.239,18.239,0,0,1-5.913,13.418,1.271,1.271,0,0,0-.408.893,1.287,1.287,0,0,0,2.164.985,20.79,20.79,0,0,0,6.728-15.3C165.668,273.294,155.645,263.7,143.325,263.7Z"
                                            transform="translate(-113.325 -263.701)" />
                                        <path id="Path_3221" data-name="Path 3221" class="cls-3"
                                            d="M135.924,285.075a1.261,1.261,0,0,0,1.15-.626l2.116-4.231a.628.628,0,0,1,1.124,0l2.116,4.231a1.286,1.286,0,0,0,2.3,0l3.829-7.657a1.286,1.286,0,0,0-2.3-1.151l-2.116,4.233a.629.629,0,0,1-1.124,0l-2.116-4.231a1.369,1.369,0,0,0-2.3,0l-2.116,4.233a.63.63,0,0,1-1.125,0l-2.115-4.231a1.286,1.286,0,1,0-2.3,1.15l3.829,7.657A1.263,1.263,0,0,0,135.924,285.075Z"
                                            transform="translate(-109.752 -259.617)" />
                                        <path id="Path_3222" data-name="Path 3222" class="cls-3"
                                            d="M151.12,299.89a4.162,4.162,0,0,0-4.158-4.158h-.956a.628.628,0,0,1-.629-.627v-7.658a1.286,1.286,0,1,0-2.572,0v7.658a.629.629,0,0,1-.629.627h-3.829a.627.627,0,0,1-.627-.627v-7.658a1.286,1.286,0,1,0-2.572,0v7.658a.629.629,0,0,1-.629.627h-.957a4.163,4.163,0,0,0-4.158,4.158,4.112,4.112,0,0,0,.854,2.493.626.626,0,0,1,0,.758,4.111,4.111,0,0,0-.854,2.491,4.162,4.162,0,0,0,4.158,4.158h.957a.629.629,0,0,1,.629.629,5.114,5.114,0,0,0,10.229,0,.628.628,0,0,1,.629-.629h.956a4.161,4.161,0,0,0,4.158-4.158,4.1,4.1,0,0,0-.854-2.491.63.63,0,0,1,0-.758A4.1,4.1,0,0,0,151.12,299.89Zm-10.857,13.07a2.544,2.544,0,0,1-2.542-2.542.628.628,0,0,1,.627-.629h3.829a.629.629,0,0,1,.629.629A2.546,2.546,0,0,1,140.262,312.961Zm6.7-5.742h-13.4a1.585,1.585,0,1,1,0-3.17h13.4a1.585,1.585,0,1,1,0,3.17Zm0-5.744h-13.4a1.585,1.585,0,1,1,0-3.17h13.4a1.585,1.585,0,1,1,0,3.17Z"
                                            transform="translate(-110.262 -255.534)" />
                                        <path id="Path_3223" data-name="Path 3223" class="cls-3"
                                            d="M155.959,270.1a1.28,1.28,0,0,0,.91-.378L160.7,265.9a1.286,1.286,0,0,0-1.819-1.818l-3.828,3.829a1.287,1.287,0,0,0,.908,2.2Z"
                                            transform="translate(-101.074 -263.701)" />
                                        <path id="Path_3224" data-name="Path 3224" class="cls-3"
                                            d="M117.562,264.077a1.285,1.285,0,1,0-1.818,1.818l3.828,3.829a1.286,1.286,0,1,0,1.819-1.818Z"
                                            transform="translate(-115.367 -263.701)" />
                                        <path id="Path_3225" data-name="Path 3225" class="cls-3"
                                            d="M120.482,290.372a1.279,1.279,0,0,0-.91.378l-3.828,3.829a1.285,1.285,0,0,0,1.818,1.818l3.829-3.829a1.287,1.287,0,0,0-.91-2.2Z"
                                            transform="translate(-115.367 -254.002)" />
                                        <path id="Path_3226" data-name="Path 3226" class="cls-3"
                                            d="M156.868,290.75a1.285,1.285,0,1,0-1.818,1.818l3.828,3.829a1.286,1.286,0,1,0,1.819-1.818Z"
                                            transform="translate(-101.074 -254.002)" />
                                    </g>
                                </g>
                            </svg>

                        </div>
                        <div class="my-2 px-12 w-10/12 overflow-hidden">
                            <p class="text-md font-normal text-theme-black">
                                <strong class="text-medium">Ut eu dolor vitae elit bibendum fringilla sit amet a elit. Fusce
                                    ac cursus nisl</strong> mauris id cursus mauris, sollicitudin varius quis convallis
                                metus est.
                            </p>
                        </div>
                    </li>
                    <li class="-mx-2 my-2 flex overflow-hidden">
                        <div class="my-2 w-2/12">
                            <svg class="feature-2 icon" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60">
                                <g id="Group_13187" data-name="Group 13187" transform="translate(-115.367 -337.188)">
                                    <path id="Rectangle_11167" data-name="Rectangle 11167" class="cls-1"
                                        d="M1.485,0H53.371a1.485,1.485,0,0,1,1.485,1.485v40.4a1.485,1.485,0,0,1-1.485,1.485H1.484A1.484,1.484,0,0,1,0,41.886V1.485A1.485,1.485,0,0,1,1.485,0Z"
                                        transform="translate(117.94 339.761)" />
                                    <path id="Path_3210" data-name="Path 3210" class="cls-2"
                                        d="M142.979,362.1l16.577,3.963-3.324,3.75,7.628,7.926-5.327,5.327-8.523-6.989-3.324,3.324Z"
                                        transform="translate(10.041 9.06)" />
                                    <g id="Group_13186" data-name="Group 13186" transform="translate(115.367 337.188)">
                                        <path id="Path_3211" data-name="Path 3211" class="cls-3"
                                            d="M158.988,370.44a.629.629,0,0,1,0-.889l2.475-2.475a1.286,1.286,0,0,0-.63-2.165l-17.224-3.828a1.379,1.379,0,0,0-.28-.029,1.284,1.284,0,0,0-1.26,1.564l3.829,17.227a1.283,1.283,0,0,0,.9.957,1.222,1.222,0,0,0,.352.052,1.311,1.311,0,0,0,.912-.378L150.539,378a.627.627,0,0,1,.888,0l6.3,6.3a1.282,1.282,0,0,0,1.818,0l5.744-5.742a1.29,1.29,0,0,0,0-1.819Zm3.132,7.657-3.037,3.035a.627.627,0,0,1-.888,0l-6.3-6.3a1.282,1.282,0,0,0-1.818,0l-1.364,1.362a.623.623,0,0,1-.443.184.6.6,0,0,1-.176-.026.623.623,0,0,1-.438-.466L145.234,365a.629.629,0,0,1,.614-.765.652.652,0,0,1,.135.015l10.889,2.419a.628.628,0,0,1,.307,1.058l-1.362,1.362a1.29,1.29,0,0,0,0,1.819l6.3,6.3A.629.629,0,0,1,162.12,378.1Z"
                                            transform="translate(-105.668 -328.509)" />
                                        <path id="Path_3212" data-name="Path 3212" class="cls-3"
                                            d="M170.77,337.188H119.964a4.6,4.6,0,0,0-4.6,4.6v39.32a4.6,4.6,0,0,0,4.6,4.6H135.8a.629.629,0,0,1,.629.629c0,5.457-1.885,7.519-2.695,8.152a.623.623,0,0,1-.386.134h-5.2a1.286,1.286,0,1,0,0,2.572H162.6a1.286,1.286,0,0,0,0-2.572h-24.5a.627.627,0,0,1-.562-.91A16.506,16.506,0,0,0,139,386.331a.629.629,0,0,1,.629-.629H149.2a1.286,1.286,0,0,0,0-2.572H119.964a2.027,2.027,0,0,1-2.025-2.025v-39.32a2.027,2.027,0,0,1,2.025-2.024H170.77a2.027,2.027,0,0,1,2.025,2.024v29.232a1.286,1.286,0,0,0,2.572,0V341.785A4.6,4.6,0,0,0,170.77,337.188Z"
                                            transform="translate(-115.367 -337.188)" />
                                        <path id="Path_3213" data-name="Path 3213" class="cls-3"
                                            d="M126.548,352.611a1.01,1.01,0,0,1,.124.089.719.719,0,0,1,.091.093l.045.019c.041.019.08.037.119.056l.1.056.027.018a1.329,1.329,0,0,0,.43.091h.026a1.3,1.3,0,0,0,.5-.116l.041-.03c.038-.029.079-.059.121-.085s.087-.053.132-.079c.026-.014.057-.033.08-.048a.987.987,0,0,1,.082-.113.688.688,0,0,1,.115-.109l5.7-7.594a1.285,1.285,0,0,0-2.058-1.541L127.8,349.21a.63.63,0,0,1-.458.25h-.045a.624.624,0,0,1-.443-.184l-2.269-2.269a1.286,1.286,0,0,0-1.819,1.819Z"
                                            transform="translate(-112.814 -335.146)" />
                                        <path id="Path_3214" data-name="Path 3214" class="cls-3"
                                            d="M122.762,357.25l3.785,3.784a.781.781,0,0,1,.124.089.717.717,0,0,1,.091.093l.045.019c.041.018.08.037.119.056s.068.037.1.056l.027.016a1.261,1.261,0,0,0,.43.091h.026a1.254,1.254,0,0,0,.5-.116c.014-.008.027-.019.041-.029.038-.03.079-.059.121-.086s.087-.053.132-.078c.026-.014.057-.033.08-.048a.876.876,0,0,1,.082-.113.688.688,0,0,1,.115-.109l5.7-7.594a1.285,1.285,0,0,0-2.058-1.541l-4.418,5.891a.632.632,0,0,1-.458.251h-.045a.63.63,0,0,1-.443-.184l-2.269-2.269a1.286,1.286,0,1,0-1.819,1.819Z"
                                            transform="translate(-112.814 -332.083)" />
                                        <path id="Path_3215" data-name="Path 3215" class="cls-3"
                                            d="M141.931,356.724a1.288,1.288,0,0,0-1.286-1.287H134.9a1.287,1.287,0,0,0,0,2.573h5.742A1.287,1.287,0,0,0,141.931,356.724Z"
                                            transform="translate(-108.731 -330.552)" />
                                        <path id="Path_3216" data-name="Path 3216" class="cls-3"
                                            d="M142.039,356.724a1.287,1.287,0,0,0,1.286,1.286h11.486a1.287,1.287,0,0,0,0-2.573H143.325A1.288,1.288,0,0,0,142.039,356.724Z"
                                            transform="translate(-105.668 -330.552)" />
                                        <path id="Path_3217" data-name="Path 3217" class="cls-3"
                                            d="M147.673,348.3a1.287,1.287,0,0,0-1.286-1.286H134.9a1.286,1.286,0,1,0,0,2.572h11.485A1.287,1.287,0,0,0,147.673,348.3Z"
                                            transform="translate(-108.731 -333.615)" />
                                        <path id="Path_3218" data-name="Path 3218" class="cls-3"
                                            d="M153.279,349.587a1.286,1.286,0,1,0,0-2.572h-5.742a1.286,1.286,0,1,0,0,2.572Z"
                                            transform="translate(-104.136 -333.615)" />
                                        <path id="Path_3219" data-name="Path 3219" class="cls-3"
                                            d="M123.672,365.029h19.143a1.287,1.287,0,0,0,0-2.573H123.672a1.287,1.287,0,0,0,0,2.573Z"
                                            transform="translate(-112.815 -328)" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="my-2 px-12 w-10/12 overflow-hidden">
                            <p class="text-md font-normal text-theme-black">
                                <strong class="text-medium">Ut eu dolor:</strong> suspendisse feugiat orci sed velit
                                pulvinar pretium.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="-mt-1 flex flex-wrap justify-start w-1/2 bg-theme-pink">
                <div class="container my-auto px-10 py-8 w-8/12">
                    <h1 class="font-medium text-3xl text-theme-yellow"><span class="text-white">Suspendisse feugiat orci sed
                            velit pulvinar.</span> Aliquam vitae lorem?</h1>
                </div>
                <div class="flex w-full -mb-1">
                    <div class="bg-white container w-8/12">
                        <img src="{{ asset('img/image-from-rawpixel-id-260562-jpeg.png') }}" class="w-full">
                        <div class="flex justify-center mx-16 relative">
                            <button class="absolute btn cta-btn py-3 text-xs" data-hover="Quero me Inscrever"
                                style="bottom: -1rem;">
                                <span> Quero me candidatar </span>
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-wrap w-4/12">
                        <div class="h-42 w-full"></div>
                        <div class="w-full h-42 bg-white"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="feature-3" class="flex flex-wrap">
            <div class="-mt-1 flex flex-wrap justify-end w-1/2 bg-theme-blue">
                <div class="container my-auto px-4 py-8 w-8/12">
                    <h1 class="font-medium text-3xl text-theme-pink">
                      <span class="text-white">
                        Suspendisse feugiat orci sedvelit pulvinar.
                      </span> 
                      Aliquam vitae lorem?
                    </h1>
                </div>
                <div class="flex w-full -mb-1">
                    <div class="flex flex-wrap w-4/12">
                        <div class="h-42 w-full"></div>
                        <div class="w-full h-42 bg-white"></div>
                    </div>
                    <div class="bg-white container w-8/12">
                        <img src="{{ asset('img/image-from-rawpixel-id-398921-jpeg.png') }}" class="w-full">
                        <div class="flex justify-center mx-16 relative">
                            <button class="absolute btn cta-btn py-3 text-xs" data-hover="Quero me Inscrever"
                                style="bottom: -1rem;">
                                <span> Quero me candidatar </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white flex justify-start px-4 pt-8 w-1/2">
                <ul class="w-8/12">
                    <li class="flex m-1">
                        <div class="my-2 w-2/12">
                            <svg class="feature-3 icon"  xmlns="http://www.w3.org/2000/svg" width="44.686" height="60" viewBox="0 0 44.686 60">
                                <g id="Group_13321" data-name="Group 13321" transform="translate(-147.115 -174.165)">
                                    <g id="Group_13308" data-name="Group 13308" transform="translate(149.687 176.712)">
                                        <g id="Group_13307" data-name="Group 13307">
                                            <path id="Path_3249" data-name="Path 3249" class="cls-1"
                                                d="M165.125,177.016a5.89,5.89,0,0,0-2.24-.963l-.061,0a.631.631,0,0,0-.248.064c-.391.192-.734.74-1.465,2.348a8.079,8.079,0,0,1-2.1,3.195,7.673,7.673,0,0,1-3.615,1.132c-1.759.25-2.339.431-2.6.814s-.258,1.061.059,2.887a8.632,8.632,0,0,1,.089,3.908,7.892,7.892,0,0,1-2.224,3.029c-1.16,1.154-1.711,1.805-1.711,2.393s.551,1.244,1.71,2.4a7.909,7.909,0,0,1,2.225,3.027,8.626,8.626,0,0,1-.089,3.907c-.316,1.825-.33,2.5-.056,2.89s.871.571,2.6.811a7.674,7.674,0,0,1,3.616,1.137,8.061,8.061,0,0,1,2.1,3.192c.655,1.432,1.046,2.146,1.511,2.362a.663.663,0,0,0,.153.048.922.922,0,0,0,.166.015,4.463,4.463,0,0,0,1.85-.783c.117-.068.228-.132.329-.188a5.684,5.684,0,0,1,7.305,0,8.369,8.369,0,0,0,2.219.957l.05,0a.624.624,0,0,0,.275-.064c.389-.19.731-.738,1.466-2.35a8.05,8.05,0,0,1,2.1-3.192,7.674,7.674,0,0,1,3.618-1.136c1.725-.24,2.332-.43,2.6-.809s.258-1.069-.059-2.892a8.64,8.64,0,0,1-.087-3.905,7.925,7.925,0,0,1,2.223-3.027c1.163-1.155,1.714-1.807,1.714-2.4s-.552-1.241-1.711-2.393a7.9,7.9,0,0,1-2.224-3.027,8.642,8.642,0,0,1,.086-3.905c.316-1.826.331-2.5.061-2.891s-.844-.565-2.575-.81a7.732,7.732,0,0,1-3.644-1.136,8.055,8.055,0,0,1-2.1-3.188c-.66-1.44-1.05-2.153-1.512-2.369l-.037-.015a.866.866,0,0,0-.318-.059,4.275,4.275,0,0,0-1.8.777c-.127.075-.245.145-.352.2a5.682,5.682,0,0,1-7.3,0Z"
                                                transform="translate(-149.001 -176.033)" />
                                        </g>
                                    </g>
                                    <g id="Group_13310" data-name="Group 13310" transform="translate(154.158 181.206)">
                                        <g id="Group_13309" data-name="Group 13309" transform="translate(0 0)">
                                            <circle id="Ellipse_80" data-name="Ellipse 80" class="cls-2" cx="10.819"
                                                cy="10.819" r="10.819" transform="translate(0 15.3) rotate(-45)" />
                                        </g>
                                    </g>
                                    <g id="Group_13312" data-name="Group 13312" transform="translate(170.093 212.185)">
                                        <g id="Group_13311" data-name="Group 13311">
                                            <path id="Path_3250" data-name="Path 3250" class="cls-2"
                                                d="M170.008,217.958l-6.043-12.348,5.457,1.4,6.527-4.964,5.114,14.3-6.264.575-2.77,3.537-1.768-1.147Z"
                                                transform="translate(-163.965 -202.046)" />
                                        </g>
                                    </g>
                                    <g id="Group_13314" data-name="Group 13314" transform="translate(150.266 212.185)">
                                        <g id="Group_13313" data-name="Group 13313">
                                            <path id="Path_3251" data-name="Path 3251" class="cls-2"
                                                d="M167.835,208.09l-6.648,13.068-4.886-5.114-6.875.8,8.374-14.794,3.956,5.533,4.962-1.427Z"
                                                transform="translate(-149.425 -202.046)" />
                                        </g>
                                    </g>
                                    <g id="Group_13320" data-name="Group 13320" transform="translate(147.115 174.165)">
                                        <g id="Group_13317" data-name="Group 13317" transform="translate(9.571 9.569)">
                                            <g id="Group_13316" data-name="Group 13316">
                                                <g id="Group_13315" data-name="Group 13315">
                                                    <path id="Path_3252" data-name="Path 3252" class="cls-3"
                                                        d="M166.906,206.727a12.772,12.772,0,1,1,12.772-12.773A12.787,12.787,0,0,1,166.906,206.727Zm0-22.972a10.2,10.2,0,1,0,10.2,10.2A10.211,10.211,0,0,0,166.906,183.755Z"
                                                        transform="translate(-154.134 -181.182)" />
                                                </g>
                                            </g>
                                        </g>
                                        <g id="Group_13319" data-name="Group 13319">
                                            <g id="Group_13318" data-name="Group 13318">
                                                <path id="Path_3253" data-name="Path 3253" class="cls-3"
                                                    d="M182.936,212.952a.629.629,0,0,1,.475-.9c1.665-.237,3.235-.558,4.14-1.857.959-1.377.656-3.117.364-4.8a6.892,6.892,0,0,1-.166-2.7,6.211,6.211,0,0,1,1.582-1.966c1.159-1.152,2.471-2.456,2.471-4.222s-1.31-3.065-2.471-4.218a6.222,6.222,0,0,1-1.579-1.965,6.827,6.827,0,0,1,.164-2.707c.292-1.681.595-3.421-.364-4.8-.985-1.417-2.774-1.669-4.353-1.89a5.918,5.918,0,0,1-2.418-.634,6.415,6.415,0,0,1-1.32-2.216c-.719-1.575-1.463-3.2-3.078-3.753a3.157,3.157,0,0,0-1-.161,7.742,7.742,0,0,0-3.537,1.287,6.05,6.05,0,0,1-2.388,1,6.082,6.082,0,0,1-2.389-1,7.7,7.7,0,0,0-3.539-1.285,3.1,3.1,0,0,0-.994.158c-1.619.55-2.362,2.179-3.089,3.77a6.4,6.4,0,0,1-1.312,2.2,5.922,5.922,0,0,1-2.416.631c-1.58.222-3.37.475-4.355,1.89-.957,1.379-.655,3.116-.36,4.818a6.734,6.734,0,0,1,.161,2.686,6.2,6.2,0,0,1-1.582,1.969c-1.158,1.15-2.468,2.452-2.468,4.215s1.313,3.068,2.482,4.23a6.229,6.229,0,0,1,1.57,1.957,6.821,6.821,0,0,1-.165,2.7c-.292,1.681-.595,3.419.361,4.8.907,1.3,2.478,1.623,4.143,1.86a.629.629,0,0,1,.475.9l-6.9,14a1.291,1.291,0,0,0,1.143,1.859,1.191,1.191,0,0,0,.243-.025l6.4-1.169a.636.636,0,0,1,.113-.01.628.628,0,0,1,.545.315l3.209,5.6a1.28,1.28,0,0,0,1.114.646h.035a1.289,1.289,0,0,0,1.115-.713l7.928-15.976a.579.579,0,0,1,.1-.079.624.624,0,0,1,.565.025l.278.155a7.567,7.567,0,0,0,3.492,1.276,3.064,3.064,0,0,0,1.012-.168c1.613-.547,2.356-2.172,3.079-3.75.067-.146.14-.307.215-.466a.632.632,0,0,1,.563-.361h0a.631.631,0,0,1,.566.35l5.032,10.215a.627.627,0,0,1-.563.905.787.787,0,0,1-.113-.01l-4-.73a1.25,1.25,0,0,0-1.336.627l-2.095,3.653a.626.626,0,0,1-.545.315h-.019a.628.628,0,0,1-.544-.349l-2.187-4.433a1.285,1.285,0,1,0-2.3,1.137l3.776,7.658a1.278,1.278,0,0,0,1.092.717h.06a1.284,1.284,0,0,0,1.114-.646l3.209-5.6a.628.628,0,0,1,.545-.315.646.646,0,0,1,.113.01l6.408,1.17a1.22,1.22,0,0,0,.243.023h0a1.253,1.253,0,0,0,1.006-.514,1.28,1.28,0,0,0,.13-1.345Zm-15.445,5.68-5.2,10.466a.622.622,0,0,1-.543.348h-.019a.627.627,0,0,1-.545-.316l-2.1-3.665a1.277,1.277,0,0,0-1.1-.649,1.291,1.291,0,0,0-.244.025l-3.99.728a.768.768,0,0,1-.112.01.628.628,0,0,1-.565-.905l5.036-10.215a.626.626,0,0,1,.563-.35h.005a.63.63,0,0,1,.563.361c.075.158.149.319.215.466.719,1.574,1.462,3.2,3.078,3.751a3.125,3.125,0,0,0,1,.164,6.7,6.7,0,0,0,3.09-1.049.629.629,0,0,1,.866.83Zm11.731-7.96a8.05,8.05,0,0,0-2.1,3.192c-.735,1.612-1.077,2.16-1.466,2.35a.624.624,0,0,1-.275.064l-.05,0a8.37,8.37,0,0,1-2.219-.957,5.684,5.684,0,0,0-7.305,0c-.1.056-.211.12-.329.188a4.463,4.463,0,0,1-1.85.783.922.922,0,0,1-.166-.015.664.664,0,0,1-.153-.048c-.465-.215-.856-.93-1.511-2.362a8.061,8.061,0,0,0-2.1-3.192,7.674,7.674,0,0,0-3.616-1.137c-1.729-.24-2.337-.431-2.6-.811s-.26-1.065.056-2.89a8.627,8.627,0,0,0,.089-3.907A7.908,7.908,0,0,0,151.4,198.9c-1.159-1.152-1.71-1.8-1.71-2.4s.551-1.24,1.711-2.393a7.892,7.892,0,0,0,2.224-3.029,8.633,8.633,0,0,0-.089-3.908c-.316-1.826-.33-2.5-.059-2.887s.844-.565,2.6-.814a7.673,7.673,0,0,0,3.615-1.132,8.079,8.079,0,0,0,2.1-3.2c.731-1.608,1.073-2.156,1.465-2.348a.632.632,0,0,1,.248-.064l.061,0a5.891,5.891,0,0,1,2.24.963,5.682,5.682,0,0,0,7.3,0c.106-.06.225-.13.352-.2a4.275,4.275,0,0,1,1.8-.777.866.866,0,0,1,.318.059l.037.015c.462.215.852.929,1.512,2.369a8.055,8.055,0,0,0,2.1,3.188,7.732,7.732,0,0,0,3.644,1.136c1.73.245,2.307.427,2.575.81s.255,1.065-.061,2.891a8.642,8.642,0,0,0-.086,3.905,7.9,7.9,0,0,0,2.224,3.027c1.159,1.152,1.711,1.8,1.711,2.393s-.551,1.242-1.714,2.4a7.925,7.925,0,0,0-2.223,3.027,8.639,8.639,0,0,0,.087,3.905c.316,1.823.331,2.5.059,2.892-.266.379-.873.569-2.6.809A7.674,7.674,0,0,0,179.223,210.672Z"
                                                    transform="translate(-147.115 -174.165)" />
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="my-2 px-4 w-10/12">
                            <p class="text-md font-normal text-theme-black">
                                <strong class="text-medium">Nunc congue magnas:</strong> vel elementum finibufaucibus lectus
                                sed viverra hendrerit.
                            </p>
                        </div>
                    </li>
                    <li class="flex m-1">
                        <div class="my-2 w-2/12">
                            <svg class="feature-3 icon" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60">
                              
                                <g id="Group_13305" data-name="Group 13305" transform="translate(-287.5 -100.677)">
                                    <g id="Group_13306" data-name="Group 13306">
                                        <rect id="Rectangle_11217" data-name="Rectangle 11217" class="cls-1" width="15.682"
                                            height="30.324" transform="translate(288.421 128.764)" />
                                        <g id="Group_13284" data-name="Group 13284" transform="translate(331.29 128.764)">
                                            <rect id="Rectangle_11218" data-name="Rectangle 11218" class="cls-1"
                                                width="15.682" height="30.324" />
                                        </g>
                                        <g id="Group_13286" data-name="Group 13286" transform="translate(317.534 102.07)">
                                            <rect id="Rectangle_11220" data-name="Rectangle 11220" class="cls-1"
                                                width="14.652" height="11.818" />
                                        </g>
                                    </g>
                                    <g id="Group_13285" data-name="Group 13285" transform="translate(303.288 120.735)">
                                        <rect id="Rectangle_11219" data-name="Rectangle 11219" class="cls-2" width="28.493"
                                            height="38.352" />
                                    </g>
                                    <g id="Group_13304" data-name="Group 13304" transform="translate(287.5 100.677)">
                                        <g id="Group_13287" data-name="Group 13287">
                                            <path id="Path_3248" data-name="Path 3248" class="cls-3"
                                                d="M346.214,127.477h-13.4a.627.627,0,0,1-.627-.627v-5.744a1.288,1.288,0,0,0-1.286-1.286H319.415a.628.628,0,0,1-.629-.627v-3.829a.628.628,0,0,1,.629-.629h15.314a1.286,1.286,0,0,0,1.07-2l-3.12-4.681a.629.629,0,0,1,0-.7l3.12-4.68a1.286,1.286,0,0,0-1.07-2H317.5a1.287,1.287,0,0,0-1.286,1.286v17.23a.628.628,0,0,1-.629.627H304.1a1.288,1.288,0,0,0-1.286,1.286v5.744a.627.627,0,0,1-.627.627h-13.4a1.287,1.287,0,0,0-1.286,1.286v30.629a1.287,1.287,0,0,0,1.286,1.286h57.428a1.287,1.287,0,0,0,1.286-1.286V128.762A1.287,1.287,0,0,0,346.214,127.477Zm-27.428-23.6a.629.629,0,0,1,.629-.629h11.738a.629.629,0,0,1,.522.978l-1.845,2.765a1.283,1.283,0,0,0,0,1.428l1.845,2.767a.628.628,0,0,1-.522.976H319.415a.628.628,0,0,1-.629-.629Zm-15.972,53.6a.628.628,0,0,1-.627.629H290.7a.628.628,0,0,1-.629-.629v-26.8a.628.628,0,0,1,.629-.627h11.486a.627.627,0,0,1,.627.627Zm26.8,0a.628.628,0,0,1-.627.629h-1.914a.629.629,0,0,1-.629-.629v-5.742a1.286,1.286,0,1,0-2.572,0v5.742a.628.628,0,0,1-.629.629H311.758a.628.628,0,0,1-.629-.629v-5.742a1.286,1.286,0,1,0-2.572,0v5.742a.629.629,0,0,1-.629.629h-1.915a.629.629,0,0,1-.629-.629V123.02a.63.63,0,0,1,.629-.629h22.972a.629.629,0,0,1,.627.629Zm15.315,0a.628.628,0,0,1-.629.629H332.814a.628.628,0,0,1-.627-.629v-26.8a.627.627,0,0,1,.627-.627H344.3a.628.628,0,0,1,.629.627Z"
                                                transform="translate(-287.5 -100.677)" />
                                        </g>
                                        <g id="Group_13288" data-name="Group 13288" transform="translate(21.057 34.458)">
                                            <rect id="Rectangle_11221" data-name="Rectangle 11221" class="cls-3"
                                                width="2.572" height="2.572" />
                                        </g>
                                        <g id="Group_13289" data-name="Group 13289" transform="translate(7.657 34.458)">
                                            <rect id="Rectangle_11222" data-name="Rectangle 11222" class="cls-3"
                                                width="2.572" height="2.572" />
                                        </g>
                                        <g id="Group_13290" data-name="Group 13290" transform="translate(7.657 42.115)">
                                            <rect id="Rectangle_11223" data-name="Rectangle 11223" class="cls-3"
                                                width="2.572" height="2.572" />
                                        </g>
                                        <g id="Group_13291" data-name="Group 13291" transform="translate(7.657 49.772)">
                                            <rect id="Rectangle_11224" data-name="Rectangle 11224" class="cls-3"
                                                width="2.572" height="2.572" />
                                        </g>
                                        <g id="Group_13292" data-name="Group 13292" transform="translate(49.771 34.458)">
                                            <rect id="Rectangle_11225" data-name="Rectangle 11225" class="cls-3"
                                                width="2.572" height="2.572" />
                                        </g>
                                        <g id="Group_13293" data-name="Group 13293" transform="translate(49.771 42.115)">
                                            <rect id="Rectangle_11226" data-name="Rectangle 11226" class="cls-3"
                                                width="2.572" height="2.572" />
                                        </g>
                                        <g id="Group_13294" data-name="Group 13294" transform="translate(49.771 49.772)">
                                            <rect id="Rectangle_11227" data-name="Rectangle 11227" class="cls-3"
                                                width="2.572" height="2.572" />
                                        </g>
                                        <g id="Group_13295" data-name="Group 13295" transform="translate(28.714 34.458)">
                                            <rect id="Rectangle_11228" data-name="Rectangle 11228" class="cls-3"
                                                width="2.572" height="2.572" />
                                        </g>
                                        <g id="Group_13296" data-name="Group 13296" transform="translate(36.371 34.458)">
                                            <rect id="Rectangle_11229" data-name="Rectangle 11229" class="cls-3"
                                                width="2.572" height="2.572" />
                                        </g>
                                        <g id="Group_13297" data-name="Group 13297" transform="translate(21.057 42.115)">
                                            <rect id="Rectangle_11230" data-name="Rectangle 11230" class="cls-3"
                                                width="2.572" height="2.572" />
                                        </g>
                                        <g id="Group_13298" data-name="Group 13298" transform="translate(28.714 42.115)">
                                            <rect id="Rectangle_11231" data-name="Rectangle 11231" class="cls-3"
                                                width="2.572" height="2.572" />
                                        </g>
                                        <g id="Group_13299" data-name="Group 13299" transform="translate(28.714 49.772)">
                                            <rect id="Rectangle_11232" data-name="Rectangle 11232" class="cls-3"
                                                width="2.572" height="2.572" />
                                        </g>
                                        <g id="Group_13300" data-name="Group 13300" transform="translate(36.371 42.115)">
                                            <rect id="Rectangle_11233" data-name="Rectangle 11233" class="cls-3"
                                                width="2.572" height="2.572" />
                                        </g>
                                        <g id="Group_13301" data-name="Group 13301" transform="translate(21.057 26.801)">
                                            <rect id="Rectangle_11234" data-name="Rectangle 11234" class="cls-3"
                                                width="2.572" height="2.572" />
                                        </g>
                                        <g id="Group_13302" data-name="Group 13302" transform="translate(28.714 26.801)">
                                            <rect id="Rectangle_11235" data-name="Rectangle 11235" class="cls-3"
                                                width="2.572" height="2.572" />
                                        </g>
                                        <g id="Group_13303" data-name="Group 13303" transform="translate(36.371 26.801)">
                                            <rect id="Rectangle_11236" data-name="Rectangle 11236" class="cls-3"
                                                width="2.572" height="2.572" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="my-2 px-4 w-10/12">
                            <p class="text-md font-normal text-theme-black">
                                <strong class="text-medium">Fusce ac cursus nisl </strong>nisl mauris id cursus mauris,
                                sollicitudin varius quis convallis metus est.
                            </p>
                        </div>
                    </li>
                    <li class="flex m-1">
                        <div class="my-2 w-2/12">
                            <img src="{{ asset('img/google-logo.png') }}">
                        </div>
                        <div class="my-2 px-4 w-10/12">
                            <p class="text-md font-normal text-theme-black">
                                <strong class="text-medium">Ut eu dolor vitae elits</strong> Ut eu dolor vitae elit bibendum
                                fringilla sit amet a elit mauris in sollicitudin eros.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section id="partners" class="section-2">
        <div class="flex">
            <div class="bg-white flex justify-end m-auto w-1/2">
                <div class="flex w-8/12">
                    <div class="container my-auto p-6">
                        <h1 class="font-bold text-3xl text-theme-black">
                            Maecenas faucibus elementum
                        </h1>
                    </div>
                </div>

            </div>
            <div class="flex m-auto w-1/2 bg-theme-gray-1">
                <div class="flex h-full w-8/12">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="270"
                        height="232.788" viewBox="0 0 270 232.788" class="relative w-1/2" style="left: 20%; top: -4rem;">
                        <defs>
                            <style scoped>
                                .cls-1 {
                                    fill: #ffcd56;
                                }

                                .cls-2 {
                                    fill: #66a5af;
                                }

                                .cls-3 {
                                    fill: #66bbc4;
                                }

                                .cls-4 {
                                    fill: #8ed2cc;
                                }

                                .cls-5 {
                                    fill: #94624f;
                                }

                                .cls-6 {
                                    fill: #00a09d;
                                }

                                .cls-7 {
                                    fill: #1d7e8e;
                                }

                                .cls-18,
                                .cls-8 {
                                    fill: #fff;
                                }

                                .cls-8 {
                                    opacity: 0.2;
                                }

                                .cls-9 {
                                    fill: #0b2d4e;
                                }

                                .cls-10 {
                                    fill: #061f33;
                                }

                                .cls-11 {
                                    fill: #73b8d4;
                                }

                                .cls-12 {
                                    fill: none;
                                    stroke: #0b2d4e;
                                    stroke-miterlimit: 10;
                                    stroke-width: 4px;
                                }

                                .cls-13 {
                                    fill: #f8a17a;
                                }

                                .cls-14 {
                                    fill: #fbae3e;
                                }

                                .cls-15 {
                                    clip-path: url(#clip-path);
                                }

                                .cls-16 {
                                    fill: #e5785c;
                                }

                                .cls-17 {
                                    fill: #b8d1ce;
                                }

                                .cls-19 {
                                    fill: #0098d7;
                                }

                            </style>
                            <clipPath id="clip-path">
                                <path id="Path_3183" data-name="Path 3183" class="cls-1"
                                    d="M1019.661,778.793c-1.439-3.823-3.6-6.951-4.848-10.9-1.687-5.362-2.836-13.007-.9-18.557,2.057-5.893,4.58-10.542,4.734-17.106.131-5.62-1-11.156-2.128-16.63-1.116-5.422-1.621-7-6.93-7.823-1.892-.295-3.76-.807-5.648-1.142a55.95,55.95,0,0,0-9.7-.829v0h-.254v0a55.955,55.955,0,0,0-9.7.829c-1.888.335-3.756.847-5.648,1.142-5.308.827-5.814,2.4-6.93,7.823-1.127,5.474-2.259,11.01-2.128,16.63.153,6.564,2.677,11.213,4.734,17.106,1.937,5.55.788,13.2-.9,18.557-1.244,3.951-3.409,7.079-4.848,10.9a1.541,1.541,0,0,0-.135.936,1.509,1.509,0,0,0,.857.822c7.055,3.686,14.963,4.794,22.7,5.364.679.05,1.34.1,1.993.141v.018l.137-.009.137.009v-.018c.652-.043,1.314-.091,1.993-.141,7.733-.57,15.641-1.678,22.7-5.364a1.51,1.51,0,0,0,.857-.822A1.541,1.541,0,0,0,1019.661,778.793Z"
                                    transform="translate(-968.399 -705.801)"></path>
                            </clipPath>
                        </defs>
                        <g id="Group_13328" data-name="Group 13328" transform="translate(-238.686 -377.778)">
                            <g id="Group_13155" data-name="Group 13155" transform="translate(238.686 462.518)">
                                <rect id="Rectangle_11156" data-name="Rectangle 11156" class="cls-2" width="108.825"
                                    height="44.231" transform="translate(187.938 116.227) rotate(180)"></rect>
                                <path id="Path_3148" data-name="Path 3148" class="cls-3"
                                    d="M649.349,969.517h90.06c7.383,0,13.369-6.61,13.369-14.764V891.282c0-8.154-5.985-14.764-13.369-14.764,0,0-24.906,3.191-44.455,3.191s-45.606-3.191-45.606-3.191c-7.383,0-13.369,6.61-13.369,14.764v63.471C635.98,962.907,641.965,969.517,649.349,969.517Z"
                                    transform="translate(-618.18 -875.539)"></path>
                                <path id="Path_3149" data-name="Path 3149" class="cls-2"
                                    d="M660.363,1085.231h58.72c16.29,0,29.428-14.889,29.19-33.081,0,0,.218-51.982.024-64.063-.024,64.063-117.125,64.063-116.294.459-.231,15.866-.83,63.6-.83,63.6C630.935,1070.342,644.073,1085.231,660.363,1085.231Z"
                                    transform="translate(-614.192 -968.026)"></path>
                                <path id="Path_3150" data-name="Path 3150" class="cls-4"
                                    d="M803.611,876.518H713.869a129.435,129.435,0,0,0,45.436,8.387A119.321,119.321,0,0,0,803.611,876.518Z"
                                    transform="translate(-682.747 -875.539)"></path>
                                <path id="Path_3151" data-name="Path 3151" class="cls-5"
                                    d="M1937.229,1571.763h0a3.48,3.48,0,0,0,2.113-4.359l-7.1-29.359-9.6,2.911,10.406,28.356A3.48,3.48,0,0,0,1937.229,1571.763Z"
                                    transform="translate(-1684.784 -1423.925)"></path>
                                <path id="Path_3152" data-name="Path 3152" class="cls-5"
                                    d="M622.642,1571.763h0a3.481,3.481,0,0,1-2.114-4.359l7.1-29.359,9.6,2.911-10.406,28.356A3.48,3.48,0,0,1,622.642,1571.763Z"
                                    transform="translate(-605.251 -1423.925)"></path>
                                <path id="Path_3153" data-name="Path 3153" class="cls-3"
                                    d="M1330.459,963.794h90.55c7.424,0,13.441-6.61,13.441-14.764V885.56c0-8.154-6.018-14.764-13.441-14.764,0,0-25.041,3.191-44.7,3.191s-45.854-3.191-45.854-3.191c-7.424,0-13.442,6.61-13.442,14.764v63.471C1317.018,957.184,1323.036,963.794,1330.459,963.794Z"
                                    transform="translate(-1182.739 -870.796)"></path>
                                <path id="Path_3154" data-name="Path 3154" class="cls-2"
                                    d="M1343.969,1079.509h59.038c16.378,0,29.588-14.89,29.349-33.082,0,0,.219-51.982.025-64.063-.025,64.063-117.76,64.063-116.926.458-.232,15.866-.835,63.6-.835,63.6C1314.382,1064.619,1327.591,1079.509,1343.969,1079.509Z"
                                    transform="translate(-1180.749 -963.282)"></path>
                                <path id="Path_3155" data-name="Path 3155" class="cls-3"
                                    d="M719.843,1195.22c-23.54-.019-142.819.046-166.36.046-.608,0-10.475-10.29-12.951-15.4-2.686-5.543-4.074-10.612-5.627-16.078-2.586-9.106-5.272-22.111.145-30.747,2.366-3.773,7.155-6.357,11.362-4.892,5.9,2.055,7.8,8.484,8.668,14.061,2.082,13.418,7.957,27.445,22.223,31.267,7.842,2.1,16.3,1.626,24.367,1.631,1.046,0,118.167.134,118.167-.348Q719.841,1184.991,719.843,1195.22Z"
                                    transform="translate(-531.905 -1083.79)"></path>
                                <path id="Path_3156" data-name="Path 3156" class="cls-3"
                                    d="M1614.13,1195.22c23.54-.019,39.787.046,63.327.046.608,0,10.475-10.29,12.951-15.4,2.686-5.543,4.074-10.612,5.626-16.078,2.586-9.106,5.272-22.111-.145-30.747-2.366-3.773-7.155-6.357-11.362-4.892-5.9,2.055-7.8,8.484-8.668,14.061-2.082,13.418-7.957,27.445-22.223,31.267-7.843,2.1-16.3,1.626-24.367,1.631-1.046,0-15.134.134-15.134-.348Q1614.132,1184.991,1614.13,1195.22Z"
                                    transform="translate(-1429.035 -1083.79)"></path>
                                <g id="Group_13152" data-name="Group 13152" transform="translate(134.505 62.422)">
                                    <path id="Path_3157" data-name="Path 3157" class="cls-3"
                                        d="M1318.336,1245.341c0,5.287,5.7,20.06,53.34,20.06s53.34-14.772,53.34-20.06-23.881-9.574-53.34-9.574S1318.336,1240.053,1318.336,1245.341Z"
                                        transform="translate(-1318.336 -1235.767)"></path>
                                    <path id="Path_3158" data-name="Path 3158" class="cls-4"
                                        d="M1318.336,1245.341c7.911-5.019,98.526-5.088,106.68,0,0-5.288-23.881-9.574-53.34-9.574S1318.336,1240.053,1318.336,1245.341Z"
                                        transform="translate(-1318.336 -1235.767)"></path>
                                    <path id="Path_3159" data-name="Path 3159" class="cls-2"
                                        d="M1318.884,1291.744c0,5.288,5.7,20.059,53.34,20.059s53.34-14.772,53.34-20.059C1419.316,1311.8,1324.489,1311.8,1318.884,1291.744Z"
                                        transform="translate(-1318.79 -1282.17)"></path>
                                </g>
                                <g id="Group_13153" data-name="Group 13153" transform="translate(27.505 62.422)">
                                    <path id="Path_3160" data-name="Path 3160" class="cls-3"
                                        d="M692.725,1245.341c0,5.287,5.7,20.06,53.34,20.06s53.34-14.772,53.34-20.06-23.881-9.574-53.34-9.574S692.725,1240.053,692.725,1245.341Z"
                                        transform="translate(-692.725 -1235.767)"></path>
                                    <path id="Path_3161" data-name="Path 3161" class="cls-4"
                                        d="M692.725,1245.341c7.911-5.019,98.526-5.088,106.68,0,0-5.288-23.881-9.574-53.34-9.574S692.725,1240.053,692.725,1245.341Z"
                                        transform="translate(-692.725 -1235.767)"></path>
                                    <path id="Path_3162" data-name="Path 3162" class="cls-2"
                                        d="M693.272,1291.744c0,5.288,5.7,20.059,53.34,20.059s53.34-14.772,53.34-20.059C793.7,1311.8,698.877,1311.8,693.272,1291.744Z"
                                        transform="translate(-693.178 -1282.17)"></path>
                                </g>
                                <path id="Path_3163" data-name="Path 3163" class="cls-4"
                                    d="M1488,870.8h-90.229a130.743,130.743,0,0,0,45.682,8.387A120.521,120.521,0,0,0,1488,870.8Z"
                                    transform="translate(-1249.676 -870.796)"></path>
                                <rect id="Rectangle_11157" data-name="Rectangle 11157" class="cls-5" width="226.752"
                                    height="5.729" transform="translate(248.422 117.205) rotate(180)"></rect>
                                <g id="Group_13154" data-name="Group 13154" transform="translate(19.671 33.275)">
                                    <path id="Path_3164" data-name="Path 3164" class="cls-6"
                                        d="M646.955,1075.439c.287,1.386,4.358,16.613,4.608,18.641a53.12,53.12,0,0,1-.171,7.27c.027-1.136-.119,2.406,2.112,2.083,1.114-.161,24.983-4.891,33.6-6.142a176.2,176.2,0,0,1,18.252-1.271c1.7-.283,2.308-1.2,2.91-3.811s-3.081-13.253-3.633-16.689.754-5.706.381-7.394c-.494-2.233-2.629-2.959-4.467-2.733-1.051.129-11.86,2.258-20.291,3.3-8.319,1.023-29.622,3.055-30.494,3.162A3.405,3.405,0,0,0,646.955,1075.439Z"
                                        transform="translate(-646.916 -1065.353)"></path>
                                    <path id="Path_3165" data-name="Path 3165" class="cls-7"
                                        d="M647.841,1106.411c.287,1.386,4.358,16.613,4.608,18.64a53.16,53.16,0,0,1-.171,7.27c.027-1.136-.119,2.406,2.112,2.083,1.114-.161,24.983-4.891,33.6-6.142a176.3,176.3,0,0,1,18.252-1.272c1.7-.283,2.307-1.2,2.91-3.81.273-1.187-.337-4.03-1.137-7.1-18.205,9.014-55.414,19.225-55.259-13.342-1.117.035-1.845.051-2.108.084A3.4,3.4,0,0,0,647.841,1106.411Z"
                                        transform="translate(-647.651 -1096.344)"></path>
                                    <path id="Path_3166" data-name="Path 3166" class="cls-8"
                                        d="M739.026,1068.125c-.495-2.233-2.629-2.959-4.467-2.733-1.051.129-11.86,2.258-20.291,3.3-4.488.552-23.645,2.887-26.327,3C698.494,1084.322,739.4,1069.813,739.026,1068.125Z"
                                        transform="translate(-680.924 -1065.353)"></path>
                                </g>
                            </g>
                            <g id="Group_13158" data-name="Group 13158" transform="translate(403.805 501.314)">
                                <g id="Group_13156" data-name="Group 13156" transform="translate(0)">
                                    <path id="Path_3167" data-name="Path 3167" class="cls-9"
                                        d="M1526.731,1203.79c-5.161-.244-10.307.586-15.407,1.412-1.611.261-3.317,1.156-2.1,3.081.666,1.057,2.047,1.366,3.288,1.509,5.329.611,10.8-.065,16.161-.057"
                                        transform="translate(-1506.847 -1185.598)"></path>
                                    <path id="Path_3168" data-name="Path 3168" class="cls-10"
                                        d="M1589.19,1120.581c.784,4.786-1.463,11.7-6.688,13.1-2.106.564-4.643.364-6.818.351q-3.971-.023-7.942-.057l-15.6-.112c-3.427-.025-7.071-.112-9.931-2-3.4-2.244-5.092-6.393-2.832-9.964,1.941-3.068,5.573-4.947,9.036-5.694,5.8-1.25,11.829.407,17.6-.633a16.878,16.878,0,0,0,2.773-.738c5.208-1.889,10.382-4.49,15.7-1.408A10.173,10.173,0,0,1,1589.19,1120.581Z"
                                        transform="translate(-1531.335 -1109.544)"></path>
                                    <path id="Path_3169" data-name="Path 3169" class="cls-9"
                                        d="M1512.116,1098.362c-.868-.918-1.4-1.1-1.926.208a12.579,12.579,0,0,0-1,4.78,14.3,14.3,0,0,0-5.972,2.844,12.557,12.557,0,0,0-4.517-1.908c-1.374-.31-1.528.232-1.265,1.467a39.307,39.307,0,0,0,1.348,4.472c.315.924.6,1.855.922,2.775a6.611,6.611,0,0,0,1.228,2.547c1.518,1.887,4.539,2.985,6.882,3.295a7.585,7.585,0,0,0,6.947-2.341,13.929,13.929,0,0,0,3.112-6.641,8.019,8.019,0,0,0-.348-4.09,15.086,15.086,0,0,0-2.5-3.75A40.6,40.6,0,0,0,1512.116,1098.362Z"
                                        transform="translate(-1497.334 -1097.631)"></path>
                                    <path id="Path_3170" data-name="Path 3170" class="cls-9"
                                        d="M1633.931,1139.922c4.99,4.751,4.468,10.228,1.71,15.072-3.058,5.371-8.094,9.009-13.71,11.376-6.632,2.794-14.223,4.224-21.327,2.549-1.428-.337-2.989-1.038-3.41-2.443-1.244-4.159,5.242-4.085,7.556-4.282,4.754-.4,9.792-.454,14.415-2,5.074-1.7,8.687-5.316,11.225-9.948"
                                        transform="translate(-1579.985 -1132.689)"></path>
                                    <path id="Path_3171" data-name="Path 3171" class="cls-9"
                                        d="M1695.2,1136.531a10.18,10.18,0,0,0-2.168-6.208c-3.532-4.441-10.4-4.58-15.138-2.172-5.429,2.762-6.288,10.074-4.163,15.228.1.236-1.9.167-2.069.179-1.435.1-4.406-.173-4.979,1.586a2.691,2.691,0,0,0,1.586,3.153,4.989,4.989,0,0,0,1.544.16c3.719-.005,7.436.007,11.155.013,2.912,0,5.11-.533,6.855-3.016.908-1.293,1.595-2.736,2.562-3.985"
                                        transform="translate(-1637.639 -1121.641)"></path>
                                    <ellipse id="Ellipse_74" data-name="Ellipse 74" class="cls-10" cx="1.226" cy="1.055"
                                        rx="1.226" ry="1.055" transform="translate(11.574 16.429) rotate(-21.161)">
                                    </ellipse>
                                </g>
                                <g id="Group_13157" data-name="Group 13157" transform="translate(13.768 6.569)">
                                    <path id="Path_3172" data-name="Path 3172" class="cls-11"
                                        d="M1583.543,1136.039a9.777,9.777,0,0,0,.608.92,2.97,2.97,0,0,1,.28.5,3.536,3.536,0,0,1,.174.549c.087.368.138.739.19,1.1s.093.742.111,1.115a10.72,10.72,0,0,1-.129,2.255,11.124,11.124,0,0,1-1.611,4.205,10.311,10.311,0,0,1-1.415,1.761,9.439,9.439,0,0,1-1.764,1.4,4.408,4.408,0,0,1-1.038.454,2.424,2.424,0,0,1-1.115.06,3.343,3.343,0,0,0,1.966-.793,9.1,9.1,0,0,0,.816-.7c.128-.127.26-.249.381-.381s.246-.261.363-.4a11.6,11.6,0,0,0,1.254-1.737,12,12,0,0,0,.933-1.924,12.406,12.406,0,0,0,.827-4.187c.01-.362-.008-.711-.024-1.084s-.03-.729-.074-1.084a3.284,3.284,0,0,0-.093-.519,3.38,3.38,0,0,0-.2-.495A6.78,6.78,0,0,1,1583.543,1136.039Z"
                                        transform="translate(-1577.833 -1136.039)"></path>
                                </g>
                            </g>
                            <g id="Group_13164" data-name="Group 13164" transform="translate(287.225 379.802)">
                                <g id="Group_13163" data-name="Group 13163" transform="translate(0 0)">
                                    <path id="Path_3173" data-name="Path 3173" class="cls-9"
                                        d="M1013.349,472.758a17.629,17.629,0,0,1-16.336-1.785c-4.612-3.28-8.841-5.692-14.7-5.866-3.64-.108-7.051,1.414-10.519,2.283-3.049.764-5.378,3.213-8.664,3.663a10.792,10.792,0,0,1-10.7-5.967,13.54,13.54,0,0,1,.655-12.54c1.586-2.759,3.045-4.818,1.262-7.894a13.332,13.332,0,0,1-1.142-2.018,5.627,5.627,0,0,1-.26-2.163c.161-3.985,3.179-6.973,5.191-10.264a6.957,6.957,0,0,0,1.085-2.458c.361-2.266-1.439-4.225-2.4-6.309-3.11-6.753,2.2-14.433,7.362-18.485,3.047-2.391,6.7-3.355,9.986-5.3,1.5-.887,2.861-1.986,4.376-2.842,2.641-1.493,5.518-1.556,8.451-1.145,8.352,1.171,17.848,7.243,19.784,15.981,1.312,5.923-.836,12.809,5.032,16.956,1.767,1.249,4,1.992,5.205,3.789,2.562,3.82-1.2,9.479,1.14,13.437a13.359,13.359,0,0,0,2.014,2.316,19.091,19.091,0,0,1,5.158,14.871,9.556,9.556,0,0,1-1.054,3.79,12.515,12.515,0,0,1-3.88,3.751,35.889,35.889,0,0,1-6.974,4.172Z"
                                        transform="translate(-928.016 -392.374)"></path>
                                    <path id="Path_3174" data-name="Path 3174" class="cls-12"
                                        d="M1021.3,445.432c-2.594-2.228-3.15-6.125-2.4-9.461.491-2.183,1.46-4.307,1.374-6.543a7.225,7.225,0,0,0-4.7-6.372,40.784,40.784,0,0,1-4.121-1.153c-1.952-.93-3.025-2.894-3.738-4.841-.776-2.121-.454-3.931-.463-6.152-.012-2.839-.084-5.682-.372-8.508a15.922,15.922,0,0,0-4.519-8.829q-.481-.5-1-.969c-5.805-5.182-16.9-7.452-23.781-3.237a17.64,17.64,0,0,0-3.31,3.112,21,21,0,0,1-3.871,2.882,95.19,95.19,0,0,1-8.455,4.443,15.63,15.63,0,0,0-5.012,3.407,9.938,9.938,0,0,0-2.255,6.819,16.535,16.535,0,0,0,2,7.012,28.9,28.9,0,0,1,2.259,4.668c.822,2.7-.75,5.237-2.742,6.969-1.51,1.312-3.245,2.513-4.072,4.335a5.507,5.507,0,0,0,.163,4.81c.735,1.365,2.03,2.373,2.716,3.763a5.082,5.082,0,0,1,.053,4.319c-.8,1.72-2.612,3.317-2.015,5.116"
                                        transform="translate(-928.396 -387.17)"></path>
                                    <path id="Path_3175" data-name="Path 3175" class="cls-9"
                                        d="M999.206,1117.632a24.474,24.474,0,0,1-2.506,5.023,49.025,49.025,0,0,1-16.61,16.151c-5.2,2.992-10.652,2.859-15.971,1.7-3.636-.794-7.253-3.293-10.76-5.612a52.718,52.718,0,0,1-10.528-9c-2.649-2.976-5.023-6.67-5.427-13.7-.159-2.766.115-5.829,1.07-7.7,1.15-2.26,2.891-2.184,4.442-1.917,8.787,1.509,17.3,8.073,26.145,8.194,4.938.068,9.542-2.78,14.287-5.355,3.66-1.986,7.724-4.171,11.536-3.755C998.338,1102.026,1001.755,1110.5,999.206,1117.632Z"
                                        transform="translate(-916.553 -979.408)"></path>
                                    <path id="Path_3176" data-name="Path 3176" class="cls-13"
                                        d="M870.28,975.991c-.214-.484-.431-.979-.658-1.489a73.447,73.447,0,0,1-5.174-16.641c-.381-2.064-.768-4.323-2.345-5.708-2.183-1.916-6.435-1.671-9.138-1.309a4.87,4.87,0,0,0-3.346,1.626c-1.264,1.692-1.138,5.511-1.188,7.549-.3,12.391,9.493,22.634,17.47,31,1.536,1.61,3.2,3.238,5.331,3.889s4.829-.026,5.76-2.046c.683-1.483.264-3.225-.276-4.766a31.232,31.232,0,0,0-3.922-7.381A27.379,27.379,0,0,1,870.28,975.991Z"
                                        transform="translate(-842.827 -854.23)"></path>
                                    <path id="Path_3177" data-name="Path 3177" class="cls-10"
                                        d="M1055.736,593.185a10.888,10.888,0,0,1-.869,6.353c-2.556,5.32-8.887,6.357-14.225,6.565a31.779,31.779,0,0,1-5.919-.313,38.848,38.848,0,0,0-5.058-.035,19.365,19.365,0,0,1-9.886-2.975,9.189,9.189,0,0,1-3.512-3.584c-1.009-2.1-.716-4.582-.182-6.85a13.827,13.827,0,0,1,1.368-3.781c.72-1.247,1.752-2.306,2.352-3.614,1.127-2.459.2-5.334,1.2-7.747a14.161,14.161,0,0,1,4.395-5.2,12.01,12.01,0,0,1,7.842-1.928,33.3,33.3,0,0,1,8,1.867c2.055.672,3.823.256,5.331,1.954,1.2,1.346.778,3.543,1.16,5.174C1049.024,584.551,1054.871,587.445,1055.736,593.185Z"
                                        transform="translate(-981.41 -538.759)"></path>
                                    <path id="Path_3178" data-name="Path 3178" class="cls-14"
                                        d="M874.371,745.156c-3.488,5.979-7.414,11.717-11.167,17.532-2.1,3.247-4.217,6.549-5.341,10.247-5.174-.127-10.362-1.221-15.443-2.193.817-6.863,4.439-13.084,7.679-19.065,3.376-6.232,7.012-12.323,10.189-18.661,2.583-5.154,7.409-11.3,13.861-8.206,4.965,2.384,4.193,9.215,3.168,13.621A24.737,24.737,0,0,1,874.371,745.156Z"
                                        transform="translate(-837.851 -666.37)"></path>
                                    <path id="Path_3179" data-name="Path 3179" class="cls-13"
                                        d="M1223.516,975.991c.214-.484.43-.979.658-1.489a73.453,73.453,0,0,0,5.174-16.641c.381-2.064.767-4.323,2.345-5.708,2.183-1.916,6.435-1.671,9.138-1.309a4.869,4.869,0,0,1,3.346,1.626c1.264,1.692,1.138,5.511,1.188,7.549.3,12.391-9.493,22.634-17.47,31-1.536,1.61-3.2,3.238-5.331,3.889s-4.829-.026-5.76-2.046c-.683-1.483-.264-3.225.276-4.766A31.23,31.23,0,0,1,1221,980.71,27.385,27.385,0,0,0,1223.516,975.991Z"
                                        transform="translate(-1147.91 -854.23)"></path>
                                    <path id="Path_3180" data-name="Path 3180" class="cls-14"
                                        d="M1186.788,745.156c3.488,5.979,7.415,11.717,11.167,17.532,2.1,3.247,4.217,6.549,5.341,10.247,5.173-.127,10.362-1.221,15.443-2.193-.817-6.863-4.439-13.084-7.679-19.065-3.376-6.232-7.012-12.323-10.189-18.661-2.583-5.154-7.408-11.3-13.86-8.206-4.965,2.384-4.193,9.215-3.168,13.621A24.728,24.728,0,0,0,1186.788,745.156Z"
                                        transform="translate(-1120.251 -666.37)"></path>
                                    <g id="Group_13160" data-name="Group 13160" transform="translate(26.116 54.496)">
                                        <path id="Path_3181" data-name="Path 3181" class="cls-1"
                                            d="M1019.661,778.793c-1.439-3.823-3.6-6.951-4.848-10.9-1.687-5.362-2.836-13.007-.9-18.557,2.057-5.893,4.58-10.542,4.734-17.106.131-5.62-1-11.156-2.128-16.63-1.116-5.422-1.621-7-6.93-7.823-1.892-.295-3.76-.807-5.648-1.142a55.95,55.95,0,0,0-9.7-.829v0h-.254v0a55.955,55.955,0,0,0-9.7.829c-1.888.335-3.756.847-5.648,1.142-5.308.827-5.814,2.4-6.93,7.823-1.127,5.474-2.259,11.01-2.128,16.63.153,6.564,2.677,11.213,4.734,17.106,1.937,5.55.788,13.2-.9,18.557-1.244,3.951-3.409,7.079-4.848,10.9a1.541,1.541,0,0,0-.135.936,1.509,1.509,0,0,0,.857.822c7.055,3.686,14.963,4.794,22.7,5.364.679.05,1.34.1,1.993.141v.018l.137-.009.137.009v-.018c.652-.043,1.314-.091,1.993-.141,7.733-.57,15.641-1.678,22.7-5.364a1.51,1.51,0,0,0,.857-.822A1.541,1.541,0,0,0,1019.661,778.793Z"
                                            transform="translate(-968.399 -705.801)"></path>
                                        <g id="Group_13159" data-name="Group 13159" class="cls-15">
                                            <path id="Path_3182" data-name="Path 3182" class="cls-1"
                                                d="M1057.721,700.53c.328-1.009,1.562-3.257.939-4.138s-2.949-.7-3.856-.665l-29.939,1.006c.577,2.14.6,4.135,1.422,6.251a20.092,20.092,0,0,0,2.8,5.032,15.866,15.866,0,0,0,9.486,5.932,16.224,16.224,0,0,0,16.786-7.56A30.844,30.844,0,0,0,1057.721,700.53Z"
                                                transform="translate(-1015.207 -697.419)"></path>
                                        </g>
                                    </g>
                                    <path id="Path_3184" data-name="Path 3184" class="cls-13"
                                        d="M1065.986,642.144c3.126,3.555,9.136,3.837,13.342,2.383a6.813,6.813,0,0,0,4.947-6.351c.067-3.47-2.976-5.935-3.745-9.168a21.748,21.748,0,0,1-.348-5.587c.053-2.177.068-4.36.173-6.533a23.108,23.108,0,0,0-6.19-.589c-1.894.078-3.785-.12-5.677-.009a.668.668,0,0,0-.425.126.609.609,0,0,0-.141.408c-.254,2.939,0,5.916-.2,8.861a14.836,14.836,0,0,1-2.374,7.672A7.158,7.158,0,0,0,1065.986,642.144Z"
                                        transform="translate(-1021.638 -577.074)"></path>
                                    <g id="Group_13162" data-name="Group 13162" transform="translate(50.1 6.997)">
                                        <g id="Group_13161" data-name="Group 13161">
                                            <path id="Path_3185" data-name="Path 3185" class="cls-11"
                                                d="M1108.632,429.379a12.25,12.25,0,0,1,5.121-1.286,19.825,19.825,0,0,1,5.29.546,18.948,18.948,0,0,1,9.264,5.076,16.687,16.687,0,0,1,4.809,9.413,45.784,45.784,0,0,1,.193,5.33,12.588,12.588,0,0,0,.9,5.087,10.361,10.361,0,0,0,3.419,3.825c1.418,1.025,2.987,1.845,4.5,2.781a6.8,6.8,0,0,1,2.1,1.74,4.654,4.654,0,0,1,.687,2.656,9.806,9.806,0,0,1-.342,2.684,18.553,18.553,0,0,1-.977,2.493,5.036,5.036,0,0,0-.475,2.495,7.607,7.607,0,0,0,.732,2.478c.75,1.588,1.674,3.107,2.436,4.714a14.58,14.58,0,0,1,1.483,5.1,12.568,12.568,0,0,1-.651,5.243,12.5,12.5,0,0,0,.53-5.231,14.392,14.392,0,0,0-1.582-5.005c-.78-1.581-1.717-3.083-2.5-4.686a7.921,7.921,0,0,1-.795-2.58,5.407,5.407,0,0,1,.468-2.672,18.293,18.293,0,0,0,.929-2.457,9.5,9.5,0,0,0,.314-2.569,4.234,4.234,0,0,0-.619-2.408,6.414,6.414,0,0,0-1.974-1.606c-1.5-.919-3.082-1.736-4.542-2.78a10.818,10.818,0,0,1-3.592-4,13.03,13.03,0,0,1-.926-5.293,45.616,45.616,0,0,0-.166-5.275,16.529,16.529,0,0,0-4.632-9.206,18.675,18.675,0,0,0-9.047-5.109,19.637,19.637,0,0,0-5.229-.661A12.184,12.184,0,0,0,1108.632,429.379Z"
                                                transform="translate(-1108.632 -428.078)"></path>
                                        </g>
                                    </g>
                                    <path id="Path_3186" data-name="Path 3186" class="cls-16"
                                        d="M1096.085,628.454a23.5,23.5,0,0,1-.263-5.176c.053-2.177.068-4.36.173-6.533a23.113,23.113,0,0,0-6.19-.589c-1.893.078-3.785-.12-5.677-.008a.668.668,0,0,0-.425.126.61.61,0,0,0-.141.408c-.254,2.939,0,5.916-.2,8.861a21.619,21.619,0,0,1-.318,2.519c.3.26.6.51.911.74a9.7,9.7,0,0,0,8.284,1.509A12.513,12.513,0,0,0,1096.085,628.454Z"
                                        transform="translate(-1037.318 -576.956)"></path>
                                    <path id="Path_3187" data-name="Path 3187" class="cls-13"
                                        d="M1066.781,469.715a26.4,26.4,0,0,0-1.27-7.872c-3.341-9.753-15.6-12-22.859-4.859-8.1,7.961-4.686,26.671,4.055,33.134a9.7,9.7,0,0,0,8.284,1.509C1063.453,489.227,1066.964,478.721,1066.781,469.715Z"
                                        transform="translate(-1000.033 -441.576)"></path>
                                    <path id="Path_3188" data-name="Path 3188" class="cls-16"
                                        d="M1064.63,453.889c-2.631-9.968-14.7-13.089-22.45-6.49a16.246,16.246,0,0,0-2.977,3.651,39.9,39.9,0,0,0-2.45,3.253,11.272,11.272,0,0,0-1.242,4.156c-.137,1.41.324,2.642.359,4a4.942,4.942,0,0,1,1.634-3.771,15.675,15.675,0,0,1,2.817-1.7,4.625,4.625,0,0,0,2.253-2.309c3.085,4.044,7.872,5.282,12.582,6.449,3.952.979,8.289,3.47,8.378,8.085a3.942,3.942,0,0,0,.3,1.512,6.717,6.717,0,0,0,.463-1.943c.085-.752.3-1.5.451-2.254a33.42,33.42,0,0,0,.579-4.692A26.4,26.4,0,0,0,1064.63,453.889Z"
                                        transform="translate(-997.896 -434.211)"></path>
                                    <path id="Path_3189" data-name="Path 3189" class="cls-9"
                                        d="M1046.143,462.624a5.327,5.327,0,0,0,1.717-2.39c1.054-3.1.94-6.525.812-9.843a23.146,23.146,0,0,0-.654-5.491,13.937,13.937,0,0,0-2.838-5.1,16.71,16.71,0,0,0-14.039-5.936c-2.06.176-3.575,1.163-5.384,2a53.728,53.728,0,0,1-5.7,1.88,17.051,17.051,0,0,0-6.051,2.933,11.038,11.038,0,0,0-2.8,4.034,11.423,11.423,0,0,0-.63,5.786,15.153,15.153,0,0,0,1.1,4.8,7.484,7.484,0,0,0,3.469,3.009,13.126,13.126,0,0,1-.031-2.767,18.676,18.676,0,0,1,.72-6.083,8.322,8.322,0,0,1,3.426-4.238,11.724,11.724,0,0,0,1.8-1.533c.266-.294,1.424-1.647,1.235-2.065a13.826,13.826,0,0,0,4.076,5.33,46.381,46.381,0,0,0,10.874,5.7c.279.109.56.217.84.329a9.4,9.4,0,0,1,2.922,1.672c1.91,1.738,2.048,4.409,1.977,6.817a2.24,2.24,0,0,0,.072.784C1043.467,463.437,1045.378,463.208,1046.143,462.624Z"
                                        transform="translate(-977.163 -425.835)"></path>
                                    <path id="Path_3190" data-name="Path 3190" class="cls-17"
                                        d="M907.513,940.655l-.608,1.441h72.49l-.727-1.62Z"
                                        transform="translate(-891.307 -845.844)"></path>
                                    <path id="Path_3191" data-name="Path 3191" class="cls-17"
                                        d="M976.764,984.652H914.251l-4.479-46.54a1.411,1.411,0,0,1,1.391-1.557h68.689a1.411,1.411,0,0,1,1.391,1.557Z"
                                        transform="translate(-893.678 -842.592)"></path>
                                    <path id="Path_3192" data-name="Path 3192" class="cls-18"
                                        d="M974.536,992.346H911.042l-4.549-46.54a1.419,1.419,0,0,1,1.413-1.558h69.767a1.419,1.419,0,0,1,1.413,1.558Z"
                                        transform="translate(-890.959 -848.97)"></path>
                                    <rect id="Rectangle_11158" data-name="Rectangle 11158" class="cls-17" width="63.457"
                                        height="2.824" transform="translate(20.082 143.376)"></rect>
                                    <circle id="Ellipse_75" data-name="Ellipse 75" class="cls-17" cx="4.402" cy="4.402"
                                        r="4.402" transform="translate(46.721 122.886) rotate(-79.862)"></circle>
                                    <path id="Path_3193" data-name="Path 3193" class="cls-9"
                                        d="M1060.082,1179.374c2.9-.521,5.8-1.093,8.664-1.571,14.394-2.4,29.4-5.213,42.477-11.958,3.013-1.56,6.147-4.015,7.711-7.078,4.1-8.056-4.087-15.615-12.089-13.329-13.363,3.818-24.97,12.1-37.78,17.489-2.138.9-4.291,1.841-6.456,2.787-1.859.812-3.727,1.628-5.6,2.425"
                                        transform="translate(-1015.737 -1015.407)"></path>
                                    <path id="Path_3194" data-name="Path 3194" class="cls-13"
                                        d="M964.915,1280.181c-2.143.911-4.3,1.8-6.453,2.625-2.206.846-14.981,3.665-12.137,8.485.559.946,1.794,1.195,2.885,1.332,6.269.788,12.556-.092,18.778-1.208"
                                        transform="translate(-923.644 -1127.448)"></path>
                                    <path id="Path_3195" data-name="Path 3195" class="cls-13"
                                        d="M860.947,1288.231c-2.763.313-5.653.217-8.217.366-1.156.067-2.313.134-3.471.125a52.236,52.236,0,0,1-5.5-.434l-3.983-.456a3.42,3.42,0,0,1-3.509-2.723,50.367,50.367,0,0,1-2.023-4.783c-.329-1.084-.682-2.151.049-3.157a5.258,5.258,0,0,1,1.363-1.207,9.684,9.684,0,0,1,2.06-1.109c2.414-.885,4.658.061,6.915.93a54.4,54.4,0,0,0,7.266,2.487,50.8,50.8,0,0,0,8.21.912c2.194.139,5.6-.034,7.407,1.445a4.953,4.953,0,0,1,1.812,2.974c-.02,1.246-1.547,2.371-2.5,2.914A15.226,15.226,0,0,1,860.947,1288.231Z"
                                        transform="translate(-830.759 -1122.736)"></path>
                                    <path id="Path_3196" data-name="Path 3196" class="cls-13"
                                        d="M1055.952,1571.684c1.467,2.362,3.335,4.57,4.808,6.674.664.948,1.329,1.9,2.055,2.8a52.164,52.164,0,0,0,3.75,4.044l2.828,2.842a3.42,3.42,0,0,0,4.312,1.064c3.128-.87,6.1-.94,6.176-4.921.05-2.525-.9-5.381-3.022-6.811-2.462-1.656-5.151-2.9-7.48-4.772a50.792,50.792,0,0,1-5.807-5.875c-1.47-1.635-3.448-4.418-5.726-4.915a4.955,4.955,0,0,0-3.457.423c-.965.788-.9,2.684-.738,3.766A15.22,15.22,0,0,0,1055.952,1571.684Z"
                                        transform="translate(-1012.875 -1360.813)"></path>
                                    <path id="Path_3197" data-name="Path 3197" class="cls-19"
                                        d="M836.137,1286.441c-2.341-.5-5.284-1.344-6.7-3.274a7.069,7.069,0,0,1-1.128-5.13c.216-1.777,1.767-3.023,3.448-3.639a13.806,13.806,0,0,0-11.7-2.1,6.655,6.655,0,0,0-1.266.467c-5.424,2.647-2.821,9.345,1.075,12.054a12.348,12.348,0,0,0,6.025,2.145c1.736.141,2.911.08,4.65.073C832.644,1287.025,833.738,1286.648,836.137,1286.441Z"
                                        transform="translate(-815.704 -1120.507)"></path>
                                    <path id="Path_3198" data-name="Path 3198" class="cls-19"
                                        d="M1099.79,1645.758c1.847,1.524,4.33,3.312,6.723,3.226a7.068,7.068,0,0,0,4.724-2.3c1.26-1.272,1.276-3.261.717-4.962a13.806,13.806,0,0,1,8.905,7.876,6.649,6.649,0,0,1,.418,1.282c1.287,5.9-5.582,8.008-10.123,6.631a12.352,12.352,0,0,1-5.419-3.4c-1.188-1.275-1.868-2.234-2.941-3.6C1101.5,1648.86,1101.115,1647.768,1099.79,1645.758Z"
                                        transform="translate(-1051.202 -1427.156)"></path>
                                    <path id="Path_3199" data-name="Path 3199" class="cls-13"
                                        d="M929.2,1228.348c1.105,4.206,2.222,8.454,3.512,12.589.026.082.054.164.082.245.6,1.713,1.341,3.375,1.922,5.1a29.945,29.945,0,0,1,.942,3.339,15.674,15.674,0,0,1,.263,1.611,2.372,2.372,0,0,1,.046.761,1.169,1.169,0,0,1-.647.616,2.381,2.381,0,0,1-.828.17,8.615,8.615,0,0,1-3.308-.642q-.988-.35-1.95-.767a11.4,11.4,0,0,1-1.812-.866,3.2,3.2,0,0,1-.623-.745q-.309-.408-.609-.822-.6-.828-1.171-1.678c-1.737-2.588-3.273-5.3-4.749-8.046-1.464-2.722-2.868-5.475-4.36-8.181-7.045-12.779-14.143-26.3-16.959-40.739-.644-3.331-.662-7.312.771-10.439,3.776-8.214,14.785-6.476,17.953,1.218,5.291,12.852,5.994,27.091,9.707,40.484C928,1223.79,928.6,1226.062,929.2,1228.348Z"
                                        transform="translate(-884.367 -1039.795)"></path>
                                    <path id="Path_3200" data-name="Path 3200" class="cls-9"
                                        d="M920.08,1238.829c-1.393-2.6-2.736-5.224-4.14-7.771-7.045-12.779-14.143-26.3-16.959-40.739-.644-3.331-.663-7.312.771-10.439,3.776-8.214,14.785-6.476,17.953,1.219,5.291,12.851,5.994,27.091,9.707,40.484.62,2.236,1.217,4.508,1.817,6.794.516,1.963,1.034,3.934,1.571,5.9"
                                        transform="translate(-884.39 -1039.818)"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <div class="relative w-4/12" style="top: 0;">
                        <div class="container my-auto p-6">
                            <span class="absolute h-10 w-10 z-10 arrow arrow-gray"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative bg-theme-gray-1">
          <div class="relative z-0">
            <div class="absolute bg-white inset-0 w-1/2"></div>
            <div class="lg:px-8 mx-auto px-4 sm:px-6 w-8/12">
              <div class="gap-3 md:grid md:grid-cols-3 relative" style="bottom: -3rem;">
                <div class="bg-white col-span-1 flex flex-col shadow text-center">
                  <div class="flex flex-1 flex-col px-8 py-4">
                    <h1 class="border-b border-theme-gray-1 font-medium pb-4 text-md xl:text-3xl  text-theme-pink">Viverra </h1>
                    <p class="font-normal px-8 py-4 text-left text-sm xl:text-xl">
                      <strong class="font-medium">Sed varius cursus fringilla. Interdum:</strong> et
                      malesuada fames ac ante ipsum primis in faucibus. Suspendisse feugiat orci sed velit
                      pulvinar pretium.
                    </p>
                  </div>
                  <div class="-mb-1 relative">
                    <div class="-mt-px border-b-4 border-theme-pink flex justify-center mx-8">
                      <img src="{{ asset('img/hsm-logo-1.png')}}">
                    </div>
                  </div>
                </div>
                <div class="bg-white col-span-1 flex flex-col shadow text-center">
                  <div class="flex flex-1 flex-col px-8 py-4">
                    <h1 class="border-b border-theme-gray-1 font-medium pb-4 text-md xl:text-3xl  text-theme-green">Pretium </h1>
                    <p class="font-normal px-3 py-4 text-left text-sm xl:text-xl">
                      <strong class="font-medium">Nullam tincidunt at diam at faucibus. Nunc euismod felis in lectus cursus, eget laoreet est sagittis:</strong> Etiam ut pharetra urna, interdum malesuada quam. Aenean vel imperdiet urna.
                    </p>
                  </div>
                  <div class="-mb-1 relative">
                    <div class="-mt-px border-b-4 border-theme-green flex justify-center mx-8">
                      <img class="mb-3 w-1/2" src="{{ asset('/img/havard-logo.png')}}">
                    </div>
                  </div>
                </div>
                <div class="bg-white col-span-1 flex flex-col shadow text-center">
                  <div class="flex flex-1 flex-col px-8 py-4">
                    <h1 class="border-b border-theme-gray-1 font-medium pb-4 text-md xl:text-3xl text-theme-lightblue">Mauris </h1>
                    <p class="font-normal px-3 py-4 text-left text-sm xl:text-xl">
                      <strong class="font-medium">Hac habitasse platea dictumstl tiam tortor diam: </strong> ornare vel libero eget, posuere malesuada lectus. Vestibulum quis lacus lacinia, porttitor felis aliquet, sollicitudin neque.
                    </p>
                  </div>
                  <div class="-mb-1 relative">
                    <div class="-mt-px border-b-4 border-theme-lightblue flex justify-center mx-8">
                      <img class="mb-3 w-1/2" src="{{ asset('img/hsm-logo-2.png')}}">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section id="more-info" class="section-2 pt-20 bg-theme-black">
      <div class="container m-auto w-8/12">
        <h1 class="text-4xl text-white font-bold my-16 mx-4 ">Praesent volutpat consequat odio</h1>
        <div class="flex">
          <div class="flex-1 w-1/3 m-2">
            <div class="bg-white flex justify-between mb-2 mr-2 p-8  more-info-item-shadow">
              <h1 class="text-lg text-theme-pink font-medium"> Viverra </h1>
              <span class="float-right">
                <svg class="text-theme-pink stroke-current" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" width="28" height="26.828" viewBox="0 0 28 26.828">
                  <g id="arrow-forward-outline" transform="translate(-99 -110.586)">
                    <path id="Path_3098" data-name="Path 3098" d="M268,112l12,12-12,12" transform="translate(-154 0)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    <line id="Line_1334" data-name="Line 1334" x1="24" transform="translate(100 124)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  </g>
                </svg>
            </div>
            <div class="flex justify-between p-8  mb-1 bg-theme-gray-4">
              <h1 class="text-lg font-medium text-theme-gray-6"> Pretium </h1>
              <span class="float-right">
                <svg class="text-theme-gray-6 stroke-current" stroke="currentColor"  xmlns="http://www.w3.org/2000/svg" width="28" height="26.828" viewBox="0 0 28 26.828">
                  <g id="arrow-forward-outline" transform="translate(-99 -110.586)">
                    <path id="Path_3098" data-name="Path 3098" d="M268,112l12,12-12,12" transform="translate(-154 0)" fill="none"  stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    <line id="Line_1334" data-name="Line 1334" x1="24" transform="translate(100 124)" fill="none"  stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  </g>
                </svg>
                
              </span>
                
            </div>
            <div class="flex justify-between p-8  mb-1 bg-theme-gray-4">
              <h1 class="text-lg font-medium text-theme-gray-6"> Mauris </h1>
              <span class="float-right">
                <svg class="text-theme-gray-6 stroke-current" stroke="currentColor" xmlns="http://www.w3.org/2000/svg" width="28" height="26.828" viewBox="0 0 28 26.828">
                  <g id="arrow-forward-outline" transform="translate(-99 -110.586)">
                    <path id="Path_3098" data-name="Path 3098" d="M268,112l12,12-12,12" transform="translate(-154 0)" fill="none"  stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    <line id="Line_1334" data-name="Line 1334" x1="24" transform="translate(100 124)" fill="none"  stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                  </g>
                </svg>
              </span>
            </div>
          </div>
          <div class="flex-1 w-1/3 m-2">
            <div class="flex h-20 justify-between mb-1 px-6 py-4 bg-theme-gray-5">
              <h1 class="text-sm font-normal text-white"> Fringilia </h1>
              <span class="text-xs text-theme-pink">Euismood</span>
            </div>
            <div class="flex h-20 justify-between mb-1 px-6 py-4 bg-theme-gray-5">
              <h1 class="text-sm font-normal text-white"> Faucibus </h1>
              <span class="text-xs text-theme-pink">Euismood</span>
            </div>
            <div class="flex h-20 justify-between mb-1 px-6 py-4 bg-theme-gray-5">
              <h1 class="text-sm font-normal text-white"> Malesuada </h1>
              <span class="text-xs text-theme-pink">Euismood</span>
            </div>
            <div class="flex h-20 justify-between mb-1 px-6 py-4 bg-theme-gray-5">
              <h1 class="text-sm font-normal text-white"> Etiam ut pharetra uma </h1>
              <span class="text-xs text-theme-pink">Euismood</span>
            </div>
            <div class="flex h-20 justify-between mb-1 px-6 py-4 bg-theme-gray-5">
              <h1 class="text-sm font-normal text-white"> Imperdiet </h1>
              <span class="text-xs text-theme-pink">Euismood</span>
            </div>
            <div class="flex h-20 justify-between mb-1 px-6 py-4 bg-theme-gray-5">
              <h1 class="text-sm font-normal text-white"> Solicitudin </h1>
              <span class="text-xs text-theme-pink">Euismood</span>
            </div>
          </div>
          <div class="flex-1 w-1/3 m-2">
            <div class="flex h-20 justify-between mb-1 px-6 py-4 bg-theme-gray-5">
              <h1 class="text-sm font-normal text-white"> Lacus Lacinia </h1>
              <span class="text-xs text-theme-pink">Euismood</span>
            </div>
            <div class="flex h-20 justify-between mb-1 px-6 py-4 bg-theme-gray-5">
              <h1 class="text-sm font-normal text-white"> Interdum Malesuada </h1>
              <span class="text-xs text-theme-pink">LAC</span>
            </div>
            <div class="flex h-20 justify-between mb-1 px-6 py-4 bg-theme-gray-5">
              <h1 class="text-sm font-normal text-white"> Etiam Phareta </h1>
              <span class="text-xs text-theme-pink">Euismood</span>
            </div>
            <div class="flex h-20 justify-between mb-1 px-6 py-4 bg-theme-gray-5">
              <h1 class="text-sm font-normal text-white"> Posuere Malesuada </h1>
              <span class="text-xs text-theme-pink">Euismood</span>
            </div>
            <div class="flex h-20 justify-between mb-1 px-6 py-4 bg-theme-gray-5">
              <h1 class="text-sm font-normal text-white"> Pulvinar Pretium </h1>
              <span class="text-xs text-theme-pink">Euismood</span>
            </div>
            <div class="flex h-20 justify-between mb-1 px-6 py-4 bg-theme-gray-5">
              <h1 class="text-sm font-normal text-white"> Faucibus Feuiat </h1>
              <span class="text-xs text-theme-pink">Euismood</span>
            </div>
          </div>
        </div>
        <div class="relative" style="bottom : -3rem;">
          <div class="absolute h-32 inset-0"></div>
          <div class="bg-white flex h-32 justify-between m-auto"> 
            <div class="flex w-1/3 h-full border-r border-theme-gray-7 hover:bg-theme-gray-7 transition-colors duration-200">
              <a href="#" class="contact-item flex m-auto px-4 z-10">
                <svg class="fill-current hover:text-theme-lightblue icon-lightblue text-theme-gray-6 w-10" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg" width="64" height="46.273" viewBox="0 0 64 46.273">
                  <g id="Group_13271" data-name="Group 13271" transform="translate(-208 -55)">
                    <path id="Path_3240" data-name="Path 3240" d="M270,96.545a2.727,2.727,0,0,1-2.727,2.727H212.727A2.727,2.727,0,0,1,210,96.545V59.727A2.727,2.727,0,0,1,212.727,57h54.545A2.727,2.727,0,0,1,270,59.727Z" fill="none" stroke-miterlimit="10" stroke-width="4"></path>
                    <path id="Path_3241" data-name="Path 3241" d="M264.455,60,245.3,79.159a9.545,9.545,0,0,1-13.5,0L214,61.364" transform="translate(1.455 1.091)" fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4"></path>
                    <line id="Line_1336" data-name="Line 1336" y1="12.273" x2="12.273" transform="translate(215.455 81.545)" fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4"></line>
                    <line id="Line_1337" data-name="Line 1337" x1="12.273" y1="12.273" transform="translate(252.273 81.545)" fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4"></line>
                  </g>
                </svg>
                <div class="flex-wrap -mt-3 ">
                  <h1 class="break-words font-normal px-4 text-2xl text-theme-black">Alguma</h1>
                  <h1 class="break-words font-normal px-4 text-2xl text-theme-black">dúvida?</h1>
                </div>
              </a>
            </div>
            <div class="flex w-1/3 h-full border-r border-theme-gray-7 hover:bg-theme-gray-7 transition-colors duration-200">
              <a href="#" class="contact-item flex m-auto px-4 z-10 group">
                <svg class="fill-current group-hover:text-theme-lightblue icon-lightblue text-theme-gray-6 w-10" stroke="currentColor" fill="none" xmlns="http://www.w3.org/2000/svg" width="61.497" height="64.035" viewBox="0 0 61.497 64.035">
                    <g id="Group_13272" data-name="Group 13272" transform="translate(-48.901 -128.301)">
                      <path id="Path_3242" data-name="Path 3242" d="M57.13,162.363l-1.388,3.813a4.058,4.058,0,0,0,2.425,5.2l20.334,7.4a4.056,4.056,0,0,0,5.2-2.425l1.388-3.813" transform="translate(1.601 11.294)" fill="none" stroke-miterlimit="10" stroke-width="4"></path>
                      <path id="Path_3243" data-name="Path 3243" d="M97.041,137.965l-20.334-7.4a4.057,4.057,0,0,0-5.2,2.425L56.7,173.657l27.959,10.177,14.8-40.668A4.058,4.058,0,0,0,97.041,137.965Z" transform="translate(2.027 0)" fill="none" stroke-miterlimit="10" stroke-width="4"></path>
                      <line id="Line_1338" data-name="Line 1338" x2="5.083" y2="1.85" transform="translate(68.781 181.634)" fill="none" stroke-miterlimit="10" stroke-width="4"></line>
                      <path id="Path_3244" data-name="Path 3244" d="M60.7,143.14A6.763,6.763,0,0,0,57,153.313" transform="translate(1.741 4.519)" fill="none" stroke-miterlimit="10" stroke-width="4"></path>
                      <path id="Path_3245" data-name="Path 3245" d="M58.605,139.228A12.173,12.173,0,0,0,52.4,156.274" transform="translate(0 3.14)" fill="none" stroke-miterlimit="10" stroke-width="4"></path>
                      <path id="Path_3246" data-name="Path 3246" d="M88.6,153.4a6.763,6.763,0,0,1-3.7,10.172" transform="translate(11.964 8.135)" fill="none" stroke-miterlimit="10" stroke-width="4"></path>
                      <path id="Path_3247" data-name="Path 3247" d="M93.935,152.225a12.171,12.171,0,0,1-6.2,17.049" transform="translate(12.964 7.721)" fill="none" stroke-miterlimit="10" stroke-width="4"></path>
                    </g>
                  </svg>
                  <div class="flex-wrap -mt-3">
                    <h1 class="break-words font-normal px-4 text-2xl text-theme-black">Ligamos</h1>
                    <h1 class="break-words font-normal lg:text-3xl px-4 text-theme-black text-xl">pra você</h1>
                  </div>
                </a>
            </div>
            <div class="flex w-1/3 h-full  hover:bg-theme-gray-7 transition-colors duration-200">
              <a href="#" class="contact-item flex m-auto px-4 z-10">
                <svg class="fill-current group-hover:text-theme-green icon-green text-theme-gray-6 w-10" stroke="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60">
                  <path id="logo-whatsapp" d="M83.258,40.718A29.819,29.819,0,0,0,36.239,76.6L32,92l15.837-4.134a29.95,29.95,0,0,0,14.277,3.616h.012A29.848,29.848,0,0,0,92,61.749,29.488,29.488,0,0,0,83.258,40.718ZM62.126,86.462h-.011a24.877,24.877,0,0,1-12.637-3.445l-.907-.536-9.4,2.454,2.508-9.119-.591-.937A24.852,24.852,0,1,1,62.126,86.462ZM75.745,67.955c-.746-.372-4.42-2.17-5.1-2.417s-1.183-.372-1.679.372S67.037,68.32,66.6,68.823s-.871.557-1.617.185a20.418,20.418,0,0,1-6-3.687,22.4,22.4,0,0,1-4.152-5.146c-.435-.743-.047-1.146.327-1.516.336-.333.746-.868,1.12-1.3a5.026,5.026,0,0,0,.746-1.24,1.364,1.364,0,0,0-.062-1.3c-.186-.371-1.679-4.029-2.3-5.517-.607-1.449-1.221-1.252-1.679-1.275C52.545,48,52.042,48,51.548,48a2.75,2.75,0,0,0-1.99.929,8.325,8.325,0,0,0-2.613,6.2c0,3.654,2.679,7.189,3.048,7.685s5.263,8,12.751,11.218A43.273,43.273,0,0,0,67,75.593a10.277,10.277,0,0,0,4.7.295c1.434-.213,4.42-1.8,5.04-3.533a6.2,6.2,0,0,0,.435-3.532C76.991,68.513,76.492,68.326,75.745,67.955Z" transform="translate(-32 -31.999)" fill-rule="evenodd"></path>
                </svg>
                <div class="flex-wrap -mt-3">
                  <h1 class="break-words font-normal lg:text-2xl px-4 text-theme-black text-xl">Fale pelo</h1>
                  <h1 class="break-words font-normal lg:text-2xl px-4 text-theme-black text-xl">WhatsApp</h1>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

    </section>
    <footer id="footer" class="bg-theme-gray-1 pb-3 pt-40">
      <div class="container m-auto w-8/12">
        <div class="flex m-auto justify-between">
          <div class="w-2/12">
            <img src="{{ asset('img/rits-logo.png') }}" class="w-1/2">
          </div>
          <div id="social-links" class="flex -m-2 items-baseline">
            <a href="#social-links" class="p-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="11" height="20" viewBox="0 0 11 20">
                <path id="facebook" d="M18,2H15a5,5,0,0,0-5,5v3H7v4h3v8h4V14h3l1-4H14V7a1,1,0,0,1,1-1h3Z" transform="translate(-7 -2)" fill="gray"/>
              </svg> 
            </figure>
            <a href="#social-links" class="p-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 25 20">
                <path id="logo-twitter" d="M41,66.37a10.51,10.51,0,0,1-2.945.8,5.079,5.079,0,0,0,2.257-2.792A10.3,10.3,0,0,1,37.053,65.6,5.164,5.164,0,0,0,33.308,64a5.087,5.087,0,0,0-5.128,5.047,4.855,4.855,0,0,0,.132,1.151,14.62,14.62,0,0,1-10.573-5.276,4.984,4.984,0,0,0-.7,2.536,5.034,5.034,0,0,0,2.292,4.2A5.078,5.078,0,0,1,17,71.031v.063a5.071,5.071,0,0,0,4.115,4.948,5.248,5.248,0,0,1-1.351.177,4.916,4.916,0,0,1-.964-.094,5.127,5.127,0,0,0,4.794,3.505,10.4,10.4,0,0,1-6.371,2.161A10.571,10.571,0,0,1,16,81.719,14.514,14.514,0,0,0,23.851,84,14.378,14.378,0,0,0,38.457,69.635c0-.219-.006-.437-.016-.651A10.337,10.337,0,0,0,41,66.37Z" transform="translate(-16 -64)" fill="gray"/>
              </svg>
              
            </a>
            <a href="#social-links" class="p-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <g id="logo-instagram" transform="translate(-32 -32)">
                  <path id="Path_2158" data-name="Path 2158" d="M46.167,33.667a4.179,4.179,0,0,1,4.167,4.167v8.333a4.179,4.179,0,0,1-4.167,4.167H37.833a4.179,4.179,0,0,1-4.167-4.167V37.833a4.179,4.179,0,0,1,4.167-4.167h8.333m0-1.667H37.833A5.851,5.851,0,0,0,32,37.833v8.333A5.851,5.851,0,0,0,37.833,52h8.333A5.851,5.851,0,0,0,52,46.167V37.833A5.851,5.851,0,0,0,46.167,32Z" fill="gray"/>
                  <path id="Path_2159" data-name="Path 2159" d="M350.58,109.17a1.247,1.247,0,1,1,.885-.365A1.25,1.25,0,0,1,350.58,109.17Z" transform="translate(-303.163 -71.337)" fill="gray"/>
                  <path id="Path_2160" data-name="Path 2160" d="M149,145.667A3.333,3.333,0,1,1,145.667,149,3.333,3.333,0,0,1,149,145.667M149,144a5,5,0,1,0,5,5A5,5,0,0,0,149,144Z" transform="translate(-107 -107)" fill="gray"/>
                </g>
              </svg>
            </a>
            <a href="#social-links" class="p-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="20.001" height="20" viewBox="0 0 20.001 20">
                <path id="logo-linkedin" d="M40.465,56.168h-4.3V42.809h4.3Zm-2-15.391h-.031a2.336,2.336,0,1,1,.031,0Zm17.7,15.391h-4.3v-7.3c0-1.75-.625-2.946-2.18-2.946a2.349,2.349,0,0,0-2.2,1.586,2.894,2.894,0,0,0-.149,1.055v7.609h-4.3V42.809h4.3v1.859A4.351,4.351,0,0,1,51.214,42.5c2.821,0,4.954,1.859,4.954,5.867Z" transform="translate(-36.168 -36.168)" fill="gray"/>
              </svg>
            </a>
            <a href="#social-links" class="p-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="21.33" height="16" viewBox="0 0 21.33 16">
                <path id="logo-youtube" d="M21.187,67.533A3.239,3.239,0,0,0,18.1,64.15C15.8,64.042,13.441,64,11.036,64h-.75c-2.4,0-4.758.042-7.066.15A3.246,3.246,0,0,0,.14,67.542c-.1,1.483-.148,2.966-.146,4.449s.043,2.968.142,4.454a3.25,3.25,0,0,0,3.079,3.4c2.425.112,4.912.162,7.441.158s5.014-.044,7.441-.158a3.25,3.25,0,0,0,3.083-3.4c.1-1.487.146-2.971.142-4.458S21.287,69.019,21.187,67.533ZM8.619,76.078V67.891l6.042,4.092Z" transform="translate(0.006 -64)" fill="gray"/>
              </svg>
            </a>
          </div>
      </div>
      <div class="flex items-baseline justify-between mt-6">
        <div class="flex justify-start w-10/12">
          <span class="text-theme-gray-2 text-xs">Copyright © 2020 - Rits Tecnologia. Todos os direitos reservados. <a href="#footer" class="underline">Política de Privacidade</a></span>
        </div>
        <div class="-m-2 flex items-baseline justify-end w-2/12">
          <span class="text-theme-gray-2 text-xs">Rits</span>
        </div>
      </div>
    </footer>
@endsection
