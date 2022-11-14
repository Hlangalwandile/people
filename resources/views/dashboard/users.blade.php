@extends('layouts.user')
@section('content')
    <div class="container">
        <h1 >Users</h1>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($users as $person)
            
              <div class="col-md-3">
                <div class="card col bg-dark text-light p-0" style="width: 18rem;">
                    <img class="card-img-top" src="https://dummyimage.com/600x400/000/fff" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{$person->name}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{$person->name}}</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-body">
                      <a href="#" class="card-link btn btn-danger">Delete</a>
                      <a href="{{route('users.editPage',[$person->id])}}" class="card-link btn btn-secondary">Edit</a>
                    </div>
                  </div>
              </div>
            @endforeach
        </div>
    </div>
@endsection
