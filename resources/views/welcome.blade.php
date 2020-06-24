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
    <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->
    <!-- <link href="/resources/sass/app.scss" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ mix('/css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>

    <!-- <script type="text/javascript">
        jQuery(document).ready(function() {

            jQuery("#ddtype").change(function() {
                alert("Handler for .change() called.");
            });

        });
    </script> -->
</head>


<body>

    <section class="frontPage">
        <header class="container mx-auto  px-12">
            <div class="w-full">
                <nav class="md:flex items-center  py-2 px-8 md:px-12 space-x-32">
                    <div class="flex items-center justify-between ">
                        <div class="">
                            <a href=""><img src="/assets/logo.png" alt="logo"></a>
                        </div>
                        <div class="md:hidden">
                            <button type="button" class="block text-gray-800 hover:text-gray-700 focus:text-gray-700 focus:outline-none">
                                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                                    <path class="hidden" d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z" />
                                    <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row hidden md:block -mx-2">
                        <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Home</a>
                        <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">About</a>
                        <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Feature</a>
                        <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">service</a>
                        <a href="#" class="text-gray-800 rounded hover:bg-gray-900 hover:text-gray-100 hover:font-medium py-2 px-2 md:mx-2">Contact</a>
                    </div>
                </nav>
            </div>


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
        </header>
        <!-- Banner section end -->
    </section>


    <!-- About section start here -->
    <section class="container mx-auto  px-12">
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



    <div class="flex flex-row flex-wrap -mx-10">
        <div class="flex flex-col justify-center items-center max-w-sm mx-auto my-4">
            <img class="w-full" src="https://dummyimage.com/370x450/#f1f1f1/525252.png">
        </div>
        <div class="flex flex-col justify-center items-center max-w-sm mx-auto my-4">
            <img class="w-full" src="https://dummyimage.com/370x450/#f1f1f1/525252.png">
        </div>
        <div class="flex flex-col justify-center items-center max-w-sm mx-auto my-4">
            <img class="w-full" src="https://dummyimage.com/370x450/#f1f1f1/525252.png">
        </div>
        <div class="flex flex-col justify-center items-center max-w-sm mx-auto my-4">
            <img class="w-full" src="https://dummyimage.com/370x450/#f1f1f1/525252.png">
        </div>
    </div>


    <!-- Procedures section start -->
    <section>
        <div class="container mx-auto  pt-20 px-12 ">
            <div class="p-8">
                <h1 class=" text-4xl text-center ">Popular Procedures.</h1>
                <p class="text-center px-8 pt-8 "> To doesn't his appear replenish together called he of mad place won't wherein blessed second every wherein were meat kind wherein and martcin</p>
            </div>
            <div class="flex flex-wrap -m-3 ">
                <div class="w-full sm:w-1/2 md:w-1/3 flex flex-col p-3 ">
                    <div class="bg-white  overflow-hidden flex-1 flex flex-col border border-gray-300 ">
                        <img class="p-4" src="/assets/1(1).jpg" alt="Sunset in the mountains">
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
                        <img class="p-4" src="/assets/1(1).jpg" alt="Sunset in the mountains">
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
                        <img class="p-4" src="/assets/1(1).jpg" alt="Sunset in the mountains">
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
    <section>
        <div class="bg-white font-sans leading-normal tracking-normal">
            <div class="carousel relative shadow-2xl bg-white">
                <div class="carousel-inner relative overflow-hidden w-full">
                    <!--Slide 1-->
                    <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                    <div class="carousel-item absolute opacity-0" style="height:50vh;">
                        <img class="p-4" src="/assets/testimonal.png" alt="Sunset in the mountains">
                    </div>
                    <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                    <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                    <!--Slide 2-->
                    <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                    <div class="carousel-item absolute opacity-0" style="height:50vh;">
                        <img class="p-4" src="/assets/testimonal.png" alt="Sunset in the mountains">
                    </div>
                    <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                    <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                    <!--Slide 3-->
                    <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                    <div class="carousel-item absolute opacity-0" style="height:50vh;">
                        <img class="p-4" src="/assets/testimonal.png" alt="Sunset in the mountains">
                    </div>
                    <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                    <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                    <!-- Add additional indicators for each slide-->
                    <ol class="carousel-indicators ">
                        <li class="inline-block mr-3">
                            <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                        </li>
                        <li class="inline-block mr-3">
                            <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                        </li>
                        <li class="inline-block mr-3">
                            <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial section end -->

    <!-- Team section start -->
    <section>
        <div class="container mx-auto  pt-20 px-12 ">
            <div class="p-8">
                <h1 class=" text-4xl text-center ">Experienced Team</h1>
                <p class="text-center px-8 pt-8 "> To doesn't his appear replenish together called he of mad place won't wherein blessed second every wherein were meat kind wherein and martcin</p>
            </div>
            <div class="p-8 flex flex-wrap items-center justify-center ">
                <div class="flex flex-col justify-center items-center max-w-sm mx-auto my-8">
                    <div class="">
                        <img class="w-full" src="https://dummyimage.com/300x400/8a8a8a/525252.png">
                    </div>
                    <div class="w-56 md:w-64 bg-white -mt-10 shadow-lg  overflow-hidden">
                        <div class="py-2 text-center font-bold uppercase tracking-wide text-gray-800">Joseph Austin</div>
                        <h1 class=" text-center py-2 px-3">Thai massage</h1>

                        <div class="flex justify-between text-center   py-2 px-3 ">
                            <i class="fab fa-facebook text-3xl	"></i>
                            <i class="fab fa-instagram text-3xl	"></i>
                            <i class="fab fa-twitter text-3xl"></i>
                            <i class="fab fa-google-plus text-3xl"></i>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-center items-center max-w-sm mx-auto my-8">
                    <div class="">
                        <img class="w-full" src="https://dummyimage.com/300x400/8a8a8a/525252.png">
                    </div>
                    <div class="w-56 md:w-64 bg-white -mt-10 shadow-lg overflow-hidden ">
                        <div class="py-2 text-center font-bold uppercase tracking-wide text-gray-800">Nike Revolt</div>
                        <h1 class=" text-center py-2 px-3">Thai massage</h1>
                        <div class="flex justify-between text-center hover:text-red-400  py-2 px-3 ">
                            <i class="fab fa-facebook text-3xl	"></i>
                            <i class="fab fa-instagram text-3xl	"></i>
                            <i class="fab fa-twitter text-3xl"></i>
                            <i class="fab fa-google-plus text-3xl"></i>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-center items-center max-w-sm mx-auto my-8">
                    <div class="">
                        <img class="w-full" src="https://dummyimage.com/300x400/8a8a8a/525252.png">
                    </div>
                    <div class="w-56 md:w-64 bg-white -mt-10 shadow-lg overflow-hidden">
                        <div class="py-2 text-center font-bold uppercase tracking-wide text-gray-800">Nike Revolt</div>
                        <h1 class=" text-center py-2 px-3">Thai massage</h1>
                        <div class="flex justify-between text-center   py-2 px-3 ">
                            <i class="fab fa-facebook text-3xl	hover:text-red-400"></i>
                            <i class="fab fa-instagram text-3xl	hover:text-red-400"></i>
                            <i class="fab fa-twitter text-3xl hover:text-red-400"></i>
                            <i class="fab fa-google-plus text-3xl hover:text-red-400"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team section end -->


    <section class=" py-32">
        <div class="shadow-lg sm:flex">

            <img class="sm:w-2/5 w-full bg-gray-400 bg-cover bg-center text-white" style="background-image: url('')" src="/assets/appointment-img.jpg">
            <!-- <div class="p-8"> -->

            <!-- <img src="/assets/appointment-img.jpg" alt="appointment pic"> -->
            <!-- <h1>SIGN<span class="text-indigo-400">UP</span></h1>
                    <p class="leading-tight mt-2 text-sm text-white">Create an account to join our awesome community</p> -->
            <!-- </div> -->

            <div class="sm:w-3/5 w-full bg-red-100">
                <div class="p-20">
                    <form>
                        <div class="flex mb-4 ">
                            <div class="w-1/2 mr-4   ">
                                <!-- <input class=" bg-transparent border-nonel text-gray-700 leading-tight focus:outline-none " type="text" placeholder="Name" aria-label="Full name" /> -->
                                <input id="username" class="bg-transparent border-b border-b-2 m-auto block border-gray-500 w-full mb-6 text-gray-700 pb-2" type="text" placeholder="Name" />

                            </div>
                            <div class="w-1/2 ml-1  ">
                                <!-- <input class=" bg-transparent border-nonel text-gray-700 leading-tight focus:outline-none " type="text" placeholder="E-mail Address" aria-label="Full name" /> -->
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
                                <!-- <input class=" bg-transparent border-nonel text-gray-700 leading-tight focus:outline-none " type="time" placeholder="time" name="time" id="time" /> -->
                            </div>
                        </div>

                        <input id="username" class="bg-transparent border-b border-b-2 m-auto block border-gray-500 w-full mb-6 text-gray-700 pb-2" type="text" placeholder="Your Notes" aria-label="notes" />

                        <!-- <input id="username" class="bg-transparent border-b m-auto block border-gray-500 w-full mb-6 text-gray-700 pb-1" type="text" placeholder="" /> -->
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
            <div class="p-8">
                <h1 class=" text-4xl text-center ">Latest From Blog</h1>
                <p class="text-center px-8 pt-8 ">To doesn't his appear replenish together called he of mad place won't wherein blessed second every wherein were meat kind wherein and martcin</p>
            </div>
            <div class="flex flex-wrap -m-3 ">
                <div class="w-full sm:w-1/2 md:w-1/3 flex flex-col p-3 ">
                    <div class="bg-white  overflow-hidden flex-1 flex flex-col border border-gray-300 ">
                        <img class="p-4" src="/assets/1(1).jpg" alt="Sunset in the mountains">
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
                        <img class="p-4" src="/assets/1(1).jpg" alt="Sunset in the mountains">
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
                        <img class="p-4" src="/assets/1(1).jpg" alt="Sunset in the mountains">
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










</body>

</html>

<!-- <button class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded" type="button">
                    Cancel
                </button> -->
<!-- 
                <div class="flex-shrink-0 m-6 relative overflow-hidden bg-orange-500   rounded-lg max-w-xs shadow-lg">
                <img class="w-full" src="https://dummyimage.com/400x500/8a8a8a/525252.png">
            </div>

            <div class="flex-shrink-0 m-6 relative overflow-hidden bg-orange-500   rounded-lg max-w-xs shadow-lg">
                <img class="w-full" src="https://dummyimage.com/400x500/8a8a8a/525252.png">
             <div class="relative pt-10 px-10 flex items-center justify-center ">
                </div> -->

<!-- 
                <svg class="absolute left-0 top-0 w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 645.55 419.74" preserveAspectRatio="xMinYMid slice">
                <defs />
                <defs>
                    <clipPath id="a">
                        <path fill="none" d="M645.55 419.74H0V0h645.55z" />
                    </clipPath>
                </defs>
                <g clip-path="url(#a)">
                    <path fill="#fdf0ec" d="M40.66 90c21.45-2.15 35.74-20.91 56.58-26.38 20.11-5.27 42.25-3.48 60.75 6.26 11.12 5.84 20.8 14.13 31.9 20s24.62 9.22 36.19 4.32C241.91 87.5 247.09 69.91 252 55c3.8-11.57 8.11-22.69 16-31.88 8.3-9.68 15.56-20.46 19-32.9 10.79-39.52-31.18-79.35-64-93.81-29-12.8-61.58-15.52-93.25-13.74-32.54 1.83-65.31 8.42-94 23.84s-53.2 40.36-63.69 71.22c-9.44 27.78-6.82 62.8 13.64 85.41C.28 79.25 19.7 92 40.66 90zM660.67 313.05c-39.14-30.87-98.63-28.29-135.24 5.39-22.55 20.75-38.88 56.74-31.71 87.63 5.32 23 23 38.46 42.1 50.39 22.18 13.87 45.92 29.54 73.47 25.19 21.46-3.35 39.46-18.89 51-37.3 7.37-11.8 12.47-24.8 16.73-38 3.32-10.3 9.23-21.91 10.59-32.51 2.97-23.34-8.83-46.51-26.94-60.79z" />
                    <path fill="#fbf6df" d="M73.78 363.61C34.64 332.75-24.85 335.32-61.45 369c-22.56 20.75-38.88 56.74-31.72 87.63 5.33 23 23 38.46 42.1 50.39 22.19 13.87 45.93 29.5 73.48 25.19 21.46-3.36 39.45-18.89 51-37.3 7.38-11.8 12.48-24.8 16.73-38 3.33-10.3 9.24-21.91 10.6-32.51 2.96-23.33-8.85-46.51-26.96-60.79z" />
                    <path fill="none" d="M0 0h645.55v419.74H0z" />
                    <path fill="#eef5e7" d="M131.35 376.23c11.8-16 33.58-20.1 53.14-23.87s41.42-10.36 50-28.32c8.89-18.57-.15-42.61 10.6-60.17 9.27-15.18 31.15-19.13 47.36-11.8s27 23.35 32.81 40.18c6.13 17.91 7.76 38 19.24 53.07 10.05 13.17 26.13 20.28 42.1 24.66s32.59 6.58 48 12.59 30.12 16.76 35.64 32.37c5.62 15.91.54 34.1-9.45 47.69s-24.3 23.32-38.79 31.95c-33.63 20-70.3 35.72-108.95 41.86s-79.48 2.32-114.63-14.89c-28.37-13.89-52.64-36.89-66.58-65.38-10.36-21.28-14.93-60.31-.49-79.94z" />
                    <path fill="#e2e57b" d="M190.22 316.23c-5.78-.25-10.39-2.89-14.14-7.16a69.88 69.88 0 01-6.46-9.52 11.18 11.18 0 00-5-4.71 20.24 20.24 0 00-5.09-1.23l-1.26-.17c-.35 0-.71-.16-.72-.57s.39-.55.77-.63a7.11 7.11 0 012.52.1 12.92 12.92 0 014.83 1.74 7.59 7.59 0 004.33.92 47.57 47.57 0 015.85.15 24.21 24.21 0 0112.46 5.28 22.93 22.93 0 016.78 9.37 26.66 26.66 0 002 4c.36.57 0 .82-.48.79a2.3 2.3 0 00-1.26.34 8.91 8.91 0 01-5.13 1.3zm-15.44-16c.4 1.15 1 2.12 1.44 3.15a39.55 39.55 0 004.3 7.84A6 6 0 00182 313a17.22 17.22 0 005.21 2.16 11.62 11.62 0 003.92.29 24.07 24.07 0 01-3.33-4.05c-1-1.44-1.86-2.91-2.87-4.3a12.51 12.51 0 00-5-4.33c-1.71-.77-3.41-1.7-5.15-2.56zm2.35.4c.47.22.76.37 1.07.5a56.41 56.41 0 017.26 3.82 8.66 8.66 0 002.16.95 38.67 38.67 0 014.2 1.21c.34.15.62.45 1.07.42-3.66-7.08-8.82-8.47-15.76-6.92zm-9.07-4.9a3.69 3.69 0 00.27.31c2.19 1.73 4.8 2.7 7.28 3.89a2.29 2.29 0 00.75.06c1.65.06 3.21-.56 4.85-.57 1.48 0 2.92.36 4.4.4a22.33 22.33 0 00-8.52-3.67 45.89 45.89 0 00-9.03-.44zm27.68 18.4a73.91 73.91 0 00-10.63-8.13c2.19 3.05 3.77 6.52 6.53 9.14a.78.78 0 00.82.23 25 25 0 003.28-1.26zm-15.81-2.75c-.36-.53-.71-1.06-1.07-1.58a46.16 46.16 0 01-3.26-6.57 10.9 10.9 0 00-6.14-5.56c3.16 4.94 5.7 10.15 10.47 13.69zm8.1-4.77c2.48 1.87 4.78 3.94 7.26 5.82-.82-1.39-1-3.16-2.41-4.17a9.4 9.4 0 00-4.88-1.67z" />
                    <path fill="#dcdcdc" d="M290 200.91c-3.64 5.84-9.06 9.09-15.68 10.49-4.49.94-9.08.93-13.65 1.13a13.46 13.46 0 00-7.78 2.41 24.09 24.09 0 00-4.24 4.55c-.31.4-.6.81-.91 1.21s-.59.65-1 .42-.34-.72-.21-1.16a8.61 8.61 0 011.58-2.57 15.44 15.44 0 014.63-4 9.25 9.25 0 003.46-4 56.42 56.42 0 013.56-6 28.83 28.83 0 0112.75-9.84c4.41-1.87 9-2 13.68-1.57a32.51 32.51 0 005.31.32c.8 0 .87.45.55 1a2.68 2.68 0 00-.39 1.5 10.64 10.64 0 01-1.66 6.11zm-25.63 6.66a40 40 0 004.11.35 46.74 46.74 0 0010.64.11 7.39 7.39 0 002.75-.53 20.66 20.66 0 005.28-4.15 14 14 0 002.58-3.89 29.1 29.1 0 01-6.14 1.09c-2.05.15-4.1.23-6.14.47a14.73 14.73 0 00-7.39 2.64c-1.89 1.34-3.84 2.61-5.74 3.91zm1.78-2.21c.51-.35.84-.57 1.15-.81a65.66 65.66 0 018.21-5.3 10.84 10.84 0 002.24-1.68 42.6 42.6 0 013.7-3.66c.35-.26.83-.38 1.06-.87-9.51-.31-13.96 4.22-16.41 12.32zm-10.36 6.56a3.33 3.33 0 00.47-.11c3.07-1.26 5.6-3.4 8.29-5.28a2.65 2.65 0 00.49-.74c1-1.67 1.3-3.65 2.25-5.36.86-1.54 2.07-2.82 3-4.33a26.67 26.67 0 00-8.79 6.69c-2.39 2.73-3.98 5.92-5.76 9.13zm35.23-18a88.09 88.09 0 00-14.67 6.27c4.45-.49 9-.11 13.3-1.45a.9.9 0 00.71-.71 30.12 30.12 0 00.64-4.09zm-12.08 14.8c-.75.06-1.51.11-2.26.18-2.93.26-5.82-.24-8.72-.45a12.94 12.94 0 00-9.35 3.12c6.94-.36 13.82.05 20.28-2.83zm-.22-11.19c3.39-1.49 6.88-2.66 10.28-4.14-1.93.05-3.85-.83-5.74.07a11.2 11.2 0 00-4.59 4.09zM570.56 92.75c-5.9-2.14-9.81-6.36-12.3-12-1.69-3.82-2.55-7.92-3.59-11.94a12.24 12.24 0 00-3.6-6.49 21.63 21.63 0 00-4.87-2.92l-1.2-.58c-.36-.17-.69-.41-.57-.83s.58-.44 1-.4a7.61 7.61 0 012.58.93 13.77 13.77 0 014.43 3.36 8.41 8.41 0 004.18 2.35 49.34 49.34 0 016 2 26.25 26.25 0 0111.17 9.51 25 25 0 014 11.89 29 29 0 00.71 4.8c.19.7-.24.85-.75.66a2.46 2.46 0 00-1.42-.06 9.61 9.61 0 01-5.77-.28zm-10.77-21.58c0 1.32.31 2.51.46 3.72a42.91 42.91 0 001.92 9.51 6.57 6.57 0 001 2.35 18.94 18.94 0 004.69 3.92 12.91 12.91 0 004 1.57 26.23 26.23 0 01-2.19-5.24c-.52-1.8-1-3.61-1.57-5.38a13.45 13.45 0 00-3.75-6.09c-1.57-1.41-3.04-2.92-4.56-4.36zm2.31 1.17c.4.38.66.63.93.87a59.38 59.38 0 016.28 6.31 9.31 9.31 0 001.92 1.68 39.79 39.79 0 014 2.61c.3.26.49.67 1 .79-1.57-8.49-6.46-11.6-14.13-12.26zm-7.8-8a2.74 2.74 0 00.18.4c1.71 2.51 4.09 4.36 6.27 6.4a2.37 2.37 0 00.76.3c1.68.6 3.5.46 5.2 1 1.53.47 2.9 1.31 4.42 1.84a24.3 24.3 0 00-7.62-6.57 49.78 49.78 0 00-9.21-3.38zm22.66 28a79.84 79.84 0 00-8.35-11.89c1.27 3.87 1.79 8 3.79 11.57a.83.83 0 00.77.5 27 27 0 003.83-.17zm-15.47-8c-.19-.66-.38-1.32-.58-2a47.46 47.46 0 01-1.24-7.86 11.81 11.81 0 00-4.55-7.74c1.66 6.26 2.59 12.42 6.37 17.63zm9.93-2.3c2 2.73 3.67 5.63 5.63 8.37-.4-1.7 0-3.58-1.14-5.09a10.11 10.11 0 00-4.49-3.25z" />
                    <path fill="#e2e57b" d="M293.48 104.47c-.73-6.85 1.54-12.75 5.9-17.93 3-3.51 6.58-6.33 10.05-9.29a13.52 13.52 0 004.66-6.69 23.87 23.87 0 00.53-6.2v-1.51c0-.51.07-.88.55-1s.71.36.87.79a8.26 8.26 0 01.34 3 15.39 15.39 0 01-1.19 6 9.22 9.22 0 00-.29 5.25 54.9 54.9 0 01.87 6.9 28.74 28.74 0 01-4 15.6c-2.32 4.19-5.83 7.15-9.8 9.66a31.63 31.63 0 00-4.39 3c-.6.53-1 .18-1-.41a2.77 2.77 0 00-.62-1.43 10.7 10.7 0 01-2.48-5.74zm16.1-21a37.34 37.34 0 00-3.45 2.25 46.6 46.6 0 00-8.46 6.47 7.26 7.26 0 00-1.84 2.1 20.8 20.8 0 00-1.61 6.52 14 14 0 00.37 4.66 28.14 28.14 0 014.17-4.64c1.52-1.38 3.09-2.71 4.54-4.15a14.89 14.89 0 004.21-6.68c.6-2.2 1.37-4.37 2.07-6.56zm-.05 2.83c-.18.59-.31 1-.41 1.35a65.8 65.8 0 01-3.19 9.23 10.61 10.61 0 00-.74 2.7 41.06 41.06 0 01-.66 5.17c-.11.41-.42.81-.3 1.33 7.64-5.61 8.36-11.92 5.3-19.81zm4.13-11.55c-.14.18-.24.27-.3.37-1.65 2.9-2.32 6.13-3.28 9.27a2.12 2.12 0 00.07.89c.21 2 1.22 3.68 1.53 5.61.27 1.74.1 3.49.31 5.25a26.55 26.55 0 002.8-10.69c.21-3.61-.56-7.1-1.13-10.73zM297 110.58a87.67 87.67 0 007.7-14c-3.2 3.12-7 5.61-9.59 9.32a.92.92 0 00-.12 1 29.68 29.68 0 002.01 3.68zm.4-19.1l1.65-1.48c2.14-2 4.73-3.4 7.15-5a13 13 0 005.44-8.22c-5.28 4.54-10.95 8.46-14.27 14.7zm7.07 8.68c-1.75 3.26-3.78 6.34-5.55 9.59 1.49-1.22 3.54-1.71 4.48-3.58a11.25 11.25 0 001.04-6.01zM601.56 144.31c-1.43 6.73-5.42 11.63-11.17 15.2-3.9 2.43-8.22 4-12.44 5.73a13.4 13.4 0 00-6.5 4.91 23.71 23.71 0 00-2.42 5.73c-.16.48-.3 1-.45 1.44s-.33.81-.81.75-.57-.57-.59-1a8.49 8.49 0 01.61-2.95 15.41 15.41 0 013-5.33 9.07 9.07 0 001.91-4.89 55 55 0 011.3-6.9 28.78 28.78 0 018.63-13.6c3.51-3.26 7.76-5 12.31-6.14a31.23 31.23 0 005.11-1.51c.73-.32 1 .14.84.71A2.63 2.63 0 00601 138a10.74 10.74 0 01.56 6.31zm-21.82 15a39.52 39.52 0 004-1.07 47 47 0 0010-3.53 7.18 7.18 0 002.4-1.44 20.52 20.52 0 003.55-5.69 13.88 13.88 0 001.1-4.54 28.53 28.53 0 01-5.41 3.12c-1.87.84-3.77 1.61-5.6 2.53a14.76 14.76 0 00-6 5c-1.29 1.92-2.7 3.75-4.04 5.62zm.92-2.68c.35-.51.59-.82.8-1.16a64.76 64.76 0 015.91-7.78 11 11 0 001.53-2.34 43.1 43.1 0 012.23-4.71c.24-.36.65-.64.71-1.17-9 2.93-11.64 8.71-11.18 17.16zm-7.51 9.7c.19-.13.31-.18.4-.26 2.47-2.24 4.11-5.11 6-7.79a2.42 2.42 0 00.21-.87c.4-1.92 0-3.88.28-5.81.28-1.74 1-3.35 1.33-5.09a26.67 26.67 0 00-6 9.29c-1.24 3.36-1.64 6.9-2.22 10.53zm27-28.92a87.88 87.88 0 00-11.65 10.9c4-2 8.39-3.16 12-5.9a.9.9 0 00.43-.91 30.31 30.31 0 00-.79-4.09zm-6.31 18l-2.07.94c-2.66 1.25-5.54 1.76-8.34 2.55a13 13 0 00-7.73 6.13c6.43-2.72 13.04-4.68 18.13-9.59zm-4-10.44c2.67-2.55 5.56-4.85 8.24-7.4-1.79.7-3.89.53-5.36 2a11.21 11.21 0 00-2.91 5.43z" />
                    <path fill="#808285" d="M31.38 80c.68-.92 1.35-1.86 2.05-2.76 3.56-4.6 6.26-9.73 9.19-14.73.81-1.39 2.28-2.12 3.52-3.08.26-.21.67-.05 1 0a33.07 33.07 0 0016.28-1.39 30.8 30.8 0 0011.8-7.66c2.1-2.19 4.35-4.24 6.46-6.42.18-.18.49-.31.33-.65s-.5-.37-.82-.39c-2.49-.13-5-.32-7.47-.27a51.8 51.8 0 00-5.72.26 23.57 23.57 0 00-12.55 5.17c-2.41 2-5.11 3.73-7.17 6.11-.79.91-1.5 1.89-2.33 2.95a1.62 1.62 0 01.34-1.14 129.53 129.53 0 009.5-20.1c.82-2.14 2.53-3 5-3.11a31.78 31.78 0 0020.81-8.3 24.91 24.91 0 004.56-6.18 31.34 31.34 0 002.34-3.85c.35-.88.21-1.23-.81-1.27h-4.34c-4.56.07-8.87.81-12.67 3.12a33.12 33.12 0 00-6.13 5.36 39.26 39.26 0 00-6.07 8.68 8.72 8.72 0 01-.55.8 2.57 2.57 0 01-.34.34 6.81 6.81 0 01.72-2.36 40.56 40.56 0 002-7.28c.15-.88 1-1.16 1.44-1.73A28.49 28.49 0 0066 13.51a41.38 41.38 0 003.43-17.07 57 57 0 00-1.34-10.2c-.42-2.34-1-4.66-1.52-7-.08-.35 0-.84-.52-.93s-.62.29-.8.6C61.74-15.16 58.71-9 57.4-2.14 56 5.16 56 12.5 58.85 19.9a1 1 0 010 .78c-1.58 4.32-2.85 8.72-4.52 13-.78 2-1.52 4-2.49 5.89 0-1.08-.09-2.16-.1-3.23a37.06 37.06 0 00-3-14.79 37.19 37.19 0 00-7.26-10.63A47.33 47.33 0 0038 7.29c-.27-.23-.51-.59-.88-.47s-.26.54-.32.84A29.61 29.61 0 0038 21.31a42.25 42.25 0 007 14.09c1.29 1.67 2.68 3.29 4.07 4.89a4.25 4.25 0 01.72 4.71c-.68 1.73-1.6 3.36-2.45 5-2.9 5.65-6.19 11.08-9.38 16.56-.59 1-1.28 2-2 3a1 1 0 010-1.08 31.92 31.92 0 002.2-12 27 27 0 00-5.47-15.66A81.83 81.83 0 0027 33.35c-.26-.29-.49-.67-.92-.55s-.35.5-.41.82a27.38 27.38 0 01-1.15 4.1c-1.93 5.59-1 11.16 1.75 16.69 1.87 3.76 3.87 7.47 6 11.14a23.64 23.64 0 012 4.28A3.6 3.6 0 0133.9 73a107 107 0 01-9.8 12.46c-2.91 3.26-5.94 6.42-8.92 9.63-.06.06-.14.11-.23.19-.26-.34 0-.5.15-.69a24.73 24.73 0 003.4-6.77c1.69-5.72 1.21-11.59-.15-17.55A32.7 32.7 0 0011 55.66c-.58-.65-1.14-1.31-1.7-2-.2-.23-.42-.42-.74-.3a.42.42 0 00-.26.51c.42 3.38-.84 6.38-1.51 9.51-.42 2-.8 4-1.21 6-.92 4.52.09 9 1.52 13.46A29.41 29.41 0 0012 92.6a4.75 4.75 0 01-.21 6.18C6.1 105.52-.55 111.39-6.36 118a131.05 131.05 0 00-11.22 14.82 23.56 23.56 0 00-1.7 3.41c-.25.55-.51 1.35.27 1.69s1.06-.39 1.35-.92a84.13 84.13 0 014.92-7.78c4.09-5.81 9.21-10.77 14-16a1.31 1.31 0 011.14-.39c4.57.12 9.15.89 13.73 1 7.38.23 14.24-1 20.15-4.93a38.33 38.33 0 009.22-8.65 37.65 37.65 0 013.4-4c.21-.21.44-.43.26-.79s-.47-.26-.68-.25c-4.15.19-8.33-.32-12.49-.49-8.84-.36-16.12 2.76-22.81 7.33a25.37 25.37 0 01-3.23 2c.77-.88 1.53-1.78 2.32-2.65 4.83-5.35 9.94-10.53 14.73-16a3.93 3.93 0 013.77-1.4A37.16 37.16 0 0045 83a52.9 52.9 0 0019.12-8.59c2.26-1.64 4.35-3.5 6.51-5.26.24-.19.46-.41.29-.76a.61.61 0 00-.74-.31c-4.4.85-9 .52-13.47 1a47.74 47.74 0 00-21.4 8.16c-.67.44-1.35.88-2 1.36s-1.22 1-1.82 1.52zm15.83 16.74a.69.69 0 01-.3.64c-1.72 1.75-3.3 3.61-5 5.37-6.27 6.4-14.09 9.76-23.63 10-4.83.11-9.66-.61-14.49-1.09-.06 0-.12-.12-.22-.22a40.42 40.42 0 016.43-2.87c3.65-1.23 7.45-2.09 11.24-3a42.59 42.59 0 008.12-2.35 11.86 11.86 0 013.62-1 15.21 15.21 0 003.23-.77c3-1 5.84-2.53 8.74-3.84a12.66 12.66 0 012.26-.87zm33.24-52.66c-4.22 4.34-8.67 8.41-14.32 11.08-5.39 2.55-14.18 4-18.64 3.14 5.58-3.85 10.95-7.82 17.22-10.53a2.81 2.81 0 01.7-.2 99.13 99.13 0 009.75-2.22 33.74 33.74 0 015.29-1.27zM9.4 57.16c4.57 12 5 24 3.88 36.09-.91-2.15-2.49-4-3.35-6.12-2.77-6.85-4.21-13.74-2.5-20.73.74-3.06 1.31-6.16 1.97-9.24zm50.27-25.29c0-.38.23-.46.39-.59l4.59-3.82 8-6.68a32.11 32.11 0 0111.29-6 10.33 10.33 0 013.78-.47c-1.49 1.08-1.78 2.66-2.71 3.85l-.22.27c-1.31 1.45-2.61 2.9-3.92 4.34-5.49 5.92-12.74 8.55-21.2 9.1zM45.75 96.15c0 .32-.27.31-.43.37a49.71 49.71 0 00-5.09 2 59.57 59.57 0 01-15.41 4.94c-5.41 1-10.87 1.94-16 3.8-.08 0-.21.11-.31-.09 4.19-3.55 8.47-7 13.79-9 3.33-1.28 6.73-2.35 10.56-2a58.53 58.53 0 007.94.14zm13.59-77c-1.65-7-2.7-14.07-1.54-21.07 1-6.28 4.16-11.58 7.11-16.79C64.25-6 63.06 6.85 59.34 19.13zM49.75 39.3C48 37.39 46.39 35.78 45 34a39.18 39.18 0 01-7.74-20 9.89 9.89 0 01.35-4.69c.35.06.42.34.58.52 3.22 3.69 4.85 8.12 6.72 12.38C47 27 48.14 32 49.29 37c.16.66.27 1.34.46 2.3zm-18.82 44c3.22-2.51 32.51-12.73 36-12.67a54.76 54.76 0 01-36 12.66zm3.14-15.84c-.9-1.67-1.81-3.33-2.7-5-1.86-3.49-4-6.86-5.27-10.59-1.9-5.44-2.5-10.74-.34-15.88.16-.39.15-.93.61-1.22a3.84 3.84 0 01.52 1.56 63.62 63.62 0 001.77 6.84 95.53 95.53 0 014.44 16.05 50.38 50.38 0 01.97 8.23zm31.81-86.6C70.23-5 68.8 8 61.07 20a1 1 0 010-.88 62.29 62.29 0 003-13.31c.65-4.57 0-9.29.77-13.84a51.76 51.76 0 00.38-6.49 18.25 18.25 0 01.66-4.62zm-55.4 76.29a21.12 21.12 0 013.52 4.9 37.54 37.54 0 013.52 11.3c.78 4.85 1.18 9.67-.06 14.35a16.68 16.68 0 01-2.23 4.94 1.24 1.24 0 01-.06-.53 57.52 57.52 0 00-.42-14.46c-.27-1.73-.81-3.45-.94-5.17A42.28 42.28 0 0012.47 64c-.65-2.26-1.22-4.58-1.99-6.85zm25.15 8.65c-.27-.3-.21-.65-.27-1a82.22 82.22 0 00-3-12.91 17.27 17.27 0 01-.85-3.51 9.8 9.8 0 00-.78-3 32.79 32.79 0 01-2.08-5.73c-.33-1.26-.67-2.52-1-3.78C36.32 45.08 39.58 57 35.63 65.8zM83.75 14c-9.1 3-15.78 9.34-23.22 14.65a2.86 2.86 0 01.44-.83c1.34-1.87 2.68-3.73 4.2-5.47a24.2 24.2 0 0111.32-7.68 20 20 0 017.26-.67zM63.22 70.27C53.49 73.34 43.66 76.15 34 79.7c1.22-1.43 7.51-5.2 11-6.49a50.94 50.94 0 0118.22-2.94zm14.36-26.41C68.1 45.79 58.94 48.34 51 53.54a27.88 27.88 0 013.34-3.19c2.38-1.87 4.69-3.82 7.73-4.82a53.42 53.42 0 0111.92-2 9.28 9.28 0 013.59.33zm-36.13-31c5.87 6.3 10.11 16.94 9.14 24-1.75-8.38-5.78-16.09-9.14-24zM596.13 287.82c1.88-1.31 3.45-2.92 5.34-4.11 2.7-1.7 5.4-3.4 8.16-5a35.09 35.09 0 008.88-7.3c.3-.35.57-.89 1.13-.54s.22.87 0 1.26c-4.24 7.85-10.12 13.76-19 16.12-1.51.4-3 1-4.49 1.43a1.7 1.7 0 00-1.16 1.19 17.68 17.68 0 00-1 6.76 97.64 97.64 0 01-1.42 22.58c-.52 2.82-1.18 5.6-1.86 8.4 1.16-2 2.77-3.7 3.46-6a67.77 67.77 0 018.36-17.3c3.29-5.17 7.23-9.84 11-14.68a53.27 53.27 0 006.47-10.87c.19-.43.28-.9.44-1.34.09-.28.08-.74.52-.62s.29.54.26.82c-.13 1.13-.26 2.26-.47 3.37a111.76 111.76 0 01-2.91 12.51c-2.44 7.86-6.77 14.61-12.09 20.79a92.69 92.69 0 01-10.54 10.43c-2.67 2.24-4.31 5.17-5.84 8.17-3.11 6.07-5.2 12.6-8.37 18.66a17.91 17.91 0 003.12-2.69 51.71 51.71 0 015.62-4.85c1.72-1.23 2.46-3.05 3.16-4.84a41.25 41.25 0 0115-18.67 45.77 45.77 0 018.49-5.06c.23-.1.45-.46.71-.19s0 .53-.16.81c-1.73 3.08-4.32 5.46-6.54 8.13-3.79 4.55-7.63 9-11.74 13.31a2.15 2.15 0 00-.28.46l4.42-2.16a66.21 66.21 0 0119.72-6.13c3.42-.49 6.73-1.52 10.09-2.31.39-.09.91-.43 1.19 0s-.3.73-.52 1.07c-3.19 5-7.91 8.06-13.15 10.33-3.68 1.6-7.72 2.06-11.69 2.57-4.28.55-8.56 1.09-12.8 1.88-2.85.54-5.58 1.35-7.6 3.64-.1.11-.19.23-.27.33.16.3.36.17.53.12a35.15 35.15 0 0115.41-.18c4 .73 8 1.52 12 2.3.36.06.94 0 .9.52s-.56.35-.9.37a45.24 45.24 0 00-6 1.05 40.84 40.84 0 01-11.46.84 29.06 29.06 0 01-5.52-1.19 35.32 35.32 0 00-6.47-1.21 2.34 2.34 0 00-2.18.81c-1.14 1.28-2.26 2.65-3.47 3.81-3.94 3.76-5.42 8.9-8 13.42-2 3.52-3.84 7.12-5.52 10.8a72.14 72.14 0 00-4.54 13.87 60.08 60.08 0 00-1.35 6.72c.56 0 .72-.47 1-.77a50.19 50.19 0 018.95-8.34c1.69-1.14 2.14-3.12 2.8-4.91 1.06-2.88 1.54-5.93 2.33-8.9 1.2-4.51 2.86-8.8 5.93-12.42a15.5 15.5 0 016.66-4.71c.54-.2 1.23-.35.86.53-2 4.81-2.8 10.1-5.81 14.5a28.66 28.66 0 01-3.44 4.31c-2.84 2.79-5.57 5.64-6.56 9.73.21.17.4-.13.61-.24.56-.28 1.08-.64 1.65-.91a32.8 32.8 0 009.56-7.16c3.87-4.1 8.74-7 13.89-9.39a76.33 76.33 0 0013-7.16c.28-.21.55-.44.82-.66s.51-.68.86-.37 0 .69-.22 1c-.49.71-1 1.43-1.45 2.15a44.71 44.71 0 01-12 12.49 31.92 31.92 0 01-12.53 5c-4.76.85-8.8 3.22-12.89 5.72 1.35.39 2.57 1.1 4 1.09a25 25 0 006-.69 49.86 49.86 0 0118.42-.8c2.54.3 5 .92 7.53 1.26a20.72 20.72 0 003.21-.13c-.43.89-1.22 1-1.83 1.4-6.12 3.88-12.82 4.89-19.88 3.94a28.47 28.47 0 01-6.4-1.61c-3.17-1.21-6.45-2-9.69-3a5.44 5.44 0 00-5 .87 32.84 32.84 0 00-10 11.54c-1.44 2.62-1.38 5.28-1.48 8a90.82 90.82 0 006.16 37.41 43.56 43.56 0 002.75 5.35c.22.38.66.89.19 1.27s-1-.12-1.29-.48a16.71 16.71 0 01-2.71-4.27c-4-8.48-5.83-17.51-6.77-26.75a85.75 85.75 0 011.06-23c.48-2.88 1-5.73 1.8-8.54.26-1-.33-1.74-.56-2.58s-.43-1.8-1.63-1.88a.85.85 0 01-.54-.42 2.19 2.19 0 00-2.24-.93c-3.83 0-7.66.29-11.49.12-6.91-.3-12.69-3.23-17.7-7.81-1.86-1.69-3.56-3.55-5.33-5.33-.32-.31-.62-.59-.44-1.11s.71-.48 1.1-.48a40.28 40.28 0 017.8 1c8.39 1.65 15.85 5.4 22.82 10.24 1.53 1.06 3.25 1.86 4.89 2.77.12.07.3 0 .6.05a9.88 9.88 0 00-2.2-2.78c-1.72-1.67-3.68-3.06-5.53-4.57a51.85 51.85 0 01-17.72-27.06c-.06-.22-.11-.46-.15-.69s0-.68.28-.83.65.11.85.42a50.27 50.27 0 005.91 7c1.21 1.23 2.39 2.5 3.68 3.63a45.54 45.54 0 0110.94 14.93c.68 1.42 1.35 2.85 1.92 4.31 1.15 2.93 3.18 5.3 4.91 7.86.41.61.83.83 1.09-.19 1.31-5.18 3.68-9.91 6.09-14.65.62-1.22.5-2.82.71-4.24a62.38 62.38 0 00.9-13 6.42 6.42 0 00-2.17-4.05c-.5-.53-1.27-.29-1.91-.33-1.67-.11-3.37 0-5-.15a19.69 19.69 0 01-12.64-6.59 45.67 45.67 0 01-7-10.41c-.14-.28-.36-.6 0-.85s.5.12.67.29c2.38 2.34 5.55 3.17 8.47 4.46a83.88 83.88 0 0113 6.6 18.36 18.36 0 015.91 6.32c.4-.36.18-.73.14-1-.19-1.4-.54-2.79-.63-4.2a8.71 8.71 0 00-2.32-5.35c-2.4-2.73-3.71-6.12-5.32-9.3-4.07-8-5.8-16.72-6.6-25.61-.2-2.22-.41-4.43-.6-6.65 0-.27-.17-.53.18-.75.72 1.47 1.43 2.94 2.15 4.4 2.93 5.89 6.51 11.43 9.44 17.32 2.59 5.23 4.72 10.62 4.82 16.59a21.26 21.26 0 01-.3 4.21 12 12 0 000 4.78c.49 2.38.8 4.79 1.4 7.18.24-2.42.41-4.86.74-7.27a93.61 93.61 0 013.12-13.19 33.31 33.31 0 001.45-9.15 19.66 19.66 0 00-.42-4.19c-.07-.31-.32-.82.12-.94s.48.44.57.74a48.53 48.53 0 012 13.91 39.29 39.29 0 01-2.61 14.74c-1.12 2.77-2.47 5.43-3.72 8.14a9 9 0 00-1 4.08 28.2 28.2 0 01-.44 5.27 2.54 2.54 0 00.34 2c.89-1.66 1.73-3.22 2.54-4.79 3-5.78 6.05-11.52 8.74-17.44 1.89-4.14 3.56-8.38 5.09-12.67a90.69 90.69 0 004.62-23 2.55 2.55 0 00-.44-1.55 27.55 27.55 0 00-9.5-8.93 17.07 17.07 0 00-6.51-2 55 55 0 01-11.91-3.3c-8.9-3.56-14-10.82-18.2-18.89-.3-.57-.92-1.37-.3-1.93s1.22.31 1.77.66c6.75 4.28 13.32 8.84 20.25 12.85 4.69 2.71 8.7 6.37 12.69 10a6.65 6.65 0 002.68 1.56c-.55-.76-1-1.35-1.44-2-2.72-3.87-4.85-8.1-7.5-12a71.59 71.59 0 00-8-10.05c-.25-.27-.8-.54-.52-.92s.77-.06 1.14.15c1.5.85 3 1.73 4.5 2.51a20.62 20.62 0 017.71 7.58 57.09 57.09 0 015.92 13.08 13.82 13.82 0 004.11 6.47c1.23 1 2.3 2.24 3.44 3.37.48-.33.28-.75.29-1.11.2-8.83-.41-17.56-3.39-26a2.63 2.63 0 00-1.67-1.83 64 64 0 01-16.9-10.33q-3.72-3.17-7.26-6.55a21.7 21.7 0 00-4.18-3.39c-.21-.12-.37-.28-.23-.72 4.85 2.09 9.92 3.6 14.55 6.17a49.26 49.26 0 0112.51 9.59 22.12 22.12 0 00-2.68-5.91 52.84 52.84 0 00-5.92-6.05c-4.22-3.93-8.42-7.9-11.72-12.68a45.51 45.51 0 01-4.81-9.71 18.24 18.24 0 00-3-5.56c-.23-.27-.52-.61-.26-1s.66-.07 1 .06a41.59 41.59 0 016.85 4.32 51.13 51.13 0 0119.4 28.07c1.31 4.66 3.25 9.1 4.82 13.67a11.49 11.49 0 00.91 2.87c.83-5.84 2-11.53 2.66-17.31.55-5 1.31-9.95 1.55-15a32.38 32.38 0 00-.16-5.74c0-.32-.08-.66.29-.8s.59.18.69.46c.89 2.27 2.35 4.28 3.18 6.58a19.7 19.7 0 01-.09 13.06 68.14 68.14 0 01-4.56 9.94 25.85 25.85 0 00-2.52 10.78c-.13 3 1 5.66 1.14 8.55l.31.07c.51-1.07 1.06-2.11 1.51-3.2.58-1.38 1.63-2.49 2.22-3.85.93-2.12 1.83-4.25 2.59-6.44a89.71 89.71 0 019.18-18.09c2-3.18 4-6.36 6-9.56a9.57 9.57 0 001.23-2.77c.08-.35.33-.61.67-.54s.43.45.35.77c-1.63 6.45-2.28 13.18-5.7 19.11a60.46 60.46 0 01-7.35 10 87.54 87.54 0 00-6.86 8.64 18.56 18.56 0 00-1.48 3.08zm-73.31 85.09c.29.32.4.47.54.6 3.35 3.13 7.41 5 11.63 6.62 3.47 1.31 7.17 1.78 10.74 2.72 2.63.69 5.22 1.51 7.82 2.28a4 4 0 00.57.15c.18 0 .4.23.47.12-9.79-5.98-19.73-11.61-31.77-12.49zm46.6-31.91a14.35 14.35 0 00.48-4.16c-.13-5.88-2.29-11.2-4.88-16.31-2.35-4.66-5.07-9.15-7.62-13.71-.35-.63-.68-1.27-1.09-2a2 2 0 00.14 1.41c1.82 6.22 4.27 12.22 6.38 18.35 1.3 3.75 3.29 7.21 4.79 10.88.74 1.74 1.18 3.65 1.8 5.54zM583 263.48c-6.38-9.94-12.46-20.08-21.37-28.43a8.28 8.28 0 001 2.71 50.3 50.3 0 004.29 8.9 71.53 71.53 0 0010.27 11.44c1.81 1.82 3.81 3.59 5.81 5.38zm35.76 23.38a3.12 3.12 0 00-.74 1.28 56 56 0 01-5.32 10.71c-2.89 4.14-5.9 8.2-8.67 12.41-2.52 3.83-4.73 7.86-7.47 11.56v.42c11.11-9.9 19.44-21.43 22.15-36.38zm-.48-1.75c-1.73 2.47-3.33 5-5.17 7.35-5.32 6.86-10.7 13.68-14.4 21.62-1 2.12-1.87 4.29-2.8 6.44a.65.65 0 00.58-.27c7-9.8 14.73-19.08 19.73-30.17.69-1.64 1.33-3.32 2.01-4.97zM596.77 341l.15.23c1.88-.67 3.74-1.38 5.64-2 4.61-1.51 9.41-2.11 14.14-3a32.06 32.06 0 0014.57-6.53l-1.33.24c-2.3.48-4.59 1.07-6.91 1.41a65.09 65.09 0 00-24.51 8.54c-.59.34-1.17.72-1.75 1.11zm-2.36 2.66c.26 0 .52-.07.78-.13a98.59 98.59 0 0112.66-2c6.74-.69 13.15-2.25 18.78-6.27a21.64 21.64 0 004.7-4.61 3 3 0 00-1.08.5 33.47 33.47 0 01-14.18 6.06 118.66 118.66 0 00-12.89 2.79 33.28 33.28 0 00-8.77 3.64zm-16.62-47.19l.16-.28-4.68-2.34a114.3 114.3 0 01-10.86-5.54c-5.29-3.36-9.53-7.87-13.73-12.44-.26-.28-.41-.77-1-.75 5.74 13.24 16.62 19.12 30.11 21.33zm.11-1.43a48.94 48.94 0 00-8.27-6.9c-4-2.49-8-4.88-11.88-7.48-2.8-1.88-5.58-3.79-8.37-5.68l-.33.26a1.74 1.74 0 01.38.27 62.65 62.65 0 0012.28 11.23c3.85 2.58 8.1 4.4 12.26 6.4zm-9.7 46.75c-.08-.51-.13-.89-.21-1.26a46.32 46.32 0 00-3.06-9.14c-2.38-5.14-4.38-10.42-6.24-15.76-1.05-3-2.14-6.05-3.1-9.11 1.35 12.7 4.86 24.65 12.61 35.25zm16 41.94c2.62-1.36 4.94-2.59 7.28-3.77a106.46 106.46 0 0013.92-8 27 27 0 006.17-6.05 4.29 4.29 0 00-1.23.61q-5.79 3.54-11.89 6.54a52.45 52.45 0 00-10.33 6.55 18.91 18.91 0 00-3.93 4.1zm-29.13-4c-2.53-5.89-5.51-11.47-10.1-16.05-3.24-3.23-6.5-6.45-9.43-10-.1-.12-.2-.36-.73 0 5.12 9.91 13.33 17.47 20.25 26.02zm7-145.46c9 8.58 15.51 19 22.29 29.27a51.2 51.2 0 00-22.36-29.3zm49.36 157.2c-6.82-2.43-25.08-2.32-28.56 0a86.1 86.1 0 0028.51-.03zm-18.46-49a14 14 0 003.34-3.56c2-2.75 3.79-5.74 6-8.4 3.23-3.92 7.12-7.15 10.66-10.75.27-.27.69-.45.71-1-9.68 5.53-17.38 12.74-20.76 23.69zm-49.44-5.21a29.21 29.21 0 002.85 4.47c3.58 4.69 7.87 8.28 13.93 9.2a22.66 22.66 0 005.45 0c-12.97-5.61-14.69-6.93-22.28-13.69zm41.62-38.58l.27-.18c-.64-1.73-1.23-3.48-1.91-5.19a46.49 46.49 0 00-7.39-13.31 18.94 18.94 0 00-7-4.75c6.6 6.98 10.64 15.65 15.98 23.41zm-7.22 28.1c-.15 1-.22 2-.46 3-1 4.24-2.16 8.45-3.19 12.69a72.29 72.29 0 00-1.29 10.65 39.75 39.75 0 004.89-26.36zM553.82 386a74.33 74.33 0 00-10.56-2.9 46.12 46.12 0 01-12.75-4c-.84-.43-1.56-1.16-2.62-1.08 7.21 7.15 16.3 8.41 25.93 7.98zm-7.74-48.11c6 5.78 13.38 9 20.87 12.08-5.76-6.11-13.61-8.63-20.87-12.1zm8 42.07c-6.19-7.33-12.7-14.4-17.93-22.49a44.3 44.3 0 0017.91 22.47zm34-17c-4.91 5.66-8 12-10.7 18.61 5.4-5.05 8.73-11.29 10.62-18.66zM566 260.45c3.26 4.26 18.68 14.93 22 15.08-7.33-5.41-14.46-10.53-22-15.08zm41.14 111.14c-5.89 4.79-13 7.47-19.39 11.37 7.96-1.28 14.56-4.86 19.41-11.37zm1.67 21.18c-7.8.62-15.6 1-23.4 0 7.83 2.56 15.59 3.6 23.42 0zm-7.15-116.48c4.75-6.82 9.16-13.81 11.85-21.75-4.59 6.89-8.97 13.91-11.83 21.75zm-14.13 85.65c-5 1.77-11.29 12.79-11.18 19.6a68.57 68.57 0 0111.2-19.6zm1.55-12.5c7.18-.39 14.21 1.82 21.41 1.22-7.04-1.72-14.12-3.05-21.39-1.22zm20.25 2.15c-.06-.07-.09-.12-.11-.12-5.28.18-10.42-1.26-15.68-1.37-.82 0-1.63-.06-2.44-.12a8.48 8.48 0 00-2.2 0c6.68 2.02 13.45 3.21 20.45 1.61zm5.06-97.1a91.3 91.3 0 01-11.15 21.19c5.59-6.09 9.9-12.83 11.17-21.19zM584.73 272a48.64 48.64 0 00-18.29-12.07c6.26 3.78 12.19 8.07 18.29 12.07zm28.33 48.91c-4.31 2.88-14 14.18-14.66 16.89 5.51-5.12 9.43-11.56 14.66-16.89zm-16.6-71.31c-.8 6.36-1.24 12.75-2.13 19.09 2.08-6.21 3.5-12.5 2.13-19.09zm.09 15.33c3.75-7.43 3.1-15 1-17.54a50.77 50.77 0 01-1 17.54zm3.09 22.31c5.21-1.27 9.79-3.56 13.2-7.8-4.26 2.83-8.69 5.39-13.2 7.8zm1.33-1.95c4.95-2.48 10.13-4.61 14-8.81-4.54 3.15-9.61 5.44-13.97 8.81zM11 368.67a47.2 47.2 0 00-3.41 11.16 37.18 37.18 0 001.83 17.85A95.19 95.19 0 0015.09 411c.46.9.3 1.3-.74 1.66-2.49.87-5 1.82-7.42 2.76-.7.26-1 .25-1-.58 0-10.25-2.7-20-4.61-29.87A46.86 46.86 0 01-.08 376a3.29 3.29 0 00-.24-.77 10.19 10.19 0 00-1.15 2.87c-3 9.44-3.12 18.66.22 27.69C-.09 409 1.24 412 2.61 415c.68 1.51.63 1.63-1.17 2s-3.84.79-5.75 1.19c-.6.13-1.41.21-1.39.95s.89.72 1.53.67a44.89 44.89 0 007.6-1.37c.57-.15 1-.19 1.33.33 3.17 4.88 7.8 8.22 13.08 10.92 6.21 3.18 12.87 5.5 19.3 8.24.51.21 1 .45 1.5.68s.82.51 1.25 0 0-.73-.23-1.05c-5-7.46-12.21-12.64-20.36-16.75a51 51 0 00-9.68-3.27c-.38-.11-.85-.06-1.18-.53a19.46 19.46 0 012.21-.91 36.57 36.57 0 003.79-1.39c2.06-.86 2-.78 3.47.66A34 34 0 0028.24 422c7.59 3.27 15.85 4.87 24 6.81 1.22.28 2.45.52 3.68.77.35.07.81.24 1-.08s-.2-.69-.47-.94a40.59 40.59 0 00-5.89-4.21c-5.54-3.55-11.14-7-17.8-8.78-4.19-1.13-8.27-2.53-12.77-3.07l6.5-3.45a.72.72 0 011 .19c4.39 4.78 10.61 6.48 16.87 8.11 7.85 2.05 16 2.89 24 4.61.81.18 1.61.42 2.42.62a.62.62 0 00.75-.24c.16-.3-.08-.48-.32-.63-1.33-.85-2.64-1.71-4-2.54-5.21-3.17-10.46-6.39-16.52-8.28a85.75 85.75 0 00-19.58-3.76 1.72 1.72 0 01-.75-.2 37.74 37.74 0 015.58-3.53c.29-.12.64-.27.91 0 2.21 2.43 5.5 3 8.54 4 6.09 2 12.63 2.34 19 3.49 3.85.71 7.83.79 11.65 1.64l2.85.64a.79.79 0 00.89-.27c.2-.34-.21-.46-.41-.56-6.92-3.5-13.48-7.75-21.47-9.18-6-1.08-11.89-2.72-18.47-2.1a12.65 12.65 0 012.45-1.88 27.81 27.81 0 002.29-1.71 3 3 0 013.58-.57 54.83 54.83 0 0018.37 3.26c5.51.07 11 .31 16.54.24 3.56 0 7 .68 10.55.72.41 0 1 .37 1.21-.27.12-.42-.48-.56-.86-.71-13.65-5.48-28-8.14-43.32-6.55l-.81.08a57.71 57.71 0 014.82-3.88.68.68 0 01.53 0c10.63 2.92 21.65 1.42 32.63.51 6.9-.57 13.8-1.09 20.71-1.65.39 0 1 .1 1.1-.37s-.48-.57-.88-.64c-10.52-1.81-20.9-4.33-31.91-3.64a78.51 78.51 0 00-9.75 1.14 52.77 52.77 0 00-9.42 2.42c3-2.5 5.83-5.4 9.82-6.25 4.94-1 10-1.65 14.94-2.48 7.71-1.3 15.3-3.22 22.87-5.22a99.11 99.11 0 0115.39-3.07 11.71 11.71 0 003.2-.2 17.75 17.75 0 00-8-2.52 71.28 71.28 0 00-24.84 1.95 63.79 63.79 0 00-6.69 2.2c-6 2.29-12 4.33-17.64 7.39-1.92 1-3.75 2.22-5.72 3.25 1.38-1.59 2.69-3.23 4.14-4.77a122.89 122.89 0 0016.13-21.34 29 29 0 016.14-7.77.58.58 0 00.23-.67 15.26 15.26 0 00-4.72 2.22 65.73 65.73 0 00-23.2 22.55 50.07 50.07 0 00-4.31 9.38 52 52 0 00-2.28 6.29 1.13 1.13 0 01-.38.57c-1.16.89-2.34 1.75-3.84 2.87.79-2.7 1.44-5 2.15-7.37 2.54-8.35 4.27-16.85 7.13-25.13 1-2.76 2.06-5.47 3.07-8.21.13-.35.56-.81.06-1.08s-.78.23-1 .53c-7.23 8.1-12.43 17.05-14.53 27.31a49.91 49.91 0 00-1.17 14.76c.22 2.14-.64 3-2.24 4s-2.91 2.13-4.75 3.12c.26-1.78.51-3.36.72-4.93a236.25 236.25 0 002.21-30.1c0-3.78-.72-7.52-.11-11.35 0-.23.09-.44-.18-.55a.6.6 0 00-.75.22 9.68 9.68 0 00-.95 1.38c-3.65 7-6.78 14.21-7.43 22a46.2 46.2 0 001.86 18c.67 2.09 1.15 4.23 1.77 6.33a.92.92 0 01-.46 1.24c-1.68 1-3.32 2.1-5 3.15-.67.42-.86.26-.87-.47-.15-12.07-2-23.9-3.46-35.78a53.65 53.65 0 01-.41-5.38c0-.24.29-.71-.23-.76s-.52.37-.64.65c-.47 1.14-1 2.28-1.36 3.44a47.34 47.34 0 00-1.4 26.45 60.31 60.31 0 004.47 13.2c.27.53.24.9-.35 1.22a58.94 58.94 0 01-5.79 2.89c-.93.4-.76-.3-.8-.72-.4-4-.76-8-1.46-11.91-1.36-7.76-2.45-15.58-4.28-23.24-.39-1.65-.56-3.36-.79-5.05a1.34 1.34 0 00-.53-1.13zm28.2-13.35c.68 6.86-2.32 39.21-3.82 41.54-5.63-12.17-4.13-28.86 3.82-41.54zM67.75 421c-2.16-.41-4.11-.8-6.07-1.14a147.09 147.09 0 01-24.21-6.06 19.33 19.33 0 01-7.6-5.08C44 409.78 56.71 413.09 67.75 421zm-11.37-36.76a51 51 0 0110.3-19.13c3.93-4.6 14.75-13.6 17.07-14.18C74.64 362 66.81 374 56.38 384.24zm-32.85-19.47c.06.86.09 1.42.14 2l2.9 32.92a11.62 11.62 0 01-.57 5.2c-5.55-12.74-7.6-25.89-2.47-40.12zm92.36 5c-14.49 3.51-28.57 7.15-43 8.49 13.52-7.26 27.79-9.83 43-8.45zM55.3 428.6l-.14.35c-2-.49-4.14-.91-6.16-1.49-4.61-1.34-9.21-2.7-13.78-4.14a34 34 0 01-12.9-6.82c-.49-.44-1.18-.75-1.42-1.46 13.1 1.46 24.17 6.67 34.4 13.56zM6.39 419c10 1.67 26 10.34 30.11 17.38a3.53 3.53 0 01-.58-.14c-4.56-2-9.14-3.93-13.68-6A42.35 42.35 0 0110.57 423c-1.36-1.26-2.64-2.56-4.18-4zm4.39-47.65c0 .2.07.4.08.6.39 5.24 1.78 10.26 2.7 15.38 1.13 6.29 2.35 12.56 2.33 19 0 .44.25.95-.34 1.4-5.61-11.48-9.16-23.25-4.77-36.43zm48.11 17.19c7.77-3.55 31.87-4 39.76-.84a11.2 11.2 0 01-2.86.38c-9.59.9-19.18 1.84-28.76 1.59a45.14 45.14 0 01-8.14-1.18zm15.64 22.84a9.41 9.41 0 01-2.51-.21c-3.1-.57-6.18-1.31-9.34-1.62a69 69 0 01-19.89-4.82 8.71 8.71 0 01-3.22-1.88c12.87-.15 24.54 2.07 34.96 8.48zM3.82 413.8c-5.42-7.22-8-28.15-4.36-35.59.99 11.98 5.15 23.26 4.36 35.59zm82.33-14.5c-12.3-.33-24.83.52-36.25-4.23a80.35 80.35 0 0136.25 4.23zM56.41 358c-.79 3-1.93 6-2.68 9s-1.55 6-2.36 9.06-1.68 6-2.47 9-1.95 5.85-3.16 9.07c-1.25-11.04 3.96-28.66 10.67-36.13z" opacity=".5" />
                    <path fill="#dcdcdc" d="M611.66 400.22c.74-.67 1.49-1.33 2.22-2 3.68-3.47 7.9-6.26 12-9.22 1.14-.83 1.64-2.16 2.37-3.31.15-.25 0-.59-.08-.89a28.84 28.84 0 01-.19-14.23 27 27 0 015.62-10.89c1.72-2 3.31-4.13 5-6.15.14-.17.23-.45.53-.34s.37.4.42.68c.32 2.15.7 4.29.87 6.45a43.9 43.9 0 01.26 5 20.53 20.53 0 01-3.4 11.32c-1.55 2.26-2.8 4.74-4.69 6.73-.72.77-1.51 1.47-2.36 2.28a1.47 1.47 0 001-.39 112.73 112.73 0 0116.6-10c1.79-.9 2.4-2.46 2.27-4.64a27.69 27.69 0 015.4-18.72 21.58 21.58 0 015-4.48 27.69 27.69 0 013.14-2.36c.74-.38 1-.29 1.17.59.17 1.25.25 2.51.36 3.76.32 4 .06 7.77-1.62 11.26a28.58 28.58 0 01-4.13 5.77 34.25 34.25 0 01-7 6 7 7 0 00-.66.54 2.87 2.87 0 00-.26.33 5.85 5.85 0 002-.83 35.22 35.22 0 016.14-2.4c.75-.21.93-.93 1.38-1.39a24.41 24.41 0 015.39-4.21 36 36 0 0114.5-4.45 50.73 50.73 0 019 .29c2.06.17 4.12.47 6.19.72.3 0 .72 0 .84.37s-.2.56-.45.75c-4.82 3.55-9.86 6.7-15.74 8.43-6.21 1.83-12.57 2.44-19.23.63a.92.92 0 00-.69 0c-3.57 1.79-7.31 3.26-10.87 5.08-1.64.84-3.3 1.66-4.9 2.67.94-.07 1.88-.11 2.82-.19a30.68 30.68 0 0122.91 6.72 40.44 40.44 0 013.45 2.69c.22.21.55.39.48.72s-.45.28-.7.35a25.74 25.74 0 01-11.94.13 36.89 36.89 0 01-12.82-4.88c-1.56-1-3.08-2-4.58-3.11a3.73 3.73 0 00-4.16-.19c-1.44.74-2.77 1.67-4.14 2.55-4.65 3-9.07 6.32-13.56 9.56-.83.6-1.6 1.27-2.45 1.95a.9.9 0 00.94-.07 27.66 27.66 0 0110.18-2.94 23.52 23.52 0 0114.05 3.39 74.1 74.1 0 017 4.34c.28.21.62.37.56.76s-.4.34-.68.42a23.29 23.29 0 00-3.45 1.35c-4.69 2.15-9.6 1.82-14.62-.08-3.43-1.3-6.82-2.72-10.18-4.22a20.12 20.12 0 00-3.88-1.36 3.14 3.14 0 00-2.7.52 95.74 95.74 0 00-10 9.57c-2.57 2.8-5.06 5.7-7.58 8.56 0 .06-.08.13-.14.21.31.2.43-.06.58-.19a21.61 21.61 0 015.58-3.53c4.81-1.95 9.94-2 15.23-1.37a28.4 28.4 0 0113.27 5.14c.61.44 1.23.86 1.85 1.3.22.15.41.32.33.61a.37.37 0 01-.42.27c-3-.07-5.47 1.28-8.12 2.12-1.71.55-3.43 1.05-5.15 1.58-3.84 1.18-7.79.69-11.79-.17a25.77 25.77 0 01-8.82-3.42 4.12 4.12 0 00-5.33.72c-5.36 5.5-9.88 11.77-15.13 17.37a114.5 114.5 0 01-11.89 11 20.19 20.19 0 01-2.81 1.77c-.46.26-1.12.56-1.49-.09s.25-.95.68-1.25a73.64 73.64 0 006.33-4.94c4.69-4 8.54-8.91 12.68-13.5a1.13 1.13 0 00.24-1c-.5-4-1.56-7.87-2.07-11.83-.83-6.37-.32-12.43 2.54-17.88a33.42 33.42 0 016.72-8.75 33.49 33.49 0 003.13-3.28c.16-.2.34-.42.66-.29s.26.38.27.57c.2 3.61 1 7.19 1.5 10.78 1.07 7.64-1 14.21-4.4 20.41a22.72 22.72 0 00-1.45 3c.7-.75 1.41-1.48 2.11-2.24 4.3-4.63 8.3-9.53 12.67-14.16a3.39 3.39 0 00.86-3.37 32.37 32.37 0 01-.34-12.43 46 46 0 015.81-17.32c1.22-2.1 2.66-4.07 4-6.1.14-.22.31-.43.64-.31a.52.52 0 01.32.61c-.35 3.89.32 7.85.28 11.76a41.59 41.59 0 01-5.23 19.26c-.33.62-.65 1.25-1 1.84s-.78 1.14-1.17 1.71zm-15.85-12.28a.59.59 0 00-.54.31c-1.36 1.63-2.84 3.17-4.22 4.8a28.52 28.52 0 00-6.62 21.35 104.51 104.51 0 002.19 12.46c0 .05.11.1.21.17a35 35 0 001.91-5.81c.76-3.28 1.17-6.64 1.61-10a38 38 0 011.34-7.25 10.27 10.27 0 00.55-3.22 13.77 13.77 0 01.39-2.87c.65-2.72 1.69-5.28 2.58-7.9a12.05 12.05 0 00.6-2.04zm42.8-33.34c-3.4 4-6.55 8.24-8.38 13.37-1.74 4.89-2.24 12.63-1.12 16.43 2.86-5.17 5.84-10.17 7.65-15.84a2.19 2.19 0 00.11-.63c.22-2.91.59-5.79 1.09-8.64a28.79 28.79 0 00.65-4.69zm-5.25 62.72c-10.79-2.94-21.26-2.26-31.62-.27 2 .61 3.67 1.81 5.59 2.38 6.18 1.81 12.28 2.47 18.19.39 2.59-.9 5.23-1.67 7.84-2.5zM651 371.56c.33 0 .38-.23.48-.38l2.91-4.31c1.7-2.5 3.42-5 5.12-7.48a28 28 0 004.25-10.31 8.8 8.8 0 00.09-3.32c-.81 1.39-2.16 1.78-3.11 2.68l-.21.22c-1.15 1.26-2.3 2.51-3.43 3.77-4.71 5.25-6.37 11.75-6.1 19.13zm-54.54 17.59c-.27.06-.25.26-.28.4a44.53 44.53 0 01-1.29 4.59 51.79 51.79 0 00-3 13.78c-.45 4.78-.76 9.59-1.93 14.19 0 .08-.08.2.11.27 2.71-3.94 5.32-7.94 6.64-12.73.82-3 1.46-6 .8-9.33a51.5 51.5 0 01-.8-6.86c-.08-1.46-.17-2.86-.27-4.31zm65.62-18.39c6.24.83 12.43 1.14 18.39-.47 5.36-1.44 9.69-4.6 13.95-7.6-11.03 1.66-22.04 3.79-32.36 8.07zm-16.67 10c1.8 1.34 3.34 2.61 5 3.64a34.19 34.19 0 0018 5 8.6 8.6 0 004-.71c-.09-.3-.33-.33-.5-.45-3.48-2.48-7.46-3.51-11.31-4.77a71.83 71.83 0 00-13.16-2.47c-.6-.07-1.2-.11-2.05-.2zm-36.53 20.09c1.9-3 8.25-29.27 7.89-32.33a47.74 47.74 0 00-7.91 32.37zm13.47-4.08l4.57 1.91a67.51 67.51 0 009.62 3.67c4.88 1.17 9.53 1.24 13.81-1.07.32-.17.79-.21 1-.64a3.36 3.36 0 00-1.4-.31 57.7 57.7 0 01-6.08-.95 83 83 0 00-14.3-2.47 44.63 44.63 0 00-7.24-.1zm72.34-35c-12.64-2.56-23.8-.2-33.5 7.52a.83.83 0 00.76-.1 54.1 54.1 0 0111.27-3.77c3.91-1 8.06-.82 11.94-1.86a47.15 47.15 0 015.59-.89 15.56 15.56 0 003.92-.86zm-61.39 54.57a19 19 0 00-4.55-2.65 32.73 32.73 0 00-10.1-2.08c-4.27-.26-8.49-.19-12.43 1.28a14.45 14.45 0 00-4.1 2.36.93.93 0 00.47 0 50.08 50.08 0 0112.56-.87c1.53.08 3.07.41 4.58.37a37.19 37.19 0 017.43.45c2.03.41 4.08.71 6.12 1.18zm-9.66-21.06c.28.21.58.12.86.15a72.13 72.13 0 0111.44 1.57 15 15 0 003.11.43 8.82 8.82 0 012.72.42 29.18 29.18 0 005.14 1.32l3.37.54c-8.75-6.77-19.4-8.57-26.66-4.39zm40.78-46.16c-1.86 8.15-6.74 14.48-10.71 21.38a2.44 2.44 0 00.68-.45c1.51-1.32 3-2.64 4.38-4.11a21 21 0 005.69-10.47 17.39 17.39 0 00-.06-6.31zm-47 22.62c-1.82 8.7-3.42 17.46-5.67 26.17 1.14-1.19 3.87-7 4.69-10.09a44.38 44.38 0 00.94-16.04zm21.67-14.71c-.86 8.38-2.29 16.54-6.11 23.87a25.07 25.07 0 002.48-3.17c1.41-2.22 2.9-4.39 3.51-7.11a47.22 47.22 0 00.7-10.51 8.11 8.11 0 00-.62-3.04zm30 28.66c-6-4.54-15.55-7.31-21.56-5.86 7.32.83 14.35 3.67 21.47 5.9zM225.5 28.71c-3.64 5.84-9.06 9.09-15.68 10.49-4.49.94-9.08.93-13.64 1.13a13.49 13.49 0 00-7.79 2.41 24.42 24.42 0 00-4.24 4.55c-.31.4-.6.81-.91 1.21s-.59.65-1 .42-.34-.72-.21-1.16a8.82 8.82 0 011.58-2.57 15.44 15.44 0 014.63-4 9.19 9.19 0 003.46-4 56.42 56.42 0 013.56-6A28.83 28.83 0 01208 21.43c4.42-1.87 9-2 13.68-1.57a32.56 32.56 0 005.32.32c.79-.05.86.45.54.95a2.73 2.73 0 00-.39 1.51 10.64 10.64 0 01-1.65 6.07zm-25.63 6.66a40 40 0 004.11.35 46.74 46.74 0 0010.64.11 7.39 7.39 0 002.75-.53 20.66 20.66 0 005.28-4.15 14 14 0 002.58-3.89 29.1 29.1 0 01-6.14 1.09c-2.05.15-4.1.23-6.14.47a14.73 14.73 0 00-7.39 2.64c-1.84 1.37-3.79 2.61-5.69 3.91zm1.79-2.21c.5-.35.83-.57 1.15-.81a63.74 63.74 0 018.2-5.3 10.84 10.84 0 002.24-1.68 42.6 42.6 0 013.7-3.66c.35-.26.83-.38 1.06-.87-9.46-.31-13.91 4.22-16.35 12.32zm-10.37 6.56a3.33 3.33 0 00.47-.11c3.08-1.26 5.6-3.4 8.29-5.28.23-.16.33-.49.49-.74 1-1.67 1.3-3.65 2.25-5.36.86-1.54 2.07-2.82 3-4.33a26.67 26.67 0 00-8.79 6.69c-2.34 2.73-3.93 5.92-5.71 9.13zm35.23-18A88.09 88.09 0 00211.85 28c4.45-.49 9-.11 13.3-1.45a.88.88 0 00.71-.71 28.65 28.65 0 00.66-4.1zm-12.08 14.8c-.75.06-1.51.11-2.26.18-2.93.26-5.82-.24-8.72-.45a12.94 12.94 0 00-9.35 3.12c6.99-.37 13.89.05 20.33-2.83zm-.22-11.19c3.39-1.49 6.88-2.66 10.28-4.14-1.93.05-3.85-.83-5.74.07a11.2 11.2 0 00-4.54 4.09zM207.85 386.6c3.63-5.11 8.75-7.76 14.84-8.65 4.14-.61 8.31-.35 12.48-.27a12.23 12.23 0 007.21-1.74 22.06 22.06 0 004.11-3.91c.3-.34.59-.7.89-1s.58-.55 1-.32.27.68.12 1.07a7.7 7.7 0 01-1.58 2.24 13.91 13.91 0 01-4.43 3.37 8.36 8.36 0 00-3.37 3.4 50.34 50.34 0 01-3.58 5.23 26.15 26.15 0 01-12.15 8.23 24.85 24.85 0 01-12.52.66 28.74 28.74 0 00-4.81-.59c-.73 0-.76-.46-.44-.9A2.4 2.4 0 00206 392a9.77 9.77 0 011.85-5.4zm23.67-4.6a34 34 0 00-3.71-.55 43 43 0 00-9.67-.7 6.4 6.4 0 00-2.53.33 18.64 18.64 0 00-5 3.47 12.9 12.9 0 00-2.56 3.39 26.35 26.35 0 015.65-.65c1.87 0 3.74 0 5.6-.07a13.53 13.53 0 006.87-2c1.71-1.14 3.55-2.16 5.35-3.22zm-1.74 1.9c-.48.29-.79.47-1.09.67a59.13 59.13 0 01-7.76 4.37 9.12 9.12 0 00-2.13 1.4 37.8 37.8 0 01-3.58 3.11c-.33.22-.77.3-1 .73 8.57.82 12.88-3.06 15.56-10.29zm9.79-5.37c-.2 0-.32 0-.43.06-2.87 1-5.29 2.78-7.83 4.34-.22.13-.34.43-.5.65-1 1.46-1.38 3.25-2.34 4.75s-2 2.44-3 3.76a24.14 24.14 0 008.37-5.59 49.31 49.31 0 005.73-7.98zm-33 14.35a79.85 79.85 0 0013.65-4.88c-4.07.2-8.16-.4-12.17.57a.81.81 0 00-.69.61 25.72 25.72 0 00-.83 3.69zm11.81-12.77h2.07a48.65 48.65 0 017.9.91 11.83 11.83 0 008.68-2.32c-6.42-.1-12.65-.85-18.69 1.4zm-.43 10.18c-3.16 1.17-6.4 2-9.57 3.19 1.75.07 3.45 1 5.21.26a10.07 10.07 0 004.32-3.46z" />
                    <path fill="#e2e57b" d="M317.4 361.68c6.73 1.45 11.62 5.46 15.17 11.22 2.4 3.91 3.94 8.23 5.67 12.46a13.46 13.46 0 004.89 6.52 24 24 0 005.72 2.45l1.44.44c.41.13.81.34.74.82s-.57.57-1 .58a8 8 0 01-2.94-.62 15.16 15.16 0 01-5.32-3 9.15 9.15 0 00-4.89-1.93 54.94 54.94 0 01-6.83-1.34 28.66 28.66 0 01-13.56-8.68c-3.25-3.52-5-7.78-6.1-12.34a32.49 32.49 0 00-1.49-5.11c-.32-.74.14-1 .71-.84a2.75 2.75 0 001.56-.14 10.54 10.54 0 016.23-.49zm14.92 21.87a37.86 37.86 0 00-1.06-4 46.39 46.39 0 00-3.49-10.05 7.08 7.08 0 00-1.42-2.41 20.7 20.7 0 00-5.69-3.58 14 14 0 00-4.53-1.11 28.94 28.94 0 013.1 5.41c.83 1.88 1.6 3.78 2.51 5.62a14.76 14.76 0 005 6.07c1.89 1.29 3.71 2.7 5.58 4.05zm-2.68-.93c-.5-.35-.82-.59-1.15-.81a65.77 65.77 0 01-7.76-5.93 10.41 10.41 0 00-2.34-1.54 43 43 0 01-4.69-2.26c-.37-.23-.64-.65-1.18-.7 2.9 9.01 8.67 11.67 17.12 11.24zm9.67 7.55a2.28 2.28 0 00-.26-.41c-2.23-2.47-5.09-4.13-7.76-6a2.65 2.65 0 00-.87-.22c-1.92-.4-3.88 0-5.81-.3-1.74-.29-3.35-1-5.08-1.35a26.48 26.48 0 009.27 6c3.35 1.26 6.89 1.68 10.51 2.28zm-28.81-27.11a87.27 87.27 0 0010.85 11.7c-2-4-3.13-8.4-5.85-12a.9.9 0 00-.91-.43 31.53 31.53 0 00-4.09.73zm18 6.38c.31.69.61 1.39.93 2.07a53.23 53.23 0 012.51 8.36 13 13 0 006.1 7.75c-2.71-6.46-4.64-13.07-9.53-18.18zm-10.46 4c-2.54-2.68-4.83-5.57-7.37-8.27.7 1.8.52 3.9 2 5.37a11.09 11.09 0 005.38 2.88z" />
                </g>
            </svg> -->