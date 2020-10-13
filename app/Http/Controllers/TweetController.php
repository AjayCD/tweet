<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tweet;

class TweetController extends Controller
{
    public function index()
    {

        return view('tweets.index', [ 'tweets' => auth()->user()->timeline() ]);
    }

    public function store()
    {
        $validate = request()->validate(['body' => 'required|max:255']);
        tweet::create([
            'user_id' => auth()->id(),
            'body' => $validate['body']
        ]);

        return redirect('/tweets');
    }
}
