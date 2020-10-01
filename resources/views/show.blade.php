@extends('layouts.main')

@section('content')
<div class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex">
        <img src="/img/parasite.jpg" alt="parasite" class="w-96">
        <div class="ml-24">
            <h2 class="text-4xl font-semibold">Parasite (2019)</h2>
            <div class="flex items-center text-gray-400 text-sm">
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
						<img src="/img/parasite.jpg" alt="parasite"
							class="hover:opacity-75 transition ease-in-out duration-150">
					</a>
					<div class="mt-2">
						<a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
						<div class="flex item-center text-gray-400">
							<span>star</span>
							<span class="ml-1">85%</span>
							<span class="mx-2">|</span>
							<span>Feb 20, 2020</span>
						</div>
						<div class="text-gray-400">
							Action, Thriller, Comedy
						</div>
					</div>
				</div>
				<div class="mt-8">
					<a href="#">
						<img src="/img/parasite.jpg" alt="parasite"
							class="hover:opacity-75 transition ease-in-out duration-150">
					</a>
					<div class="mt-2">
						<a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
						<div class="flex items-center text-gray-400 text-sm mt-1">
							<span>star</span>
							<span class="ml-1">85%</span>
							<span class="mx-2">|</span>
							<span>Feb 20, 2020</span>
						</div>
						<div class="text-gray-400">
							Action, Thriller, Comedy
						</div>
					</div>
				</div>
				<div class="mt-8">
					<a href="#">
						<img src="/img/parasite.jpg" alt="parasite"
							class="hover:opacity-75 transition ease-in-out duration-150">
					</a>
					<div class="mt-2">
						<a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
						<div class="flex item-center text-gray-400">
							<span>star</span>
							<span class="ml-1">85%</span>
							<span class="mx-2">|</span>
							<span>Feb 20, 2020</span>
						</div>
						<div class="text-gray-400">
							Action, Thriller, Comedy
						</div>
					</div>
				</div>
				<div class="mt-8">
					<a href="#">
						<img src="/img/parasite.jpg" alt="parasite"
							class="hover:opacity-75 transition ease-in-out duration-150">
					</a>
					<div class="mt-2">
						<a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
						<div class="flex item-center text-gray-400">
							<span>star</span>
							<span class="ml-1">85%</span>
							<span class="mx-2">|</span>
							<span>Feb 20, 2020</span>
						</div>
						<div class="text-gray-400">
							Action, Thriller, Comedy
						</div>
					</div>
				</div>
				<div class="mt-8">
					<a href="#">
						<img src="/img/parasite.jpg" alt="parasite"
							class="hover:opacity-75 transition ease-in-out duration-150">
					</a>
					<div class="mt-2">
						<a href="#" class="text-lg mt-2 hover:text-gray:300">Parasite</a>
						<div class="flex item-center text-gray-400">
							<span>star</span>
							<span class="ml-1">85%</span>
							<span class="mx-2">|</span>
							<span>Feb 20, 2020</span>
						</div>
						<div class="text-gray-400">
							Action, Thriller, Comedy
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>

@endsection
