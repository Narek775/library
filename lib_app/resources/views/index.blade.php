@extends('welcome')

@section('content')
  @forelse($books as $book)
      <div class="mt-5 mb-5 d-sm-flex">
          <div>
            <a href="#">
                <img src="{{$book->src}}" alt="Cover" class="book-cover">
            </a>
          </div>
          <div class="ml-5">
            <h5>Author | <a href="">Nidhi Agrawal</a></h5>
            <h4>Capture | <a href="">{{$book->title}}</a></h4>
            <h5>Description</h5>
            <p>{{ $book->description }}</p>
            <h4>Category | <a href="">Love</a></h4>
            <a href="#">
                <button type="button" class="btn btn-success">Read Book</button>
            </a>
          </div>
      </div>
  @empty
           <p class="text-danger"> No published books</p>
  @endforelse
    
@endsection