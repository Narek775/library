<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class AccauntController extends Controller
{
    //

    public function accaunt()
    {

        return view('accaunt');
    }

    public function getBooks()
    {
        $books = Book::all();

        return view('accaunt',['books' =>$books]);
    }
    

}
