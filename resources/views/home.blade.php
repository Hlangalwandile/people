@extends('layouts.app')
@section('content')
<section class="landing-page ">
<div class="conainer home row">
    <div class="col row d-flex justify-content-between mcd-header">
        <div class="col-md-10">
            <h1><span>People</span></h1>
            <ul>
                <li><span>suger</span></li>
                <li><span>spice</span></li>
                <li><span>all things nice</span></li>
            </ul>
        </div>
    </div>
    <div class="col-md-4">
        @isset($users)
        @foreach ($users as $user)
        @isset($user->qoute)
        <div class="card mcd-card mt-3 mx-3">
            <div class="card-body">
                <figure class="text-end">
                    <blockquote class="blockquote">
                      <p>{{$user->qoute}}</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                      {{$user->name}} | <cite title="Source Title" class="mcd-profession">{{$user->profession}}</cite>
                    </figcaption>
                  </figure>
            </div>
        </div>
        @endisset
        @endforeach
        @endisset
        
    </div>
</div>
</section>

@endsection