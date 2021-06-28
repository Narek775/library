@extends('welcome')
@section('content')
    

    <form class="bg-dark text-primary" action="{{ route('books.update',[$book->id]) }}" method="post"  enctype="multipart/form-data">

      @csrf
        <div class="form-group">
          <label for="author" class="text-primary">Author</label>
          <input type="text" name="author" class="form-control" id="author" placeholder="Enter Author" value="{{ $book->author->name }}">
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" name="category" class="form-control" id="category" placeholder="Enter Category" 
            value = "{{ $book->category->name }}">
          </div>
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title" value="{{ $book->title }}" >
          </div>

          <div class="form-group">
            <label for="file">Choose File for Cover Of Book</label>
            <input type="file" name="file"  class="form-control-file" id="file">
          </div>
          
        
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description</label>
          <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="10" 
          >{{ $book->description }}</textarea>
        </div>

        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="publish"    name="publish" {{  ($book->status == 1 ? ' checked' : '') }}>
            <label class="form-check-label" for="publish">Publish</label>
        </div>

        <div >
          <div class="row">
              <div class="col-md-7 offset-3 mt-4">
                  <div class="card-body"><h3>Content</h3>
                     
                         
                          <div class="form-group">
                              <textarea class="ckeditor form-control" name="wysiwyg-editor" rows="20" 
                               >{{ $book->content }}</textarea>
                          </div>
                     
                  </div>
              </div>
          </div>
      </div>

        <button type="submit" class="btn btn-primary mb-2">Add Book to Accaunt</button>
    </form>

  
    <script src="../ckeditor/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });

    </script>
    <script type="text/javascript">
        CKEDITOR.replace('wysiwyg-editor', {
            filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
       

@endsection      
