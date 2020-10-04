<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post)
    {
        $posts = [
            "my-first-post" => "This is my first time using laravel!",
            "my-second-post" => "It's still my first time!",
        ];

        if (! array_key_exists($post, $posts))
        {
            abort(404, "Sorry that post doesnt exist yet!");
        }

        return view("post", [
            "post" => $posts[$post]
        ]);
    }
}
