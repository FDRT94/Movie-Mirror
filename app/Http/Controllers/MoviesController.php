<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\ViewModels\MoviesViewModel;
use App\ViewModels\MovieViewModel;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$popularMovies = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/popular')
			->json()['results'];

		$nowPlayingMovies = Http::withToken(config('services.tmdb.token'))
		->get('https://api.themoviedb.org/3/movie/now_playing')
		->json()['results'];
			
		$genres = Http::withToken(config('services.tmdb.token'))
		->get('https://api.themoviedb.org/3/genre/movie/list')
		->json()['genres'];	

        $viewmodel = new MoviesViewModel(
            $popularMovies,
			$nowPlayingMovies,
			$genres,
        );

        return view('movies.index', $viewmodel);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$movie = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=credits,videos,images')
			->json();

        $viewmodel = new MovieViewModel($movie);

		return view('movies.show', $viewmodel);
    }
}
