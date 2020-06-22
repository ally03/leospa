<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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


    <div>


        <a href=""><img src="/assets/logo.png" alt="logo"></a>




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

        <!-- Procedures section start -->
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
        <!-- Procedures section end -->

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




        <div class="container mx-auto  pt-20 px-12 ">
            <div class="p-8">
                <h1 class=" text-4xl text-center ">Experienced Team</h1>
                <p class="text-center px-8 pt-8 "> To doesn't his appear replenish together called he of mad place won't wherein blessed second every wherein were meat kind wherein and martcin</p>
            </div>
        </div>

        <div class="p-24 flex flex-wrap items-center justify-center ">




            <div class="flex flex-col justify-center items-center max-w-sm mx-auto my-8">
                <div class="">
                    <img class="w-full" src="https://dummyimage.com/300x400/8a8a8a/525252.png">
                </div>
                <div class="w-56 md:w-64 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden">
                    <div class="py-2 text-center font-bold uppercase tracking-wide text-gray-800">Joseph Austin</div>
                    <h1 class=" text-center py-2 px-3">$129</h1>


                </div>
            </div>

            <div class="flex flex-col justify-center items-center max-w-sm mx-auto my-8">
                <div class="">
                    <img class="w-full" src="https://dummyimage.com/300x400/8a8a8a/525252.png">
                </div>
                <div class="w-56 md:w-64 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden">
                    <div class="py-2 text-center font-bold uppercase tracking-wide text-gray-800">Nike Revolt</div>
                    <div class="flex items-center justify-between py-2 px-3 bg-gray-400">
                        <h1 class="text-gray-800 font-bold ">$129</h1>
                        <button class=" bg-gray-800 text-xs text-white px-2 py-1 font-semibold rounded uppercase hover:bg-gray-700">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center max-w-sm mx-auto my-8">
                <div class="">
                    <img class="w-full" src="https://dummyimage.com/300x400/8a8a8a/525252.png">
                </div>
                <div class="w-56 md:w-64 bg-white -mt-10 shadow-lg rounded-lg overflow-hidden">
                    <div class="py-2 text-center font-bold uppercase tracking-wide text-gray-800">Nike Revolt</div>
                    <div class="flex items-center justify-between py-2 px-3 bg-gray-400">
                        <h1 class="text-gray-800 font-bold ">$129</h1>
                        <button class=" bg-gray-800 text-xs text-white px-2 py-1 font-semibold rounded uppercase hover:bg-gray-700">Add to cart</button>
                    </div>
                </div>
            </div>



        </div>

        <div class="memb-social">
            <a href="http://demo.themeies.com/leospa/index.html#"><i class="ti-facebook"></i></a>
            <a href="http://demo.themeies.com/leospa/index.html#"><i class="ti-twitter-alt"></i></a>
            <a href="http://demo.themeies.com/leospa/index.html#"><i class="ti-google"></i></a>
            <a href="http://demo.themeies.com/leospa/index.html#"><i class="ti-instagram"></i></a>
        </div>






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