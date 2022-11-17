@extends('layouts.user')
@section('content')
    <div class="container">
        <h1>My Profile</h1>
        <div class="container row">
            <div class="card bg-dark text-light col-md-4 p-0">
                <div class="card-body">
                    <form action="{{route('updateProfile')}}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="email" class="py-2">Email:</label>
                          <input type="email" class="form-control" id="email" value="@isset($user->email) {{$user->email}} @endisset" disabled placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="name" class="py-2">Name:</label>
                            <input type="text" class="form-control" id="name" value="@isset($user->name) {{$user->name}} @endisset" placeholder="Enter name" name="name">
                          </div>
                        <div class="form-group">
                          <label for="profession" class="py-2">Profession:</label>
                          <input type="text" class="form-control" id="profession" placeholder="Enter profession" name="profession" value="@isset($user->profession) {{$user->profession}} @endisset">
                        </div>
                        <div class="form-group">
                            <label for="quote" class="py-2">Favorite quotes:</label>
                            
                            <textarea id="quote" class="form-control" placeholder="Enter quote" name="quote" cols="30" rows="5">@isset($user->qoute) {{$user->qoute}}@endisset</textarea>
                          </div>

                          <div class="form-group">
                            <label for="age" class="py-2">Age:</label>
                            <input type="text" class="form-control" id="age" placeholder="Enter age" value="@isset($user->Age) {{$user->Age}} @endisset" name="age">
                          </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>

                      </form>
                </div>
            </div>
        </div>
    </div>
@endsection
