<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$popularMovies = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIzMjgzNTViY2RmYWUzNGE2ZTQ3YTM2YmExZmFkMWFjOCIsInN1YiI6IjVmNzYzNTlkODc0MWM0MDAzODY4YTYyMyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.ZzY0BrybSKc1uylB_-l6Km8_PLo6B_JB7NCY__4_488')
            ->get('https://api.themoviedb.org/3/movie/popular')
			->json()['results'];

		$nowPlayingMovies = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIzMjgzNTViY2RmYWUzNGE2ZTQ3YTM2YmExZmFkMWFjOCIsInN1YiI6IjVmNzYzNTlkODc0MWM0MDAzODY4YTYyMyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.ZzY0BrybSKc1uylB_-l6Km8_PLo6B_JB7NCY__4_488')
		->get('https://api.themoviedb.org/3/movie/now_playing')
		->json()['results'];
			
		$genresArray = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIzMjgzNTViY2RmYWUzNGE2ZTQ3YTM2YmExZmFkMWFjOCIsInN1YiI6IjVmNzYzNTlkODc0MWM0MDAzODY4YTYyMyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.ZzY0BrybSKc1uylB_-l6Km8_PLo6B_JB7NCY__4_488')
		->get('https://api.themoviedb.org/3/genre/movie/list')
		->json()['genres'];	
	
		$genres = collect($genresArray)->mapWithKeys(function ($genre){
			return [$genre['id'] => $genre['name']];
		});
	
		dump($nowPlayingMovies);

		return view('index', [
			'popularMovies' => $popularMovies,
			'nowPlayingMovies' => $nowPlayingMovies,
			'genres' => $genres,
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
