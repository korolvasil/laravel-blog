<?php

Route::get('/', function (){
    return view('home.home');
});

Route::get('/post', function () {
    return view('post.post');
});

