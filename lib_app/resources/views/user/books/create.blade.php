@extends('welcome')
@section('content')
    

    <form class="bg-dark text-primary" action="{{ route('books.create') }}" method="post"  enctype="multipart/form-data">

      @csrf
        <div class="form-group">
          <label for="author" class="text-primary">Create Author</label>
          <input type="text" name="author" class="form-control" id="author" placeholder="Author">
        </div>
        <div class="form-group">
            <label for="category">Create Categories</label>
            <input type="text" name="category" class="form-control" id="category" placeholder="Category">
          </div>
          <div class="form-group">
            <label for="title">Create Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title">
          </div>

          <div class="form-group">
            <label for="file">Choose File for Cover Of Book</label>
            <input type="file" name="file"  accept="image/*"     class="form-control-file" id="file" >
          </div>
          
        
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description</label>
          <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="10"></textarea>
        </div>
        <div >
          <div class="row">
              <div class="col-md-7 offset-3 mt-4">
                  <div class="card-body"><h3>Creat content</h3>
                     
                         
                          <div class="form-group">
                              <textarea class="ckeditor form-control" name="wysiwyg-editor" rows="20"></textarea>
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


        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#book-cover-tag').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#file").change(function(){
            readURL(this);
        });

    </script>
    <script type="text/javascript">
        CKEDITOR.replace('wysiwyg-editor', {
            filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
       

@endsection      
