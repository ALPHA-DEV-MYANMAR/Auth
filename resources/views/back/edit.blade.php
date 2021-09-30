@extends('layout.master')

@section('title','UserManage')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <div class="col-md-3"></div>

                <div class="col-md-6">
                    <form action="{{ url('admin/user/'.$users->id.'/edit') }}" method="POST">

                        {{ csrf_field() }}
                        
                        <legend>Name</legend>
                        <div class="form-group">

                            <input type="text" class="form-control" value="{{ $users->name }}">

                        </div>

                        <legend>Roles</legend>

                        @foreach ($roles as $role)
                            <input type="checkbox" name="role_ids[]" value="{{ $role->id }}" id="label{{ $role->id }}"
                            @foreach($users->roles as $Userrole)
                                @if($Userrole->name == $role->name)
                                    checked
                                @endif
                            @endforeach
                            >
                            <label for="label{{ $role->id }}">{{ $role->name }}</label><br>
                        @endforeach

                            <br>
                            <button class="btn btn-primary">Add Roles</button>
                    </form>
                </div>

                <div class="col-md-3"></div>

            </div>
        </div>
    </div>
    
@endsection