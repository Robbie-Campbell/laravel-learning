<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function index(){

        // Render a list of a resource
        $articles = Article::latest()->get();
        return view("articles", ["articles" => $articles]);
    }

    public function show($id){

        // Show one single resource
        $article = Article::find($id);

        return view("articles.show", ["article" => $article]);
    }

    public function create(){

        // Shows a view to create a resource
        return view("articles.create");

    }

    public function store(){

        // Persists the new resource
    }

    public function edit(){

        // Show a view to edit an existing resource

    }
    public function update(){

        // Persists the edited resource

    }

    public function destroy(){

        // Deletes the resource
    }
}
