<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class APIController extends Controller
{
    public function booklist()
    {
        return Book::all();
    }

    public function createbook(Request $rqst)
    {
        $book = new Book();
        $book->name = $rqst->name;
        $book->authors = $rqst->authors;
        $book->publishdate = $rqst->publishdate;
        $book->edition = $rqst->edition;
        $book->cover = $rqst->cover;
        $book->stock = $rqst->stock;
        $book->save();
        return $rqst;
    }

    public function bookbyname(Request $rqst)
    {
        return Book::where('name', $rqst->name)->limit(1)->get();
    }
}
