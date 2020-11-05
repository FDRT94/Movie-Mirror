<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\ViewModels\TvViewModel;
use App\ViewModels\TvShowViewModel;


class TvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popularTv = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/tv/popular')
			->json()['results'];

		$topRatedTv = Http::withToken(config('services.tmdb.token'))
		->get('https://api.themoviedb.org/3/tv/top_rated')
		->json()['results'];
			
		$genres = Http::withToken(config('services.tmdb.token'))
		->get('https://api.themoviedb.org/3/genre/tv/list')
		->json()['genres'];	

        $viewmodel = new TvViewModel(
            $popularTv,
			$topRatedTv,
			$genres,
        );


        return view('tv.index', $viewmodel);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tvshow = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/tv/'.$id.'?append_to_response=credits,videos,images')
            ->json();

        $viewModel = new TvShowViewModel($tvshow);

        return view('tv.show', $viewModel);
    }
}
