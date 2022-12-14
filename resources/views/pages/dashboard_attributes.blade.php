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
                            <th>Name</th>
                            <th>Type</th>
                            <th>Required</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                        </thead>
                        
                        <tbody>
                        @foreach($attributes as $attribute)
                            <tr>
                                <td>{{ $attribute->id }}</td>
                                <td>{{ $attribute->name }}</td>
                                <td>{{ $attribute->type }}</td>
                                <td>{{ $attribute->required }}</td>
                                <td><a href="/dashboard/attribute/destroy/{{ $attribute->id }}">Delete</a></td>
                                <td><a href="/dashboard/attribute/edit/{{ $attribute->id }}">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop