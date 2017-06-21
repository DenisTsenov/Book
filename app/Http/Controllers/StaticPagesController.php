<?php

namespace App\Http\Controllers;

use App\Book;
use App\Author;
use App\Genre;
class StaticPagesController extends Controller {

    private $fb = 'Денис Ценов';
    private $gm = 'cenovdenis@gmail.com';
    private $name = 'Denis';

    public function getIndex() {
        $books = Book::orderBy('created_at', 'desc')->paginate(2);
         $genre =Genre::all();
        //$authors = Author::select();
        return view('staticpages.welcome')->withBooks($books)->withGenre($genre);
    }

    public function getAbout() {
        $data = [];
        $data ['name'] = $this->name;
        return view('staticpages.about')->withData($data);
    }

    public function getContact() {
        //$data = [];
        $data['email'] = $this->gm;
        $data['fb'] = $this->fb;
        return view('staticpages.contact')->withData($data);
    }

}
