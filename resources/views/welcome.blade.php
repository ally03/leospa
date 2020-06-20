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



</body>

</html>

<!-- <button class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm py-1 px-2 rounded" type="button">
                    Cancel
                </button> -->