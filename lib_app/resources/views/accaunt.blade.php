@extends('welcome')

@section('content')

<div class="card-body">
  @if (session('success'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h5 >{{ session('success') }}</h5>
      </div>
  @endif
<!--
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h5 >{{ __('You are successfully logged in!') }}</h5>
  </div>
-->  
</div>

<div>
  <a class="nav-link " href="{{ route('books.create') }}">
    <button class="btn btn-outline-primary my-2 my-sm-0 form-control" type="submit">Create Book</button>
  </a>
</div>

@foreach($books as $book)
    <div class="mt-5 mb-5 d-sm-flex">
        <div>
          <a href="#">
              <img src="{{$book->src}}" alt="Cover" class="book-cover">
          </a>
        </div>
        <div class="ml-5">
          <h5>Author | <a href="">{{$book->author->name}}</a></h5>
          <h4>Capture | <a href="">{{$book->title}}</a></h4>
          <h5>Description</h5>
          <p>{{$book->description}}</p>
          <h4>Category | <a href="">{{$book->category->name}}</a>
          </h4>
          
          <button type="button" class="btn btn-success">Read</button>
          <a href="{{route('books.update',[$book->id])}}" type="button"    class="btn btn-primary">
             Update
          </a>
            <form action="{{route('books.delete',[$book->id])}}" method="post">
                 @csrf
                {{method_field('delete')}}
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
        </div>
    </div>
    @endforeach
@endsection