@extends('front.layouts.main')


  @section('section')
  <!-- banner section -->
    <section id="home" class="w3l-banner py-5">
        <div class="container pt-5 pb-md-4">
            <div class="row align-items-center">
                <div class="col-md-6 pt-md-0 pt-4">
                    <h3 class="mb-sm-4 mb-3 title">Eat Fresh <br>Eat Healthy</h3>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
                        magni dolores eos qui ratione voluptatem sequi nesciunt</p>
                    <div class="mt-md-5 mt-4 mb-lg-0 mb-4">
                        <a class="btn button-style" href="menu.html">View Our Menu</a>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-4">
                    <img class="img-fluid" src="{{ asset('foodies/') }}/assets/images/bannerimg.png" alt=" ">
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->

    <!-- team with grids section -->
    <section class="w3l-content-11-main">
        <div class="content-design-11 pt-md-4 pt-1 pb-5">
            <div class="container pb-md-4 pb-3">
                <div class="content-sec-11 mt-5 pt-lg-4">
                    <div class="row">
                        <div class="col-md-6 columns">
                            <div class="icon-eff">
                                <span class="fa fa-cutlery" aria-hidden="true"></span>
                            </div>
                            <div class="right-side">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas magna at
                                    porttitor vehicula nullam augue ipsum dolor.</p>
                                <a href="#services" class="read-button">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6 columns mt-md-0 mt-4">
                            <div class="icon-eff">
                                <span class="fa fa-coffee" aria-hidden="true"></span>
                            </div>
                            <div class="right-side">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas magna at
                                    porttitor vehicula nullam augue ipsum dolor.</p>
                                <a href="#services" class="read-button">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-md-5 mt-4">
                        <div class="col-md-6 columns">
                            <div class="icon-eff">
                                <span class="fa fa-beer" aria-hidden="true"></span>
                            </div>
                            <div class="right-side">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas magna at
                                    porttitor vehicula nullam augue ipsum dolor.</p>
                                <a href="#services" class="read-button">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6 columns  mt-md-0 mt-4">
                            <div class="icon-eff">
                                <span class="fa fa-apple" aria-hidden="true"></span>
                            </div>
                            <div class="right-side">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas magna at
                                    porttitor vehicula nullam augue ipsum dolor. </p>
                                <a href="#services" class="read-button">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //team with grids section -->
    <!-- blog section -->
    <section class="w3l-blog-sec py-5">
        <div class="services-layout py-md-4 py-3">
            <div class="container">
                <h3 class="title-big mb-4 pb-2">Blog Posts</h3>
                <div class="row">
                    @foreach ($restaurants as $r)
                    <div class="col-lg-4 col-md-6 column column-img" id="zoomIn">
                        <div class="services-gd">
                            <div class="serve-info">
                                <h3 class="date">{{ $r->created_at->diffForHumans() }}</h3>
                                <a href="#blog">
                                    <figure>
                                        <img class="img-responsive" src="{{ $r->image }}" alt="blog-image">
                                    </figure>
                                </a>
                                <h3> <a href="#blog" class="vv-link">{{$r->restaurant_name}}</a>
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
                </div>
            </div>
        </div>
    </section>
    <!-- //blog section -->
    <!-- call section -->
    <section class="w3l-call-to-action-6">
        <div class="call-vv-action py-5">
            <div class="container py-md-4 py-3">
                <div class="grid">
                    <div class="float-lt">
                        <h3 class="title-big">Contact us now!</h3>
                        <p>For Online queries, please call us today</p>
                    </div>
                    <div class="float-rt text-right">
                        <ul class="buttons">
                            <li class="phone"><span class="fa fa-volume-control-phone mr-1" aria-hidden="true"></span>
                                <a class="call-style-w3" href="tel:+1(23) 456 789 0000">+1(23) 456 789 0000</a>
                            </li>
                            <li class="green">Or</li>
                            <li><a href="contact.html" class="btn button-style">Get in touch</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //call section -->
    <!-- 3 grids -->
    <section class="w3l-features-4">
        <div class="features4-block text-center py-5">
            <div class="container py-md-5 py-3">
                <div class="row features4-grids">
                    <div class="col-lg-4 col-md-6">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fa fa-motorcycle" aria-hidden="true"></span>
                            </div>
                            <h5><a href="contact.html">Fast Delivery</a></h5>
                            <p>Lorem ante ipsum primis in faucibus orci luctus eted ultrices posuere curae fers
                                luctus eted.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fa fa-shopping-basket" aria-hidden="true"></span>
                            </div>
                            <h5><a href="contact.html">Fresh Ingredients</a></h5>
                            <p>Lorem ante ipsum primis in faucibus orci luctus eted ultrices posuere curae fers
                                luctus eted.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                        <div class="features4-grid">
                            <div class="feature-images">
                                <span class="fa fa-laptop" aria-hidden="true"></span>
                            </div>
                            <h5><a href="contact.html">Online Suport 24/7</a></h5>
                            <p>Lorem ante ipsum primis in faucibus orci luctus eted ultrices posuere curae fers
                                luctus eted.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 3 grids -->
    <!-- promocode section -->
    <section class="w3l-promocode">
        <div class="promo-block pt-md-0 pt-4">
            <div class="container">
                <div class="row aap-4-section">
                    <div class="col-lg-6 app4-right-image">
                        <img src="{{ asset('foodies/') }}/assets/images/img3.png" class="img-responsive" alt="App Device" />
                    </div>
                    <div class="col-lg-6 app4-left-text pl-lg-0 mb-lg-0 mb-sm-2 mb-4">
                        <h6>For 30% Discount</h6>
                        <h4>Get Our Promocode Now</h4>
                        <p class="mb-4"> Uspendisse efficitur orci urna. In et augue ornare, tempor massa in, luctus
                            sapien. Proin a
                            diam et dui fermentum molestie vel id neque. </p>
                        <div class="app-4-connection">
                            <div class="newsletter">
                                <label>Never Miss a Deal From Foodies</label>
                                <form action="#" methos="GET" class="d-flex wrap-align">
                                    <input type="email" placeholder="Enter your email id" required="required" />
                                    <button type="submit">Get Promocode</button>
                                </form>
                            </div>
                            <p class="mobile-text-app mt-4 pt-2">(Or) To Get Our Mobile Apps</p>
                            <div class="app-4-icon">
                                <ul>
                                    <li><a href="#url" title="Apple" class="app-icon apple-vv"><span class="fa fa-apple"
                                                aria-hidden="true"></span></a></li>
                                    <li><a href="#url" title="Google play" class="app-icon play-vv"><span
                                                class="fa fa-play" aria-hidden="true"></span></a></li>
                                    <li><a href="#url" title="Microsoft" class="app-icon windows-vv"><span
                                                class="fa fa-windows" aria-hidden="true"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //promocode section -->
   @endsection
