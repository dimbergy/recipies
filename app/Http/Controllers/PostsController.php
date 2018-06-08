<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {

      $site = 'Dimitrios Vergados';

      return view('posts.index', compact('site'));
    }
}
