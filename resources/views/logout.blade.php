@extends('layout')

@section('content')

<div class="container">
    <div class="row">        
        <div class="col-md-6 offset-md-3">
            <label for="">Id: </label> <h3>{{ $user->id }}</h3> <br />
   
            <label for="">Email: </label> <h3>{{ $user->email }} </h3> <br />

            <label for="">Activation Status: </label><h3> {{ $user->activated }}</h3>
        </div>

        <div class="col-md-3">
            <form action="logout" method="get">
                <button type="submit" class="btn btn-primary">Logout</button>
            </form>
        </div>
  </div>
</div>

 
@endsection