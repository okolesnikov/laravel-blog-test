<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(10);
        $tags = Tag::all();
        return view('article.index', compact('articles', 'tags'));
    }

    public function show($slug) {
        $article = Article::where('slug', $slug)->with(['comments', 'tags'])->get()->first();
        return view('article.show', compact('article'));
    }
}
