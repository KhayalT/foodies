@extends('front.layouts.main')

@section('section')

        <!-- inner banner -->
        <div class="inner-banner">
            <section class="w3l-breadcrumb">
                <div class="container">
                    <h4 class="inner-text-title font-weight-bold mb-sm-3 mb-2">Restoranlar</h4>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Blog Page</li>
                    </ul>
                </div>
            </section>
        </div>
        <!-- //inner banner -->
        <div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->


    </div>
        <!-- blog section -->
        <section class="w3l-blog-sec py-5">
            <div class="services-layout py-md-4 py-3">
                <div class="container">
                    <h3 class="title-big mb-4 pb-2">@if($restaurants->count() <= 0) Belə Restoran Yoxdur @else {{ $restaurants->total() }} Restoran var @endif</h3>
                    <div class="row">
                    @foreach ($restaurants as $r)
                        <div class="col-lg-4 col-md-6 column column-img" id="zoomIn">
                            <div class="services-gd">
                                <div class="serve-info">
                                    <h3 class="date">{{ $r->created_at->diffForHumans() }}</h3>
                                    <a href="blog-single.html">
                                        <figure>
                                            <img class="img-responsive" src="{{$r->image}}" loading='lazy' alt="blog-image">
                                        </figure>
                                    </a>
                                    <h3> <a href="blog-single.html" class="vv-link">{{$r->restaurant_name}}</a>
                                    </h3>
                                    <ul class="admin-list">
                                        <li><a href="#blog"><span class="fa fa-user-circle"
                                            aria-hidden="true"></span>
                                        Admin</a></li>
                                <li><a href="#blog">
                                {{ $r->review->count() > 0 ? round(($r->review->sum('star') / $r->review->count() ),1) : 0 }}
                                <span class="fa fa-star" style="color:yellow" aria-hidden="true"></span> </a></li>
                                <li><a href="#blog"><span class="fa fa-comments"
                                            aria-hidden="true"></span>{{ $r->review->count() }} Şərh</a>
                                </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @if($restaurants->count() > 0)
                    {{ $restaurants->links() }}
                    @endif
                    <!-- pagination -->


                    <!-- //pagination -->
                </div>
            </div>
        </section>
        <!-- //blog section -->
        <div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->

    </div>
        <!-- section divide border style -->
        <div class="border-sec">

        </div>
        <!-- //section divide border style -->
        <div style="margin: 8px auto; display: block; text-align:center;">

    <!---728x90--->

    </div>
    @endsection
