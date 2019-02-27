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
                            <th>Assigned To</th>
                            <th>Field Name</th>
                            <th>Field Type</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        
                        <tbody>
                        @foreach($attributes_assigned as $attribute_assigned)
                            <tr>
                                <td>{{ $attribute_assigned->username }}</td>
                                <td>{{ $attribute_assigned->name }}</td>
                                <td>{{ $attribute_assigned->type }}</td>
                                <td><a href="/dashboard/attribute/assign/destroy/{{ $attribute_assigned->custom_attributes_assigned_id }}">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop