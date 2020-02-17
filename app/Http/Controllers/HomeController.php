<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $books = Book::all();

        // TODO manipulate data

        $book = $books->first();

        $book->author = 'Anto';
        $book->save();

        return view('books', ['books' => $books]);
    }

    public function create(Request $request)
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $book = new Book;

        $book->name = $request->get('name');
        $book->description = $request->get('description');
        $book->author = $request->get('author');

        $book->save();

        return redirect('/');
    }
}
