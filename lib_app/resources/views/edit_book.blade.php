@extends('welcome')

@section('content')
  
<div class="mt-5 mb-5 d-sm-flex">
    <div>
      <a href="#">
          <img src="photos/cover1.png" alt="Cover" width="200px">
      </a>
    </div>
    <div class="ml-5">
       <h5>Author | <a href="">Nidhi Agrawal</a></h5>
       <h4>Capture | <a href="">A cute love story</a></h4>
       <h5>Description</h5>
       <p>Aakriti is in love with Neeraj.Neeraj is also mad for Aakriti.but she found out him not to be a good boy. will she be able to change him ?will their love win over the weaknesses of Neeraj? will they have happy life together?

      </p>
       <h4>Category | <a href="">Love</a></h4>
       <a href="#">
          <button type="button" class="btn btn-success">update Book</button>
          <button type="button" class="btn btn-success">delete Book</button>
       </a>
    </div>
</div>
    
@endsection