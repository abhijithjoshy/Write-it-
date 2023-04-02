<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;

class likeAndCommentController extends Controller
{
    public function likeThePost(Request $request)
    {
        $post_id = $request->id;
        $article = Article::where('id', $post_id)->firstOrFail();
        $article->likes_count = ($article->likes_count)+1;
        $article->save();
        return response('You liked the post');
    }
}
