<?php

namespace App\Http\Controllers;

use App\movies;
use App\reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        Artisan::call('db:seed');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('api');
    }

    public function showAll(){

        $movies = movies::get()->toJson(JSON_PRETTY_PRINT);
        return response($movies, 200);

    }

    public function showId($param)
    {
        if (movies::whereId($param)->exists()) {
            $movie = movies::whereId($param)->get()->toJson(JSON_PRETTY_PRINT);
            return response($movie, 200);
        } else {
            return response()->json([
                "message" => "Movie not found"
            ], 404);
        }

    }

    public function showAllReviews()
    {
        $reviews = reviews::query()
            ->with('descriptMovies')
            ->get()
            ->toJson(JSON_PRETTY_PRINT);
        return response($reviews, 200);
    }

    public function showReviewsId($param)
    {
        if (reviews::whereMovieId($param)->exists()) {
            $review = reviews::whereId($param)->get()->toJson(JSON_PRETTY_PRINT);
            return response($review, 200);
        } else {
            return response()->json([
                "message" => "Review not found"
            ], 404);
        }
    }

    public function createReview(Request $request)
    {
        $review = new reviews();
        $review->movie_id = $request->movie_id;
        $review->nota = $request->nota;
        $review->save();

        return response()->json([
            "message" => "review record created"
        ],201);
    }
}
