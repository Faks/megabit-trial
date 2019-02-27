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
                    <div class="row">
    
                        @include('errors.errors')
                        @include('errors.success')
                        
                        <form class="form-center" action="{{ $action }}" method="post" id="form">
                            
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h4>
                                                Assign Attribute
                                                <hr>
                                            </h4>
                                        </div>
                                        
                                        <div class="col-sm-4">
                                            <img src="/img/logo.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group input-group row ml-0">
                                
                                <label for="input-custom-attribute" class="col-sm-12 col-form-label col-form-label-sm
                                 pl-0 pb-0">Field<sup class="p-1 text-danger">*</sup></label>
                                
                                <select class="form-control" name="custom_attributes" id="input-custom-attribute">
                                    @foreach($get_custom_fields as $custom_field)
                                        <option value="{{ $custom_field->id }}">{{ $custom_field->name }}</option>
                                    @endforeach
                                </select>
                                
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">
                                        <img src="/img/ic_mail_default.png">
                                    </span>
                                </div>
                            </div>
                            
                            <div class="form-group input-group row ml-0">
                                
                                <label for="input-custom-attributes-users" class="col-sm-12 col-form-label
                                col-form-label-sm pl-0
                                pb-0">Assign Fields To<sup class="p-1 text-danger">*</sup></label>
                                
                                <select class="form-control" name="custom_attributes_users"
                                        id="input-custom-attributes-users">
                                    
                                    @foreach($get_users as $user)
                                        <option value="{{ $user->id }}">{{ $user->username }}</option>
                                    @endforeach
                                </select>
                                
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">
                                        <img src="/img/ic_mail_default.png">
                                    </span>
                                </div>
                            </div>
                            
                            <div class="form-group row mg-t-30">
                                <div class="col-sm-12 pr-0 pl-0">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn
                                            btn-size btn-login
                                            btn-round-corners">
                                                Assign
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </form>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop