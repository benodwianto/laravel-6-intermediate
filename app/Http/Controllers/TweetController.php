<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $tweets = $request->user()->tweets()->with('user')->latestFirst()->get();
        return $tweets;
    }

    public function store(Request $request)
    {
        $request->validate([
            'body' => 'required|max:255',
        ]);
        $tweet =  $request->user()->tweets()->create([
            'body' => $request->body
        ])->load('user');

        return $tweet;
    }
}
