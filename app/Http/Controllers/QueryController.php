<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Recipies;

class QueryController extends Controller
{
    public function search(Request $request)
    {
    $site = 'Dimitrios Vergados';
      // Gets the query string from our form submission
    $search = $request->input('search');
      // Returns an array of articles that have the query string located somewhere within
      // our articles titles. Paginates them so we can break up lots of search results.
    $recipies = Recipies::where('name', 'like', '%' .$search. '%')
                        ->orWhere('tags', 'like', '%' .$search. '%')
                        ->orWhere('ingredients', 'like', '%' .$search. '%')
                        ->orWhere('description', 'like', '%' .$search. '%');

    // returns a view and passes the view the list of articles and the original query.
    return view('posts.search', compact('site', 'search', 'recipies'));
}

}
