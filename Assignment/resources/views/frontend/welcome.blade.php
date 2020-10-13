@extends('frontend.layouts.master')
@section('content')
    <!-- HOME -->
    <section id="home" class="slider" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="owl-carousel owl-theme">
                    <div class="item item-first">
                        <div class="caption">
                            <div class="col-md-offset-1 col-md-10">
                                <h3>Let's make your life happier</h3>
                                <h1>Healthy Living</h1>
                                <a href="#team" class="section-btn btn btn-default smoothScroll">Meet Our Doctors</a>
                            </div>
                        </div>
                    </div>

                    <div class="item item-second">
                        <div class="caption">
                            <div class="col-md-offset-1 col-md-10">
                                <h3>Aenean luctus lobortis tellus</h3>
                                <h1>New Lifestyle</h1>
                                <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More About Us</a>
                            </div>
                        </div>
                    </div>

                    <div class="item item-third">
                        <div class="caption">
                            <div class="col-md-offset-1 col-md-10">
                                <h3>Pellentesque nec libero nisi</h3>
                                <h1>Your Health Benefits</h1>
                                <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Read Stories</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- ABOUT -->
    <section id="about">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6">
                    <div class="about-info">
                        <h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to Your <i class="fa fa-h-square"></i>ealth Center</h2>
                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <p>Aenean luctus lobortis tellus, vel ornare enim molestie condimentum. Curabitur lacinia nisi vitae velit volutpat venenatis.</p>
                            <p>Sed a dignissim lacus. Quisque fermentum est non orci commodo, a luctus urna mattis. Ut placerat, diam a tempus vehicula.</p>
                        </div>
                        <figure class="profile wow fadeInUp" data-wow-delay="1s">
                            <img src="{{asset('public/frontend/images/author-image.jpg')}}" class="img-responsive" alt="">
                            <figcaption>
                                <h3>Dr. Neil Jackson</h3>
                                <p>General Principal</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- TEAM -->
    <section id="team" data-stellar-background-ratio="1">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6">
                    <div class="about-info">
                        <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Doctors</h2>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-md-4 col-sm-6">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{asset('public/frontend/images/team-image1.jpg')}}" class="img-responsive" alt="">

                        <div class="team-info">
                            <h3>Dr. Bhagwan koirala</h3>
                            <p>Cardiology</p>
                            <div class="team-contact-info">
                                <p><i class="fa fa-phone"></i> 9800000000</p>
                                <p><i class="fa fa-envelope-o"></i> <a href="#">info@gmail.com</a></p>
                            </div>
                            <ul class="social-icon">
                                <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                <li><a href="#" class="fa fa-envelope-o"></a></li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                        <img src="{{asset('public/frontend/images/team-image2.jpg')}}" class="img-responsive" alt="">

                        <div class="team-info">
                            <h3>Dr, Nirmala Sapkota</h3>
                            <p>Pregnancy</p>
                            <div class="team-contact-info">
                                <p><i class="fa fa-phone"></i> 9800000000</p>
                                <p><i class="fa fa-envelope-o"></i> <a href="#">info@gmail.com</a></p>
                            </div>
                            <ul class="social-icon">
                                <li><a href="#" class="fa fa-facebook-square"></a></li>
                                <li><a href="#" class="fa fa-envelope-o"></a></li>
                                <li><a href="#" class="fa fa-flickr"></a></li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                        <img src="{{asset('public/frontend/images/team-image3.jpg')}}" class="img-responsive" alt="">

                        <div class="team-info">
                            <h3>Dr, Manish Sharma</h3>
                            <p>Cardiology</p>
                            <div class="team-contact-info">
                                <p><i class="fa fa-phone"></i> 9800000000</p>
                                <p><i class="fa fa-envelope-o"></i> <a href="#">info@gmail.com</a></p>
                            </div>
                            <ul class="social-icon">
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-envelope-o"></a></li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="news" data-stellar-background-ratio="2.5" style="background-position: 0px 75.7734px;">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <h2>Latest News</h2>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <!-- NEWS THUMB -->
                    <div class="news-thumb wow fadeInUp animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                        <a href="#">
                            <img src="{{asset('public/frontend/images/news-image1.jpg')}}" class="img-responsive" alt="">
                        </a>
                        <div class="news-info">
                            <span>March 08, 2018</span>
                            <h3><a href="#">About Amazing Technology</a></h3>
                            <p>Maecenas risus neque, placerat volutpat tempor ut, vehicula et felis.</p>
                            <div class="author">
                                <img src="{{asset('public/frontend/images/author-image.jpg')}}" class="img-responsive" alt="">
                                <div class="author-info">
                                    <h5>Jeremie Carlson</h5>
                                    <p>CEO / Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <!-- NEWS THUMB -->
                    <div class="news-thumb wow fadeInUp animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                        <a href="#">
                            <img src="{{asset('public/frontend/images/news-image2.jpg')}}" class="img-responsive" alt="">
                        </a>
                        <div class="news-info">
                            <span>February 20, 2018</span>
                            <h3><a href="#">Introducing a new healing process</a></h3>
                            <p>Fusce vel sem finibus, rhoncus massa non, aliquam velit. Nam et est ligula.</p>
                            <div class="author">
                                <img src="{{asset('public/frontend/images/author-image.jpg')}}" class="img-responsive" alt="">
                                <div class="author-info">
                                    <h5>Jason Stewart</h5>
                                    <p>General Director</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <!-- NEWS THUMB -->
                    <div class="news-thumb wow fadeInUp animated" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                        <a href="#">
                            <img src="{{asset('public/frontend/images/news-image3.jpg')}}" class="img-responsive" alt="">
                        </a>
                        <div class="news-info">
                            <span>January 27, 2018</span>
                            <h3><a href="#">Review Annual Medical Research</a></h3>
                            <p>Vivamus non nulla semper diam cursus maximus. Pellentesque dignissim.</p>
                            <div class="author">
                                <img src="{{asset('public/frontend/images/author-image.jpg')}}" class="img-responsive" alt="">
                                <div class="author-info">
                                    <h5>Andrio Abero</h5>
                                    <p>Online Advertising</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection