@extends('template.layout')

@section('content')
    <div class="col-12" id="container">
        <div class="row">
            <div class="card card-animate-full ml-mr-30">
                <div class="card-header">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                @include('partials.breadcrumb')
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card-body">
                    
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                        </thead>
                        
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td><a href="/dashboard/user/destroy/{{ $user->id }}">Delete User</a></td>
                                <td><a href="/dashboard/user/edit/{{ $user->id }}">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop