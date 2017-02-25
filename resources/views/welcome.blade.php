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

                @for ($i=1;$i<22;$i++)
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x200" alt="">
                            <div class="caption">
                                <h4 class="pull-left success"><strike>&#8377; 1000/-</strike> <span style="color:green;">&#8377; 800/-</span></h4><br>
                                <h4 class="pull-left"><a href="#">First Products dvnsl vnsl dvnls dvjs svsdv sv sdv sdvv dsvsdsdv svdvsd sbbdv sdbfs sbvfb </a></h4><br>
                                <br><br>
                                <span> </span>
                                <h5 class="center-block"><b>8 hours . Amazon</b></h5>
                            </div>
                            <div class="ratings">
                                <button class="btn btn-primary btn-block">
                                    Shop Now
                                </button>
                            </div>
                        </div>
                    </div>
                @endfor

                </div>

            </div>

        </div>

    </div>
@endsection
 