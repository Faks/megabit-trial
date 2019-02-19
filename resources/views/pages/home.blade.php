@extends('template.layout')

@section('content')
    <div class="col-12" id="container">
        <div class="row">
            <div class="col-6">
                <div class="card text-white" id="card-animate-f"
                     style="height: 420px; background: transparent;border: unset;">
                    <div class="card-body">
                        <div class="row">
                            <h5 class="card-title">
                                <span class="signup">
                                    Don’t have an account?
                                </span>
                                
                                <span class="login hidden">
                                   Have an account?
                                </span>
                            </h5>
                            <hr>
                            <p class="card-text">
                                <span class="signup">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                </span>
                                
                                <span class="login hidden">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                </span>
                            </p>
                            <div class="card-footer">
                                <div class="row">
                                    <a href="#" class="signup card-left">
                                        SIGN UP
                                    </a>
                                    
                                    <a href="#" class="login hidden card-right">
                                        LOGIN
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-6">
                <div class="card" id="card-animate" style="top: -20px; height: 460px;">
                    <div class="card-body">
                        <div class="row">
                            <form action="/store" method="post">
                                <div class="form-group row hidden" id="name">
                                    <label for="input-name" class="col-sm-10 col-form-label
                                    col-form-label-sm">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control form-control-sm"
                                               id="input-name"
                                               placeholder="Name" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabelSm" class="col-sm-10 col-form-label
                                    col-form-label-sm">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control form-control-sm"
                                               id="colFormLabelSm"
                                               placeholder="Email">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="colFormLabelLg" class="col-sm-10 col-form-label
                                    col-form-label-lg">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" name="password" class="form-control form-control-lg"
                                               id="colFormLabelLg"
                                               placeholder="Password">
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </form>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@push('footer_js')
    <script>
        $(document).ready(function () {
            var id_selector_card_animate = $("#card-animate");
            var id_selector_card_animate_f = $("#card-animate-f");
            
            $(".card-left").click(function () {
                
                if (!id_selector_card_animate.hasClass('move')) {
                    id_selector_card_animate.addClass('move').animate({right: "+=460px"}, 1000);
                    id_selector_card_animate_f.animate({left: "+=460px"}, 1000);
                    id_selector_card_animate_f.css({'z-index': '1000'});
                    id_selector_card_animate.css({'z-index': '2000'});
                    $(".login").removeClass('hidden');
                    $(".signup").addClass('hidden');
                    $("#name").removeClass('hidden');
                    $("#input-name").removeAttr('disabled');
                }
                $(".card-body").fadeOut(650);
                $(".card-body").fadeIn(650);
            });
            
            $(".card-right").click(function () {
                id_selector_card_animate.removeClass('move').animate({right: "0"}, 1000);
                id_selector_card_animate_f.animate({left: "0"}, 1000);
                $(".login").addClass('hidden');
                $(".signup").removeClass('hidden');
                $(".card-body").fadeOut(650);
                $(".card-body").fadeIn(650);
                $("#name").addClass('hidden');
                $("#input-name").attr('disabled', 'disabled');
            });
        });
    </script>
@endpush