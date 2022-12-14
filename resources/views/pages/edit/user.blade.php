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
    
                            @foreach($get_attributes_assigned as $attribute_assigned)
        
                                <div class="form-group input-group row ml-0">
                                    <label for="input-{{ strtolower($attribute_assigned->name) }}" class="col-sm-12
                                    col-form-label col-form-label-sm pl-0
                                pb-0">{{ strtolower($attribute_assigned->name) }}<sup
                                            class="p-1 text-danger">*</sup></label>
            
                                    @if ($attribute_assigned->type == 'textarea')
                                        <textarea name="{{ strtolower($attribute_assigned->name) }}"
                                                  class="form-control" rows="5" id="input-{{ strtolower
                                        ($attribute_assigned->name) }}">{{ $attribute_assigned->text }}</textarea>
                                    @else
                                        <input type="{{ $attribute_assigned->type }}" name="{{ strtolower
                                    ($attribute_assigned->name) }}"
                                               value="{{  $attribute_assigned->text }}" class="form-control
                                form-control-sm"
                                               id="input-{{ strtolower($attribute_assigned->name) }}"
                
                                               @if($attribute_assigned->required == "yes" )
                                               required=""
                                               aria-required="true"
                                            @endif
                                        >
                                    @endif
            
                                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">
                            <img src="/img/ic_mail_default.png">
                        </span>
                                    </div>
                                </div>
                            @endforeach
                            
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