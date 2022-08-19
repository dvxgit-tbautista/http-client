<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function index() {
        // $response = Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        // return $response;

        return view('posts');
    }

    public function edit($id) {

        $response = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id)->json();

        return view('post.edit', compact('response'));
    }
}
