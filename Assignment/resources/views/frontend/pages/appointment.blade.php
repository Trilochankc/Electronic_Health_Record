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
                                <h2 class="make_appointment">Make an appointment</h2>
                            </div>
                                <div class="message">
                                    @if(session('success'))
                                        <div class="col-md-12">
                                            <div class="alert alert-success alert-dismissable" role="alert" style="background-color: #fff; color: #006d7b;">
                                                <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <p class="mb-0"><i class="fa fa-check-circle"></i> {{session('success')}}</p>
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
                                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="Full Name">
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}" placeholder="Your Address">
                                    <span class="text-danger">{{$errors->first('address')}}</span>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <label for="telephone">Contact Number</label>
                                    <input type="tel" class="form-control" id="contact_number" name="contact_number" value="{{old('contact_number')}}" placeholder="Phone Number">
                                    <span class="text-danger">{{$errors->first('contact_number')}}</span>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="Your Email">
                                    <span class="text-danger">{{$errors->first('email')}}</span>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <label for="email">Blood Group</label>
                                    <input type="text" class="form-control" id="blood_group" name="blood_group" value="{{old('blood_group')}}" placeholder="Blood Group">
                                    <span class="text-danger">{{$errors->first('blood_group')}}</span>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label class="gender">Gender</label>
                                        <select name="gender" id="" class="form-control">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="others">others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="status">Department</label>
                                        <select name="depart" class="form-control" id="">
                                            <option value="">Choose Department </option>
                                            <option value="general">General OPD</option>
                                            <option value="cardiology">Cardiology</option>
                                            <option value="ent">ENT </option>
                                            <option value="skin">Skin </option>
                                            <option value="family_planning">Family Planning </option>
                                        </select>
                                        <span class="text-danger">{{$errors->first('depart')}}</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <label for="date">Select Date</label>
                                    <input type="date" name="appointments_date" value="{{old('appointments_date')}}" class="form-control">
                                    <span class="text-danger">{{$errors->first('appointments_date')}}</span>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <label for="Message">Additional Message</label>
                                    <textarea class="form-control" rows="5" id="message" name="message"  placeholder="Message">{{old('message')}}</textarea>
                                    <span class="text-danger">{{$errors->first('message')}}</span>
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
