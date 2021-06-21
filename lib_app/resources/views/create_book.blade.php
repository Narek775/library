@extends('welcome')
@section('content')
    

    <form>
        <div class="form-group">
          <label for="author">Create Author</label>
          <input type="text" class="form-control" id="author" placeholder="Author">
        </div>
        <div class="form-group">
            <label for="category">Create Categories</label>
            <input type="text" class="form-control" id="category" placeholder="Category">
          </div>
          <div class="form-group">
            <label for="title">Create Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title">
          </div>
          
          <div class="form-group">
            <label for="exampleFormControlFile1">Choose File for Cover Of Book</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
       
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Example textarea</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
        </div>
        @include('inc.ckeeditor')

        <button type="submit" class="btn btn-primary mb-2">Add Book to Accaunt</button>

       

@endsection      
