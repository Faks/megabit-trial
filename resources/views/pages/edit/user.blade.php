@extends('template.layout')

@section('content')
    <div class="col-12" id="container">
        <div class="row">
            <div class="card card-animate-full ml-mr-30">
                
                <div class="card-header">
                    
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-5">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item" aria-current="page">
                                            <a href="/dashboard">Dashboard</a>
                                        </li>
                                        
                                        <li class="breadcrumb-item active" aria-current="page">
                                            <a href="/dashboard/user/edit/{{ $id }}">User Manage</a>
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="col-md-7">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item" aria-current="page">
                                            <a href="/dashboard/attribute/create">Create Attribute</a>
                                        </li>
            
                                        <li class="breadcrumb-item" aria-current="page">
                                            <a href="/logout">Logout</a>
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                
                </div>
                
                <div class="card-body">
                    <div class="row">
                        
                        <form class="form-center" action="/dashboard/user/store" method="post" id="form">
                            
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h4>
                                                User
                                                <hr>
                                            </h4>
                                        </div>
                                        
                                        <div class="col-sm-4">
                                            <img src="/img/logo.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group input-group row ml-0" id="name">
                                <label for="input-name" class="col-sm-12 col-form-label col-form-label-sm pl-0 pb-0">Name<sup
                                        class="p-1 text-danger">*</sup></label>
                                <input type="text" name="name" value="{{ $get_user->username }}" class="form-control
                                form-control-sm"
                                       id="input-name"
                                       required="" aria-required="true">
                                
                                <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">
                            <img src="/img/ic_user_default.png">
                        </span>
                                </div>
                            </div>
                            
                            <div class="form-group input-group row ml-0">
                                <label for="input-email" class="col-sm-12 col-form-label col-form-label-sm pl-0 pb-0">Email<sup
                                        class="p-1 text-danger">*</sup></label>
                                <input type="email" name="email" value="{{  $get_user->email }}" class="form-control
                                form-control-sm"
                                       id="input-email"
                                       required=""
                                       aria-required="true">
                                
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
                                            <button name="id" value="{{  $get_user->id }}" type="submit" class="btn
                                            btn-size btn-login
                                            btn-round-corners">
                                                Update
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