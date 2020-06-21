<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

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







</body>

</html>

<!-- <button class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded" type="button">
                    Cancel
                </button> -->