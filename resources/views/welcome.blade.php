@extends('master.master')

@section('content')
        <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>
            </div>

            <div class="col-md-9">

                <!--div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div-->

                <div class="row">

                @foreach($deals as $deal)
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <div style="width:320px;height:200px;">
                            <img style="width:250px;height:200px;" src="{{$deal->image}}" alt="{{$deal->heading}}">
                            </div>
                            <div class="caption">
                                <div class="col-12" style="display:block;">
                                <h4 class="success"><span>&nbsp;&nbsp;&nbsp;&nbsp;<strike>&#8377; {{$deal->actual_cost}}/-</span></strike> <span class="pull-left" style="color:green;">&#8377; {{$deal->current_cost}}/-</span></h4></div>
                                <div style="display:block;">
                                <h4 class=""><a href="#">{{$deal->heading}}</a></h4><br>
                                </div>
                                <h5 class="center-block"><b>8 hours . {{$deal->vendor}}</b></h5>
                            </div>
                            <div class="ratings bottom">
                                <button class="btn btn-primary btn-block">
                                    Shop Now
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach

               

                </div>

            </div>

        </div>

    </div>
@endsection
 