<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('/css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <section class="frontPage">
        <header class="container mx-auto  px-12">
            <!-- Navbar section start here !-->
            <div class="w-full">
                <nav class="md:flex items-center  py-2  lg:px-12 space-x-32">
                    <div class="flex items-center justify-between ">
                        <div class="">
                            <a href=""><img src="/assets/logo.png" alt="logo"></a>
                        </div>
                        <div class="md:hidden">
                            <button type="button" id="nav-toggle" class="block text-gray-800 hover:text-gray-700 focus:text-gray-700 focus:outline-none">
                                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                                    <path class="hidden" d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z" />
                                    <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col bg-red-100 md:bg-transparent  md:flex-row hidden md:block -mx-2 " id="nav-content">
                        <a href="#" class="hover:text-red-500 hover:font-medium py-2 px-2 md:mx-2">Home</a>
                        <a href="#about" class="hover:text-red-500 hover:font-medium py-2 px-2 md:mx-2">About</a>
                        <a href="#feature" class="hover:text-red-500 hover:font-medium py-2 px-2 md:mx-2">Feature</a>
                        <a href="#service" class="hover:text-red-500 hover:font-medium py-2 px-2 md:mx-2">service</a>
                        <a href="#contact-us" class="hover:text-red-500 hover:font-medium py-2 px-2 md:mx-2">Contact</a>
                    </div>
                </nav>
            </div>
            <!-- Navbar section end here !-->

            <!-- Banner section start -->
            <div class="flex" style="height:600px;">
                <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
                    <div>
                        <p class="text-red-400">SPA & BEAUTY CENTER</p>
                        <h1 class="text-3xl font-semibold text-gray-800 md:text-4xl">Beauty and success starts here. </h1>
                        <p class="mt-2 text-sm text-gray-500 md:text-base">Together creeping heaven upon third dominion be upon won't darkness rule behold it created good saw after she'd Our set living.</p>
                        <div class="flex justify-center lg:justify-start mt-6">
                            <a class="px-3 py-4 bg-red-400 text-white  hover:text-black" href="#">RESERVE NOW</a>
                            <a class="mx-4 px-3 py-4 text-gray-500   hover:text-red-400" href="#">
                                <i class="mx-4 far fa-play-circle bg-red-200 rounded-full"></i>
                                Watch our story</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Banner section end -->
        </header>
    </section>


    <!-- About section start here -->
    <section class="container mx-auto  px-12" id="about">
        <div class="max-w-4xl px-6 text-center mx-auto ">
            <img src="/assets/china-rose.png " class="">
            <div class="flex items-end justify-center">
                <img src="/assets/butterfly.png">
            </div>
            <p class="py-8">ABOUT OUR SPA CENTER</p>
            <h2 class="text-3xl font-semibold text-gray-800">Come and you will be Inspired!</h2>
            <p class="text-gray-600 mt-4">It’s the end of summer the sweltering heat makes human sweat in the night and makes the plants and trees wilt even in the moonlit nights. The eastern wind breeze brings an eerie feeling, that the monsoon clouds are soon coming, there is a strange silence in the ears, the sky gets darker and darker</p>
            <div class="py-20 ">
                <button class="bg-red-400  font-bold text-white hover:text-black  py-4 px-12 rounded-full">
                    READ MORE
                </button>
            </div>
        </div>
    </section>
    <!-- About section end here -->



    <div class="flex flex-row flex-wrap -mx-10" id="service">
        <div class="flex flex-col justify-center items-center max-w-sm mx-auto my-4 hover:bg-red-500 body-treatment">
            <img class="w-full treatment-image" src="https://dummyimage.com/370x450/525252/525252/.png">
            <div class="treatment-icon transition ease-linear opacity-0 absolute ">
                <img class="text-white" src="/assets/1.png">
                <p class=" text-white ">Body Treatment</p>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center max-w-sm mx-auto my-4 hover:bg-red-500 body-treatment">
            <img class="w-full treatment-image" src="https://dummyimage.com/370x450/525252/525252.png">
            <div class="treatment-icon transition self-center ease-linear opacity-0 absolute ">
                <img class="text-white" src="/assets/1.png">
                <p class=" text-white ">Body Treatment</p>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center max-w-sm mx-auto my-4 hover:bg-red-500 body-treatment">
            <img class="w-full treatment-image" src="https://dummyimage.com/370x450/525252/525252.png">
            <div class="treatment-icon transition ease-linear opacity-0 absolute ">
                <img class="text-white" src="/assets/1.png">
                <p class=" text-white ">Body Treatment</p>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center max-w-sm mx-auto my-4 hover:bg-red-500 body-treatment">
            <img class="w-full treatment-image" src="https://dummyimage.com/370x450/525252/525252.png">
            <div class="treatment-icon transition ease-linear opacity-0 absolute ">
                <img class="text-white" src="/assets/1.png">
                <p class=" text-white ">Body Treatment</p>
            </div>
        </div>
    </div>



    <!-- Procedures section start -->
    <section>
        <div class="container mx-auto  pt-20 px-12 id=" id="feature">
            <div class="max-w-4xl px-6 text-center mx-auto ">
                <div class="p-8">
                    <h1 class=" text-4xl text-center ">Popular Procedures.</h1>
                    <p class="text-center px-8 pt-8 "> To doesn't his appear replenish together called he of mad place won't wherein blessed second every wherein were meat kind wherein and martcin</p>
                </div>
            </div>
            <div class="flex flex-wrap p-8 ">
                <div class="w-full sm:w-1/2 md:w-1/3 flex flex-col p-3 ">
                    <div class="bg-white  overflow-hidden flex-1 flex flex-col border border-gray-300 ">
                        <img class="p-4" src="https://dummyimage.com/370x300/525252/525252/.png" alt="message image">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="mb-4 text-2xl text-center">Massage Therapy</h3>
                            <div class="mb-4 text-grey-darker text-sm flex-1">
                                <p>Living winged said you darkness you're divide gathered and bring one seasons face great dr Waters firmament place which.</p>
                            </div>
                            <div class="pt-8 text-center">
                                <input class="shadow-lg pt-3 pb-3 w-1/2 text-white bg-black hover:bg-red-400 rounded-full cursor-pointer " type="submit" value="READ MORE">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" w-full sm:w-1/2 md:w-1/3 flex flex-col p-3 ">
                    <div class="bg-white   overflow-hidden flex-1 flex flex-col border border-gray-300 ">
                        <img class="p-4" src="https://dummyimage.com/370x300/525252/525252/.png" alt="beauty treatment">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="mb-4 text-2xl text-center">Beauty Care</h3>
                            <div class="mb-4 text-grey-darker text-sm flex-1">
                                <p>Living winged said you darkness you're divide gathered and bring one seasons face great dr Waters firmament place which.
                                </p>
                            </div>
                            <div class="pt-8 text-center">
                                <input class="shadow-lg pt-3 pb-3 w-1/2 text-white bg-black hover:bg-red-400 rounded-full cursor-pointer " type="submit" value="READ MORE">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" w-full sm:w-1/2 md:w-1/3 flex flex-col p-3 ">
                    <div class="bg-white  overflow-hidden flex-1 flex flex-col border border-gray-300">
                        <img class="p-4" src="https://dummyimage.com/370x300/525252/525252/.png" alt="reflexology">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="mb-4 text-2xl text-center">Executive Reflexology</h3>
                            <div class="mb-4 text-grey-darker text-sm flex-1">
                                <p>Living winged said you darkness you're divide gathered and bring one seasons face great dr Waters firmament place which.</p>
                            </div>
                            <div class="pt-8 text-center">
                                <input class="shadow-lg pt-3 pb-3 w-1/2 text-white bg-black hover:bg-red-400 rounded-full cursor-pointer " type="submit" value="READ MORE">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Procedures section end -->

    <!-- Testimonial section start -->
    <section class="pt-10">
        <div class="bg-red-100 font-sans leading-normal tracking-normal py-12">
            <div class="relative">
                <div class="mySlides fade">
                    <div class="max-w-4xl px-6 text-center mx-auto ">
                        <div class="flex  justify-center py-10">
                            <img src="/assets/quote.png">
                        </div>
                        <p>First i beast be fruitful open you tree all Won't can't likeness and you're have whales creature seed to two grass life blessed you meat shall you winged under from their there he That you're one called gather make much red wherein set fourth green bearing fifth replenish given she had.</p>
                        <div class="py-20 flex  justify-center">
                            <img class="rounded-full mr-4" src="/assets/client-1.png">
                        </div>
                    </div>
                </div>

                <div class="mySlides fade">
                    <div class="max-w-4xl px-6 text-center mx-auto ">
                        <div class="flex  justify-center py-10">
                            <img src="/assets/quote.png">
                        </div>
                        <p>First i beast be fruitful open you tree all Won't can't likeness and you're have whales creature seed to two grass life blessed you meat shall you winged under from their there he That you're one called gather make much red wherein set fourth green bearing fifth replenish given she had.</p>
                        <div class="py-20 flex  justify-center">
                            <img class="rounded-full mr-4" src="/assets/client-1.png">
                        </div>
                    </div>
                </div>

                <div class="mySlides fade">
                    <div class="max-w-4xl px-6 text-center mx-auto ">
                        <div class="flex  justify-center py-10">
                            <img src="/assets/quote.png">
                        </div>
                        <p>First i beast be fruitful open you tree all Won't can't likeness and you're have whales creature seed to two grass life blessed you meat shall you winged under from their there he That you're one called gather make much red wherein set fourth green bearing fifth replenish given she had.</p>
                        <div class="py-20 flex  justify-center">
                            <img class="rounded-full mr-4" src="/assets/client-1.png">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class=" text-center">
                <span class="dot h-2 w-2 mx-1 bg-red-200 rounded inline-block"></span>
                <span class="dot h-2 w-2 mx-1 bg-red-200 rounded inline-block"></span>
                <span class="dot h-2 w-2 mx-1 bg-red-200 rounded inline-block"></span>
            </div>
        </div>
    </section>


    <!-- Testimonial section end -->

    <!-- Team section start -->
    <section>
        <div class="container mx-auto  pt-20 px-12 ">
            <div class="max-w-4xl px-6 text-center mx-auto ">
                <div class="p-8">
                    <h1 class=" text-4xl text-center ">Experienced Team</h1>
                    <p class="text-center px-8 pt-8 "> To doesn't his appear replenish together called he of mad place won't wherein blessed second every wherein were meat kind wherein and martcin</p>
                </div>
            </div>
            <div class="p-8 flex flex-wrap items-center justify-center ">
                <div class="flex flex-col justify-center items-center max-w-sm mx-auto my-8">
                    <div class="">
                        <img class="w-full" src="https://dummyimage.com/300x400/8a8a8a/525252.png">
                    </div>
                    <div class="w-56 md:w-64 bg-white -mt-10 shadow-lg  hover-trigger  ">
                        <div class="py-2 text-center font-bold uppercase tracking-wide text-gray-800">Joseph Austin</div>
                        <h1 class=" text-center py-2 px-3">Thai massage</h1>
                        <div class="flex justify-between text-center hover-target  py-2 px-3 ">
                            <i class="fab fa-facebook text-2xl hover:text-red-400	mx-2"></i>
                            <i class="fab fa-instagram text-2xl hover:text-red-400	mx-2"></i>
                            <i class="fab fa-twitter text-2xl hover:text-red-400 mx-2"></i>
                            <i class="fab fa-google-plus text-2xl hover:text-red-400 mx-2"></i>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-center items-center max-w-sm mx-auto my-8">
                    <div class="">
                        <img class="w-full" src="https://dummyimage.com/300x400/8a8a8a/525252.png">
                    </div>
                    <div class="w-56 md:w-64 bg-white -mt-10 shadow-lg overflow-hidden hover-trigger  transition ease-out duration-700">
                        <div class="py-2 text-center font-bold uppercase tracking-wide text-gray-800">Nike Revolt</div>
                        <h1 class=" text-center py-2 px-3">Thai massage</h1>
                        <div class="flex justify-between text-center hover-target   py-2 px-3 ">
                            <i class="fab fa-facebook text-2xl 	mx-2 hover:text-red-400"></i>
                            <i class="fab fa-instagram text-2xl	mx-2 hover:text-red-400"></i>
                            <i class="fab fa-twitter text-2xl mx-2 hover:text-red-400"></i>
                            <i class="fab fa-google-plus text-2xl mx-2 hover:text-red-400"></i>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-center items-center max-w-sm mx-auto my-8">
                    <div class="">
                        <img class="w-full" src="https://dummyimage.com/300x400/8a8a8a/525252.png">
                    </div>
                    <div class="w-56 md:w-64 bg-white -mt-10 shadow-lg overflow-hidden hover-trigger ">
                        <div class="py-2 text-center font-bold uppercase tracking-wide text-gray-800">Nike Revolt</div>
                        <h1 class=" text-center py-2 px-3">Thai massage</h1>
                        <div class="flex justify-between text-center hover-target  py-2 px-3 ">
                            <i class="fab fa-facebook text-2xl	mx-2 hover:text-red-400"></i>
                            <i class="fab fa-instagram text-2xl	mx-2 hover:text-red-400"></i>
                            <i class="fab fa-twitter text-2xl mx-2 hover:text-red-400"></i>
                            <i class="fab fa-google-plus text-2xl mx-2 hover:text-red-400"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team section end -->


    <section class=" py-18">
        <div class="shadow-lg sm:flex">
            <img class="sm:w-2/5 w-full bg-gray-400 bg-cover bg-center text-white" style="background-image: url('')" src="/assets/appointment-img.jpg">
            <div class="sm:w-3/5 w-full bg-red-100">
                <div class="p-20">
                    <form>
                        <div class="flex mb-4 ">
                            <div class="w-1/2 mr-4   ">
                                <input id="username" class="bg-transparent border-b border-b-2 m-auto block border-gray-500 w-full mb-6 text-gray-700 pb-2" type="text" placeholder="Name" />
                            </div>
                            <div class="w-1/2 ml-1  ">
                                <input id="username" class="bg-transparent border-b border-b-2 m-auto block border-gray-500 w-full mb-6 text-gray-700 pb-2" type="text" placeholder="E-mail Address" aria-label="Full name" />
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="w-1/2 mr-4   ">
                                <input class=" bg-transparent border-b border-b-2 m-auto block border-gray-500 w-full mb-6 text-gray-700 pb-2 " type="text" placeholder="Select service" aria-label="service" />
                            </div>
                            <div class="w-1/2 ml-1 ">
                                <input class=" bg-transparent border-b border-b-2 m-auto block border-gray-500 w-full mb-6 text-gray-700 pb-2" type="text" placeholder="Phone numer" aria-label="number" />
                            </div>
                        </div>
                        <div class="flex mb-4">
                            <div class="w-1/2 mr-4 ">
                                <input id="username" class="bg-transparent border-b border-b-2 m-auto block border-gray-500 w-full mb-6 text-gray-700 pb-2" type="date" placeholder="" />
                            </div>
                            <div class="w-1/2 ml-1 ">
                                <input id="username" class="bg-transparent border-b border-b-2 m-auto block border-gray-500 w-full mb-6 text-gray-700 pb-2" type="time" placeholder="" />
                            </div>
                        </div>
                        <input id="username" class="bg-transparent border-b border-b-2 m-auto block border-gray-500 w-full mb-6 text-gray-700 pb-2" type="text" placeholder="Your Notes" aria-label="notes" />
                        <div class="pt-8">
                            <input class="shadow-lg pt-3 pb-3 w-1/2 text-white bg-red-400 hover:text-black rounded-full cursor-pointer " type="submit" value="MAKE AN APPONIMENT">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <!-- Blog section start -->
    <section>
        <div class="container mx-auto  pt-20 px-12 ">
            <div class="max-w-4xl px-6 text-center mx-auto ">
                <div class="p-8">
                    <h1 class=" text-4xl text-center ">Latest From Blog</h1>
                    <p class="text-center px-8 pt-8 ">To doesn't his appear replenish together called he of mad place won't wherein blessed second every wherein were meat kind wherein and martcin</p>
                </div>
            </div>
            <div class="flex flex-wrap p-8 ">
                <div class="w-full sm:w-1/2 md:w-1/3 flex flex-col p-3 ">
                    <div class="bg-white  overflow-hidden flex-1 flex flex-col border border-gray-300 ">
                        <img class="p-4" src="https://dummyimage.com/370x300/525252/525252/.png" alt="message image">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="mb-4 text-2xl text-center">Massage Therapy</h3>
                            <div class="mb-4 text-grey-darker text-sm flex-1">
                                <p>Living winged said you darkness you're divide gathered and bring one seasons face great dr Waters firmament place which.</p>
                            </div>
                            <div class="pt-8 text-center">
                                <input class="shadow-lg pt-3 pb-3 w-1/2 text-white bg-black hover:bg-red-400 rounded-full cursor-pointer " type="submit" value="READ MORE">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" w-full sm:w-1/2 md:w-1/3 flex flex-col p-3 ">
                    <div class="bg-white   overflow-hidden flex-1 flex flex-col border border-gray-300">
                        <img class="p-4" src="https://dummyimage.com/370x300/525252/525252/.png" alt="message image">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="mb-4 text-2xl text-center">Beauty Care</h3>
                            <div class="mb-4 text-grey-darker text-sm flex-1">
                                <p>Living winged said you darkness you're divide gathered and bring one seasons face great dr Waters firmament place which.
                                </p>
                            </div>
                            <div class="pt-8 text-center">
                                <input class="shadow-lg pt-3 pb-3 w-1/2 text-white bg-black hover:bg-red-400 rounded-full cursor-pointer " type="submit" value="READ MORE">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" w-full sm:w-1/2 md:w-1/3 flex flex-col p-3 ">
                    <div class="bg-white  overflow-hidden flex-1 flex flex-col border border-gray-300">
                        <img class="p-4" src="https://dummyimage.com/370x300/525252/525252/.png" alt="message image">
                        <div class="p-4 flex-1 flex flex-col">
                            <h3 class="mb-4 text-2xl text-center">Executive Reflexology</h3>
                            <div class="mb-4 text-grey-darker text-sm flex-1">
                                <p>Living winged said you darkness you're divide gathered and bring one seasons face great dr Waters firmament place which.</p>
                            </div>
                            <div class="pt-8 text-center">
                                <input class="shadow-lg pt-3 pb-3 w-1/2 text-white bg-black hover:bg-red-400 rounded-full cursor-pointer " type="submit" value="READ MORE">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog section end -->


    <section class="container mx-auto  pt-20 px-12" id="contact-us">
        <div class="max-w-4xl px-6 text-center mx-auto ">
            <div class="p-8">
                <h1 class=" text-4xl text-center ">Get In Touch</h1>
                <p class="text-center px-8 pt-8 ">To doesn't his appear replenish together called he of mad place won't wherein blessed second every wherein were meat kind wherein and martcin</p>
            </div>
        </div>
        <div class="sm:flex pt-12">
            <div class="sm:w-2/5 w-full">
                <div class="flex md:w-full px-3 mb-6">
                    <div class="w-1/4">
                        <i class="fas fa-map-marked-alt text-2xl bg-red-400 flex items-center justify-center rounded-full h-12 w-12 text-white"></i>
                    </div>
                    <div class="w-3/4 text-sm text-gray-700 ">
                        <p>848 E 28th ST, BROOKLYN </p>
                        <p> NEW YORK, USA</p>
                    </div>
                </div>
                <div class="flex  md:w-full px-3 mb-6">
                    <div class="w-1/4  ">
                        <i class="far fa-envelope text-2xl bg-red-400 flex items-center justify-center rounded-full h-12 w-12 text-white"></i>
                    </div>
                    <div class="w-3/4 text-sm text-gray-700 ">
                        <p>848 E 28th ST, BROOKLYN </p>
                        <p> NEW YORK, USA</p>
                    </div>
                </div>
                <div class='flex md:w-full px-3 mb-6'>
                    <div class="w-1/4 ">
                        <i class="fas fa-mobile-alt text-2xl bg-red-400 flex items-center justify-center rounded-full h-12 w-12 text-white"></i>
                    </div>
                    <div class="w-3/4 text-sm text-gray-700 ">
                        <p>848 E 28th ST, BROOKLYN </p>
                        <p> NEW YORK, USA</p>
                    </div>
                </div>
            </div>
            <div class="sm:w-3/5 w-full ">
                <form>
                    <div class='w-full md:w-full px-3 mb-6'>
                        <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='text' placeholder='Name' required>
                    </div>
                    <div class='w-full md:w-full px-3 mb-6 '>
                        <input class='appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500' id='grid-text-1' type='text' placeholder='Enter email' required>
                    </div>
                    <div class='w-full md:w-full px-3 mb-6'>
                        <textarea class="appearance-none block w-full bg-white text-gray-700 border border-gray-400 shadow-inner py-3 px-4 leading-tight focus:outline-none  focus:border-gray-500" name="body" placeholder='Type Your Comment' required></textarea>
                    </div>
                    <div class='w-full md:w-full px-3 mb-6 flex'>
                        <button class="bg-red-400 font-bold text-white hover:text-black  py-4 px-8 rounded-full">
                            Submit Now
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer class=" mx-auto  pt-8">
        <div class=" text-center mx-auto bg-red-100  py-16">
            <div class="flex items-end justify-center py-4">
                <a href=""><img src="/assets/logo.png" alt="logo"></a>
            </div>
            <div class="flex flex-col  md:block -mx-2 py-2">
                <a href="#" class="text-gray-800 rounded  hover:text-red-500 hover:font-medium py-2 px-2 md:mx-2">Home</a>
                <a href="#about" class="text-gray-800 rounded  hover:text-red-500 hover:font-medium py-2 px-2 md:mx-2">About</a>
                <a href="#feature" class="text-gray-800 rounded  hover:text-red-500 hover:font-medium py-2 px-2 md:mx-2">Feature</a>
                <a href="#service" class="text-gray-800 rounded  hover:text-red-500 hover:font-medium py-2 px-2 md:mx-2">service</a>
                <a href="#contact-us" class="text-gray-800 rounded  hover:text-red-500 hover:font-medium py-2 px-2 md:mx-2">Contact</a>
            </div>
            <div class="  text-center   py-2 px-3 py-4">
                <a href="/#" class="w-6 mx-1"><i class="fab fa-facebook hover:text-red-400"></i></a>
                <a href="/#" class="w-6 mx-1"><i class="fab fa-instagram hover:text-red-400"></i></a>
                <a href="/#" class="w-6 mx-1"><i class="fab fa-twitter  hover:text-red-400"></i></a>
                <a href="/#" class="w-6 mx-1"><i class="fab fa-google-plus  hover:text-red-400"></i></a>
            </div>
            <div class="mt-2 text-gray-700 text-xs">© COPYRIGHT 2019 THEMEIES.COM. ALL RIGHTS RESERVED.</div>
        </div>
    </footer>


    <script>
        document.getElementById('nav-toggle').onclick = function() {
            document.getElementById("nav-content").classList.toggle("hidden");
        }
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>



</body>

</html>