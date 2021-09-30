@extends('layout.master')

@section('title','Login')

@section('content')

    <br><br><br><br>

  <div class="container col-md-8 col-md-offset-2">
    <div class="well">
        <form method="POST">

            {{ csrf_field() }}

            <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>

            <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
            </div>

            <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>

        </form>
    </div>
</div>
    
@endsection