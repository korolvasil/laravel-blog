<?php

Route::get('/', function (){
    return view('home.home');
});

Route::get('/article', function () {
    return view('article.article');
});

