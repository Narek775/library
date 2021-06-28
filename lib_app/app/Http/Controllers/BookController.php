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
        

        $author = Author::create(
            [
               'name' => $req->input('author')
            ]
        );

        $category = Category::create(
            [
                 'name' => $req->input('category')
            ]
        );
        
        
                 
        $book = Book::create(
                   [
                    'title' => $req->input('title'),
                    'description' => $req->input('description'),
                    'content' => $req->input('wysiwyg-editor'),
                    'user_id' => Auth::user()->id,
                    'author_id' => $author->id,
                    'category_id' => $category->id
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
        $book = Book::findOrFail($id)->with('author','category')->first();
        if($data){
           
           $book->status = $request->input('publish') ? 1 : 0;
           $book->title = $request->input('title');
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