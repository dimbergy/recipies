<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function scopeSearch($query, $search) {

      return $query->where('name', 'like', '%' .$search. '%')
                    ->orWhere('tags', 'like', '%' .$search. '%')
                    ->orWhere('ingredients', 'like', '%' .$search. '%')
                    ->orWhere('description', 'like', '%' .$search. '%');
    }
}
