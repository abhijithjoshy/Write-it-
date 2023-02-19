<?php

namespace App\Http\Controllers;
use App\Models\article;


use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index()
    {
        $article = article::get();
        return view('home')->with([
            'article' => $article
        ]);
    }
}
