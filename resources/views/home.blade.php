@extends('layout.master')

@section('title','content')

@section('content')

    <a href="{{ url('/logout') }}" type="button" class="btn btn-danger">Logout</a>

    <div class="container" col-md-8 col-mod-offset-2>
        <div class="well">
            <table class="table table-bordered">
                <thead>
                    
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Manage</th>

                </thead>
                <tbody>

                    @foreach($users as $user)

                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @foreach($user->roles as $role)
                                {{ $role->name }}
                            @endforeach
                        </td>
                        <td><a href="{{ url('admin/user/'.$user->id.'/edit') }}" class="btn btn-success">Manage</a></td>
                    </tr>   

                    @endforeach

                </tbody>
            </table>

            <table class="table table-bordered">
                <thead>
                    
                    <th>ID</th>
                    <th>Name</th>

                </thead>
                <tbody>

                    @foreach($roles as $role)

                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->name }}</td>
                    </tr>   

                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
    
@endsection