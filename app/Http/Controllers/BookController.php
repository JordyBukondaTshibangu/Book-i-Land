<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    
    public function index()
    {
        $books = Book::all();

        return response()->json([
                'message' => 'List of Books',
                'books' => $books
            ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' =>  'required|unique:books|max:255',
            'author'=> 'required',
            'pages'=> 'required',
            'edition'=> 'required',
            'linkToBook'=> 'required',
            'category_id'=> 'required'
        ]);

        $book = Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'pages' => $request->pages,
            'edition' => $request->edition,
            'linkToBook' => $request->linkToBook,
            'category_id' => $request->category_id
        ]);

        return response()->json([
            'message' => 'Book Successfully created',
            'book' => $book
        ], 202);

    }

    public function show(Book $id)
    {
        $book = Book::find($id);

        #Handle if no book is found

        return response()->json([
            'message' => 'Single Book',
            'book' => $book
        ], 200);
    }

    public function update(Request $request, Book $book)
    {
        $book_id = $book->id;
        $book_to_update = Book::find($book_id);
        $book_to_update->update($request->all());

        return response()->json([
            'message' => 'Book Successfully Updated',
            'book' => $book_to_update
        ], 200);
    }
    public function destroy(Book $book)
    {
        $book_id = $book->id;
        $book_to_delete = Book::find($book_id);
        $book_to_delete->delete();

        return response()->json([
            'message' => 'Book Successfully Deleted',
            'book' => $book_to_delete
        ], 200);
    }
}
