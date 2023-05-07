<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $movie_model = new Movie();
            $user_id = Auth::user()->id;
            $movie_records = $movie_model->getUserMovieRecords($user_id);
            return view('dashboard', ['movie_records' => $movie_records ?? []]);
        }
    }

    public function viewMovieForm()
    {
        if (Auth::check()) {
            return view('createMovie');
        }
    }

    public function createMovie()
    {
        $title = $_POST['movie_title'];
        $genre = $_POST['movie_genre'];
        $ratings = $_POST['movie_rating'];
        $status = $_POST['movie_status'];
        $platform = $_POST['movie_platform'];

        if (Auth::check()) {
            $movie_model = new Movie();
            $user_id = Auth::user()->id;

            $movie_model->addMovieRecord($title, $genre, $ratings, $status, $platform, $user_id);
            return redirect()->route('dashboard');
        }
    }
}
