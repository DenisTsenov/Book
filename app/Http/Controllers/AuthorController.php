<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use File;
use Session;
use App\Author;

class AuthorController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $authors = Author::orderBy('id', 'desc')->paginate(2);

        return view('authors.index')->withAuthors($authors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|unique:authors|max:80|min:5',
            'img_path' => 'required|Image',
            'biography' => 'required|min:50'
        ]);

        $author = new Author;

        $author->name = $request->name;
        //$author->img_path = $request->img_path;
        $author->biography = $request->name;

        File::put('authors/' . $request->name . '.doc', $request->biography);

        if (Input::hasFile('img_path')) {
            $file = Input::file('img_path');
            $file->move('pictures' . '/', $file->getClientOriginalName());

            $author->img_path = $file->getClientOriginalName();
        }

        $author->save();
        Session::flash('success', 'The  author was  added!');
        return redirect()->route('author.show', $author->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $author = Author::find($id);

        $biography = DB::table('authors')->where('id', $id)->value('name');

        $cont = File::get('authors/' . $biography . '.doc');

        return view('authors.show')->withAuthor($author)->withCont($cont);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $author = Author::find($id);

        $biograpthy = DB::table('authors')->where('id', $id)->value('name');

        $cont = File::get('authors/' . $biograpthy . '.doc');

        return view('authors/edit')->withAuthor($author)->withCont($cont);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $author = Author::find($id);
        $this->validate($request, [
            'name' => ($request->name != $author->name) ? 'required|unique:authors|max:60':'',
            'biography' => 'required|min:50'
        ]);
        
        File::delete('authors/' . $author->name . '.doc');

        $author->name = $request->input('name');
        $author->biography = $request->input('name');

        File::put('authors/' . $request->name . '.doc', $request->biography);

        $author->save();
        Session::flash('success', 'The  author was edited!');
        return redirect()->route('author.show', $author->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
         $author = Author::find($id);
        File::delete('authors/' . $author->name . '.doc');
        File::delete('pictures/' . $author->img_path);
        $author->delete();

        Session::flash('Success', 'The  author  was  deleted.');
        return redirect()->route('author.index');
    }

}
