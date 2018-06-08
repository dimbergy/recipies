<?php

namespace App\Http\Controllers;

use App\Recipies;

use Illuminate\Http\Request;

use App\Http\Requests;

class RecipiesController extends Controller
{
/*    public function index(){

      $name = 'Recipies';
      $site = 'Dimitrios Vergados';
      $recipies = Recipies::all();
      return view('news', compact('name', 'site', 'recipies'));

    }
*/
    public function index() {

      $site = 'Dimitrios Vergados';
      $title = 'Recipies';
      $recipies = Recipies::all();
      return view('posts.index', compact('site', 'title', 'recipies'));

    }

    public function indexadmin() {

      $site = 'Dimitrios Vergados';
      $title = 'Recipies';
      $recipies = Recipies::all();
      return view('posts.indexadmin', compact('site', 'title', 'recipies'));

    }

    public function show($id) {
      $site = 'Dimitrios Vergados';
      $recipies = Recipies::all()->find($id);
      return view('posts.show', compact('site', 'recipies'));

    }

    public function search(Request $request) {
    $site = 'Dimitrios Vergados';
      // Gets the query string from our form submission
    $search = $request->input('search');
      // Returns an array of articles that have the query string located somewhere within
      // our articles titles. Paginates them so we can break up lots of search results.
    $recipies = Recipies::where('name', 'like', '%' .$search. '%')
                        ->orWhere('tags', 'like', '%' .$search. '%')
                        ->orWhere('ingredients', 'like', '%' .$search. '%')
                        ->orWhere('description', 'like', '%' .$search. '%')
                        ->get();

    // returns a view and passes the view the list of articles and the original query.
    return view('posts.search', compact('site', 'search', 'recipies'));
    }

    public function insert() {

      $site = 'Dimitrios Vergados';
      $title = 'Recipies';
      $recipies = Recipies::all();
      return view('posts.insert', compact('site', 'title', 'recipies'));

    }

}
