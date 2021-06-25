<?php


namespace App\Http\Controllers;


use App\Models\Article;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('index', ['articles' => Article::paginate(6)]);
    }
}
