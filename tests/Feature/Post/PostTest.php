<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;

it('can create a post', function () {
    // Create an user for this test
    $user = User::factory()->create();
  
    // Create a category
    $category = Category::factory()->create();

    // We should have no Posts
    expect(Post::all())->toHaveCount(0);

    Post::create([
        'user_id'     => $user->id,
        'category_id' => $category->id,
        'title'       => 'This is a post',
        'slug'        => 'this-is-a-post',
        'excerpt'     => 'My post is...',
        'body'        => 'My post is very cool.',
    ]);

    //We should have one post
    $posts = Post::all();
  
    expect($posts)->toHaveCount(1);
    
    //The first post should match what we have just created
    expect($posts->first())
      ->title->toBe('This is a post');
});

test('a post can be accessed by URL', function () {
    // Create an user for this test
    $post = Post::factory()->create();

    $response = $this->get('/posts/'.$post->slug);

    //Page loads
    $response->assertStatus(200);

    //Make sure it is the correct view
    $response->assertViewIs('posts.show');
});
