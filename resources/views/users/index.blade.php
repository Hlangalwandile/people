@extends('layouts.user')
@section('content')
    <div class="container">
        
        <div class="row">
          <div class="col"><h1 >Users</h1></div>
          <div class="col">
            
          </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($users as $person)
            
              <div class="col-md-3">
                <div class="card col bg-dark text-light p-0" style="width: 18rem;">
                    
                    <div class="card-body">
                      <h5 class="card-title">{{$person->name}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{$person->name}}</h6>
                      <p class="card-text">{{$person->quote}}</p>
                    </div>
                    <div class="card-body">
                      <form action="{{route('deleteUser',$person->id)}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('You are about to delete user - {{$person->name}} - . ARE YOU SURE?')">
                          Delete
                        </button>
                        <a href="{{route('users.editPage',[$person->id])}}" class="card-link btn btn-primary">Edit</a>
                      </form>
                      
                    </div>
                  </div>
              </div>
            @endforeach
        </div>
    </div>
@endsection
