<?php

namespace App\Http\Controllers;

class DramaController extends Controller
{
    public function index()
    {
        return view('dramas.index');
    }

    public function show($slug)
    {
         $drama = [
            'title' => 'Mouse',
            'release_year' => '2021',
            'genre' => 'Thriller • Crime • Mystery',
            'description' => 'Mouse is a dark psychological thriller that explores the concept of psychopathy. The story follows a dedicated police officer who faces a ruthless serial killer, leading to shocking twists, moral dilemmas, and a deep exploration of human nature.',
            'image' => 'https://i.pinimg.com/1200x/d3/00/9c/d3009c55223adc5e851b472c6e4e499b.jpg',
            'watch_url' => 'https://example.com/watch/mouse'
        ];  

        return view('dramas.show', compact('drama'));
    }
}