<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index()
    {

        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->get()
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {

        $attributes = request()->validate([
            'title' => ['required', Rule::unique('posts', 'title')],
            'slug' => '',
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $title = $attributes['title'];
        $attributes['slug'] = $title;
        $attributes['user_id'] = auth()->id();

        Post::create($attributes);

        flash('New product has been submitted');

        return redirect('/');
    }




    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post,

        ]);
    }
}