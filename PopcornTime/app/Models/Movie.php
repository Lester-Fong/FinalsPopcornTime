<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Log;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';
    protected $primaryKey = 'movie_id';
    public $timestamps = false;

    public function getUserMovieRecords($user_id)
    {
        $movie_records = Movie::where('user_id', $user_id)
            ->orderBy('movie_ratings', 'desc')
            ->get();
        return $movie_records;
    }

    public function addMovieRecord($title, $genre, $ratings, $status, $platform, $user_id)
    {
        $movie = new Movie();
        $movie->movie_title = $title;
        $movie->movie_genre = $genre;
        $movie->movie_ratings = $ratings;
        $movie->movie_status = $status;
        $movie->movie_platform = $platform;
        $movie->user_id = $user_id;
        $movie->save();
    }
}
