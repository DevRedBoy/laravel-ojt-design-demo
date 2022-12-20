<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //

    public function index(){
        // return "show all book";
        $books=Book::where('price','<',5000)->get();

        return view('books')->with([
            'books'=>$books,
        ]);
    }
}
