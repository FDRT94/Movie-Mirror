@extends('layouts.main')

@section('content')
<div class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
        <img src="/img/parasite.jpg" alt="parasite" class="w-64 md:w-96">
        <div class="md:ml-24">
            <h2 class="text-4xl font-semibold">Parasite (2019)</h2>
            <div class="flex flex-wrap items-center text-gray-400 text-sm">
                <span>star</span>
                <span class="ml-1">85%</span>
                <span class="mx-2">|</span>
                <span>Feb 20, 2020</span>
                <span class="mx-2">|</span>
                <span>Action, Thriller, Drama</span>
            </div>


            <p class="text-gray-300 mt-8">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Molestias quam fugiat, error repudiandae, vel eos quasi
                magni natus id illum mollitia minima hic sit ipsa. Laudantium
                sapiente hic inventore possimus.
            </p>

            <div class="mt-12">
                <h4 class="text-white font-semibold">Featured Cast</h4>
                <div class="flex mt-4">
                    <div>
                        <div>Bong Joon-ho</div>
                        <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                    </div>
                    <div>
                        <div>Han Jin-won</div>
                        <div class="text-sm text-gray-400">Screenplay</div>
                    </div>
                </div>
            </div>

            <div class="mt-12">
                <button class="flex items-center bg-orange-500 text-gray-900 
				rounded font-semibold px-5 py-4 hover:bg-orange-600 traisition ease-in-out duration-150">
                    <span class="ml-2">Play Trailer</span>
                </button>
            </div>
        </div>
    </div>

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto col px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/actor1.jpg" alt="actor1"
                            class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                        <div class="flex item-center text-gray-400">
                            <span>John Doe</span>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/actor2.jpg" alt="actor2"
                            class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                        <div class="flex item-center text-gray-400">
                            <span>John Doe</span>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/actor3.jpg" alt="actor3"
                            class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                        <div class="flex item-center text-gray-400">
                            <span>John Doe</span>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/actor4.jpg" alt="actor4"
                            class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                        <div class="flex item-center text-gray-400">
                            <span>John Doe</span>
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/actor5.jpg" alt="actor5"
                            class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Real Name</a>
                        <div class="flex item-center text-gray-400">
                            <span>John Doe</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto col-3 px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-16">
                <div class="mt-8">
                    <a href="#">
                        <img src="/img/image1.jpg" alt="image1"
                            class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/image2.jpg" alt="image2"
                            class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/image3.jpg" alt="image3"
                            class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/image4.jpg" alt="image4"
                            class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/image5.jpg" alt="image5"
                            class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>

                <div class="mt-8">
                    <a href="#">
                        <img src="/img/image6.jpg" alt="image6"
                            class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
