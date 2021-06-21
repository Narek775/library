<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lib_read_bookController extends Controller
{
    //

    public function libReadBook(){

        return view("library_read_book");
    }
}
