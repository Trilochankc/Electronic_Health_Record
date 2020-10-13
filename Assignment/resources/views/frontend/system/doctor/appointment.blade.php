@extends('frontend.layouts.master')
@section('content')
    <!-- MAKE AN APPOINTMENT -->
    <section id="appointment" data-stellar-background-ratio="3">
        <div class="container">
            <div class="row">

                <div class="col-md-5 col-sm-5">
                    <img src="{{asset('public/frontend/images/appointment-image.jpg')}}" class="img-responsive" alt="">
                </div>

                <div class="col-md-7 col-sm-7" id="appointment_f">
                    <!-- CONTACT FORM HERE -->
                    <div class="appointment_f">
                        <form id="appointment-form" role="form" method="post" action="{{url('book-an-appointment')}}">
                            {{csrf_field()}}
                            <!-- SECTION TITLE -->
                            <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                <h2>Make an appointment</h2>
                            </div>
                                <div class="message">
                                    @if(session('success'))
                                        <div class="col-md-12">
                                            <div class="alert alert-success alert-dismissable" role="alert" style="background-color: #00a680; color: #fff;">
                                                <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <p class="mb-0"><i class="fa fa-check-circle"></i> {{session('success')}}</p>
                                                <p>User Nmae: @if(isset($userDe))
                                                                {{$userDe->email}} fasdfasd
                                                @endif
                                                </p>
                                            </div>
                                        </div>
                                    @endif

                                    @if(session('error'))
                                        <div class="col-md-12">
                                            <div class="alert alert-danger alert-dismissable" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <p class="mb-0"><i class="fa fa-info-circle"></i> {{session('error')}}</p>
                                            </div>
                                        </div>
                                    @endif
                                    @if($errors->any())
                                        <div class="col-md-12">
                                            <div class="alert alert-danger alert-dismissable" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                @foreach($errors->all() as $error)
                                                    <p class="mb-0"><i class="fa fa-info-circle"></i> {{$error}}</p>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif

                                </div>
                            <div class="wow fadeInUp" data-wow-delay="0.8s">
                                <div class="col-md-6 col-sm-6">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Your Address">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <label for="telephone">Contact Number</label>
                                    <input type="tel" class="form-control" id="contact_number" name="contact_number" placeholder="Phone Number">
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <label for="email">Blood Group</label>
                                    <input type="email" class="form-control" id="blood_group" name="blood_group" placeholder="Blood Group">
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <label for="date">Select Date</label>
                                    <input type="date" name="appointments_date" value="" class="form-control">
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <label for="Message">Additional Message</label>
                                    <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                                    <button type="submit" class="form-control" id="cf-submit" name="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection