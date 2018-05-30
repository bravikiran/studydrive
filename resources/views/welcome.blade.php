@extends('layout')

@section('content')
    
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container">         
            <div class="content">
                <div class="m-b-md">
                    <form class="" action='{{ URL::to('/') }}' method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="useremail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="userpassword" class="form-control" id="exampleInputPassword1" placeholder="Password" minlength='5'>
                        </div> 

                        <button type="submit" name="userdata" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif -->
    
@endsection