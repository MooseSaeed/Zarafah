<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(StorePostRequest $request)
    {

        $validated = $request->validated();

        $validated = collect($validated)->put('user_id', auth()->id())
            ->put('slug', $validated['title'])
            ->put('thumbnail', request()->file('thumbnail')->store('thumbnails'))->toArray();

        Post::create($validated);

        flash('New product has been submitted');

        return redirect()->route('posts.index');
    }

    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::all()
        ]);
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post' => $post
        ]);
    }

    public function update(Post $post)
    {
        $attributes = request()->validate([
            'title' => ['required', Rule::unique('posts', 'title')->ignore($post->id)],
            'slug' => '',
            'thumbnail' => 'image',
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $attributes['slug'] = $attributes['title'];

        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $post->update($attributes);

        flash('Product has been updated');

        return back();
    }

    public function destroy(Post $post)
    {
        $post->delete();

        flash('Product has been DELETED');

        return back();
    }
}