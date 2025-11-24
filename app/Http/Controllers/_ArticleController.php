<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate();
        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    function create()
    {
        $article = new Article();
        return view('articles.create', compact('article'));
    }

    function store(ArticleRequest $request)
    {
        $data = $request->validated();

        $article = new Article();
        $article->fill($data);
        $article->save();
        $request->session()->flash('status', 'Article was created!');

        return redirect()->route('articles.index');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update(UpdateArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $data = $request->validated();

        $article->fill($data);
        $article->save();

        $request->session()->flash('status', 'Article was updated!');

        return redirect()->route('articles.index');
    }

    public function destroy(Request $request, $id)
    {
        $article = Article::find($id);
        if ($article) {
            $article->delete();

            $request->session()->flash('status', 'Article was deleted!');
        }

        return redirect()->route('articles.index');
    }
}
