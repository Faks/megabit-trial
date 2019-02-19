@extends('template.layout')

@section('content')
    <div class="col-12" id="container">
        <div class="row">
            <div class="col-6">
                <div class="card text-white" id="card-animate-f" style="height: 420px; background: transparent;border: unset;">
                    <div class="card-body">
                        <div class="row">
                            <h5 class="card-title">Don’t have an account?</h5>
                            <hr>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-6">
                <div class="card" id="card-animate" style="top: -20px; height: 460px;">
                    <div class="card-body">
                        <div class="row">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="card-link card-left">Card link</a>
                            <a href="#" class="card-link card-right">Another link</a>
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
    
                }
            });
            
            $(".card-right").click(function () {
                id_selector_card_animate.removeClass('move').animate({right: "0"}, 1000);
                id_selector_card_animate_f.animate({left: "0"}, 1000);
            });
        });
    </script>
@endpush