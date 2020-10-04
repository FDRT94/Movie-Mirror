<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component
{
	public $search = '';

    public function render()
    {
		$searchResults = [];

		// only search if 2 or more characters
		if (strlen($this->search) >= 2)
		{
			$searchResults = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIzMjgzNTViY2RmYWUzNGE2ZTQ3YTM2YmExZmFkMWFjOCIsInN1YiI6IjVmNzYzNTlkODc0MWM0MDAzODY4YTYyMyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.ZzY0BrybSKc1uylB_-l6Km8_PLo6B_JB7NCY__4_488')
            ->get('https://api.themoviedb.org/3/search/movie?query='.$this->search)
			->json()['results'];
		}

        return view('livewire.search-dropdown' , [
			'searchResults' => collect($searchResults)->take(7),
		]);
    }
}
