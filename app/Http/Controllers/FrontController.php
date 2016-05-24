<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Page;
use App\Comments;

class FrontController extends Controller
{
    public function index()
    {
        $articles = Article::where('public', '=', 1)->get();
        $pages = Page::where('public', '=', 1)->get();
        return view('site.index', ['articles' => $articles, 'pages' => $pages]);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $comments = Article::find($id)->comments()->where('public', '=', 1)->get(); // выбираем все комментарии, который относятся к статье
        $article = Article::where('public', '=', 1)->find($id);
        return view('site.show', ['article' => $article, 'comments' => $comments]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
