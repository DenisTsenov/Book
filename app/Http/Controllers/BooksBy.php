<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksBy extends Controller
{
    public function getSingle($genre){
       $book = Book::where('genre', '=', $genre)->orderBy('id', 'asc')->paginate(1);
       
       return view('genre/single')->withBook($book);
    }
}
