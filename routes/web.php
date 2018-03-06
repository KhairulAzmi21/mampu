<?php

Route::get('/posts', function () {
    //data kita tarik daripada database
    $posts = DB::select('select * from posts');
    //dd($tasks);
    return view('posts.index', compact('posts'));
});

Route::get('/posts/{id}', function ($id) {
    // dapatkan data daripada database yang id sama dengan {$id}
    $post = DB::select('select * from posts where id = :id', [ 'id' => $id]);

    return $post;
    //return view('posts.show', compact('post'));
});
