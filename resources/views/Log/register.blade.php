@extends('layout.master')

@section('title','Register')

@section('content')

<br>
<br>
<br>
<br>

<div class="container col-md-8 col-md-offset-2">
    <div class="well">

        <form method="post">

        <!-- Token -->
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="username">User Name:</label>
            <input type="username" class="form-control" id="username" name="name" placeholder="Enter username">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>

        <div class="form-group">
            <label for="confirmpassword">Confirm Password:</label>
            <input type="password" class="form-control" id="confirmpassword" name="password_confirmation" placeholder="Comfirm Password">
        </div>
        
            <button type="submit" class="btn btn-primary pull-right">Register</button>
            <div class="clearfix"></div>
        </form>

    </div>
</div>

    
@endsection