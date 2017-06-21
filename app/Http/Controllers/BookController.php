<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use File;
use Session;
use App\Book;
use App\Author;
use App\Genre;

class BookController extends Controller {
    
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $Books = Book::orderBy('id', 'desc')->paginate(2);

        return view('books.index')->withBooks($Books);
    }
    
    public function search_books(Request $request) {
        
         $Search = $request->searched_value;
        
        $founded_books = DB::table('books')->where('book_name', 'LIKE', '%'. $Search .'%')->paginate(1);
        
        return  view('books.founded_result')->withFounded_books($founded_books);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $genre =Genre::all();
        $auth =Author::all();
        return view('books.create')->withGenre($genre)->withAuth($auth);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        
        $this->validate($request, [
            'book_name' => 'required|unique:books|max:60|min:2',
            'img_path' => 'required|Image',
            'genre' => 'required|min:4',
            'author' => 'required|min:4',
            'content' => 'required|min:100'
        ]);

        $book = new Book;

        $book->book_name = $request->book_name;
         $book->img_path = $request->book_name;
         $book->genre = $request->genre;
        $book->author = $request->author;
       
        File::put('books/' . $request->book_name . '.doc', $request->content);

        if (Input::hasFile('img_path')) {
            $file = Input::file('img_path');
            $file->move('pictures' . '/', $file->getClientOriginalName());
            $book->img_path = $file->getClientOriginalName();
        }

        $book->save();
        Session::flash('success', 'The  book  was  added!');
        return redirect()->route('book.show', $book->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $book = book::find($id);

        $bookCont = DB::table('books')->where('id', $id)->value('book_name');

        $cont = File::get('books/' . $bookCont . '.doc');
        return view('books.show')->withBook($book)->withCont($cont);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $book = Book::find($id);

        $bookCont = DB::table('books')->where('id', $id)->value('book_name');
        $cont = File::get('books/' . $bookCont . '.doc');

        return view('books/edit')->withBook($book)->withCont($cont);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
            $book = Book::find($id);
            
            $this->validate($request, [
            'book_name' => ($request->book_name != $book->book_name) ? 'required|unique:books|max:60':'',
            'content' => 'required|min:100'
        ]);
        
        File::delete('books/' . $book->book_name . '.doc');

        $book->book_name = $request->input('book_name');
        //$book->content = $request->input('book_name');

        File::put('books/' . $request->book_name . '.doc', $request->content);

        $book->save();
        Session::flash('success', 'The  book  was edited!');
        return redirect()->route('book.show', $book->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $book = Book::find($id);
        File::delete('books/' . $book->book_name . '.doc');
        File::delete('pictures/' . $book->img_path);
        $book->delete();

        Session::flash('Success', 'The  book  was  deleted.');
        return redirect()->route('book.index');
    }

}
