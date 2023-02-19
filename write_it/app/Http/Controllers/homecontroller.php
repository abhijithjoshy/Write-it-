<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\User;


use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index()
    {
        $article = article::get();
        $article->map(function ($item, $key) {
            $posted_by = $item->posted_by;
            $item->created_by = user::where('id', $posted_by)->pluck('name')->first();
        });
        return view('home')->with([
            'article' => $article,
        ]);
    }
}
