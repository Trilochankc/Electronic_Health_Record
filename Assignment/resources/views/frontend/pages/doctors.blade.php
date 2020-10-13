@extends('frontend.layouts.master')
@section('content')
    <section id="team" data-stellar-background-ratio="1">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-6">
                    <div class="about-info">
                        <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Doctors</h2>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-md-3 col-sm-6">
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

                <div class="col-md-3 col-sm-6">
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

                <div class="col-md-3 col-sm-6">
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
                <div class="col-md-3 col-sm-6">
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

            </div>
        </div>
    </section>
@endsection
