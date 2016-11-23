<?php

Route::get('/', function (){
    return view('home');
});

Route::get('/post', function () {
    return view('post.post');
});

Route::get('/posts', function () {
    return view('posts.posts');
});

Route::get('/posts/{tag}', function () {
    return view('posts.tag');
});