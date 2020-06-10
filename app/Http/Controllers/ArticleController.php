<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    //Show every article on a dedicated article page
    public function index()
    {
        $article = Article::latest()->get();

        return view('article.index', ['article' => $article]);
    }

    //This function shows the articles to the page from the
    //Article database
    public function show(Article $article)
    {
        return view('article.show', ['article' => $article]);
    }

    //Here you can create a new article in the
    //Article Database
    public function create()
    {
        if (Gate::allows('create-article')) {
            return view('article.create');
        } else {
            abort('403');
        }
    }

    //Store the created article in the
    //Article database
    public function store()
    {
        if (Gate::allows('store-article')) {
            Article::create($this->validateArticle());
            return redirect('/article');
        } else {
            abort('403');
        }


    }

    //Edit an existing article within the
    //Article database
    public function edit(Article $article)
    {
        if (Gate::allows('edit-article')) {
            return view('article.edit', ['articles' => $article]);
        } else {
            abort('403');
        }
    }

    //Save the edited article in the
    //Article database
    public function update(Article $article)
    {
        if (Gate::allows('update-article')) {
            $article->update($this->validateArticle());

            return redirect('/article' . $article->Id);
        } else {
            abort('403');
        }

    }

//Delete an article from the
//Article database
    public function destroy(Article $article)
    {
        if (Gate::allows('delete-article')) {
            $article->delete();

            return redirect('/article');
        } else {
            abort('403');
        }

    }


    //Give parameters which every article should have in the
    //Article database
    protected function validateArticle()
    {
        return request()->validate([
            'title' => ['required', 'min:5', 'max: 40', 'string'],
            'excerpt' => ['required', 'min:10', 'max:255', 'string'],
            'body' => ['required', 'min:10', 'max:300000', 'string'],
        ]);
    }
}
