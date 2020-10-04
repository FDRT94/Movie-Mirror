@extends('layouts.main')

@section('content')
<div class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
        <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="poster" class="w-64 lg:w-96">
        <div class="md:ml-24">
            <h2 class="text-4xl font-semibold">{{ $movie['title'] }}</h2>
            <div class="flex flex-wrap items-center text-gray-400 text-sm">
                <span>star</span>
                <span class="ml-1">{{ $movie['vote_average'] * 10 . '%' }}</span>
                <span class="mx-2">|</span>
                <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
                <span class="mx-2">|</span>
                <span>
                    @foreach ($movie['genres'] as $genre)
                    {{ $genre['name'] }}@if(!$loop->last), @endif
                    @endforeach
                </span>
            </div>


            <p class="text-gray-300 mt-8">
                {{ $movie['overview'] }}
            </p>

            <div class="mt-12">
                <h4 class="text-white font-semibold">Featured Cast</h4>
                <div class="flex mt-4">
                    @foreach($movie['credits']['crew'] as $crew)
						@if ($loop->index < 2) 
					<div class="mr-8">
                        <div> {{ $crew['name'] }}</div>
                        <div class="text-sm text-gray-400"> {{ $crew['job'] }}</div>
                	</div>
                		@endif
                	@endforeach
            </div>
        </div>

		@if (count($movie['videos']['results']) > 0)
			<div class="mt-12">
			<a href="https://youtube.com/watch?v={{ $movie['videos']['results']['0']['key'] }}"
					class="flex inline-flex items-center bg-orange-500 text-gray-900 
					rounded font-semibold px-5 py-4 hover:bg-orange-600 traisition ease-in-out duration-150">
					<span class="ml-2">Play Trailer</span>
			</a>
			</div>
		@endif

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
</div>
</div>
@endsection
