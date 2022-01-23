<?php

use App\Models\User;

test('Home page loads', function () {
    //Requests the page
    $response = $this->get(route('home'));

    //Page could be loaded
    $response->assertStatus(200);
});

test('Dashboard: cannot be accessed by guests', function () {
    $response = $this->get(route('dashboard'));

    //Redirect to login page
    $response->assertStatus(302);
});

test('Dashboard: Random user can NOT access dashboard', function () {

    // Create an user for this test
    $user = User::factory()->create(['username' => 'random1234']);

    $response = $this->actingAs($user)
        ->get(route('dashboard'));
    
    //403 Forbidden access
    $response->assertStatus(403);
});

test('Dashboard: MooseS94 can access dashboard', function () {

    // Create MooseS94 for this test
    $user = User::factory()->create(['username' => 'MooseS94']);

    $response = $this->actingAs($user)
        ->get(route('dashboard'));

    $response->assertStatus(200);
});
