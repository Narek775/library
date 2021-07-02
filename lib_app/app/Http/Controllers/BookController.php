<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use App\Models\User;
use Auth;
use Storage;

class BookController extends Controller
{
    //
    
    
    public function show(){

        return view('user.books.create');
    }

    
    public function create(Request $req)
    {
        $book = Book::create(
                   [
                    'title' => $req->input('title'),
                    'author' => $req->input('author'),
                    'category' => $req->input('category'),
                    'description' => $req->input('description'),
                    'content' => $req->input('wysiwyg-editor'),
                    'user_id' => Auth::user()->id,
                    ]
            );
        $file = $req->file('file');
        $fileName = $file->getClientOriginalName();
        $filePath = 'images/'.$book->id.DIRECTORY_SEPARATOR.$fileName;
        if(!file_exists($filePath)){
            $file->move('images/'.$book->id.DIRECTORY_SEPARATOR,$fileName);
        }
    
        $book->src = $filePath;
        $book->save(); 
         
        return redirect()->route('accaunt');
    }
    
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $book = Book::find($id);
        if($data){
           
           $book->status = $request->input('publish') ? 1 : 0;
           $book->title = $request->input('title');
           $book->author = $request->input('author');
           $book->category = $request->input('category');
           $book->content =  $request->input('wysiwyg-editor');
           $book->save();

           return redirect()->route('accaunt');
        }

        
        return view('user.books.update',['book' =>$book]);
    }
    

    public function delete($id){

         Book::find($id)->delete();

         return back()->with('success', 'your deleting is successful');
    }
}