
@extends('frontend.layouts.master')
@section('content')
    <!-- MAKE AN APPOINTMENT -->
    <section id="appointment" data-stellar-background-ratio="3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
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
                </div>

                <div class="col-md-6 col-sm-6">
                    <img src="{{asset('public/frontend/images/appointment-image.jpg')}}" class="img-responsive" alt="">
                </div>

                <div class="col-md-4 col-sm-4" id="appointment_login">
                    <!-- CONTACT FORM HERE -->
                    <div class="appointment_login">
                        <form method="POST" action="{{ route('login') }}">
                            <!-- SECTION TITLE -->
                            <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                <h2>Login !</h2>
                            </div>
                            @csrf
                            <div class="py-3">
                                <div class="form-group">
                                    <label for="">User Id</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="login-remember" name="login-remember">
                                        <label class="custom-control-label font-w400" for="login-remember">Remember Me</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 col-xl-5">
                                    <button type="submit" class="btn btn-block btn-primary">
                                        <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection