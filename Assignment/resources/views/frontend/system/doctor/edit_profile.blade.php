
@extends('frontend.system.doctor.index')
@section('body')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <!-- Patients -->
            <div class="block block-rounded invisible" data-toggle="appear">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Edit Profile</h3>
                </div>
                <div class="block-content block-content-full">
                    <form action="" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Your Full Name</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{$users->name}}" placeholder="Full Name">
                                            <span class="text-danger">{{$errors->first('name')}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Address</label>
                                            <input type="text" class="form-control" id="address" name="address" value="{{$users->address}}" placeholder="Address">
                                            <span class="text-danger">{{$errors->first('address')}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" value="{{$users->email}}" placeholder="Your Email">
                                            <span class="text-danger">{{$errors->first('email')}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="telephone">Contact Number</label>
                                            <input type="tel" class="form-control" id="contact_number" name="contact_number" value="{{$users->contact_number}}" placeholder="Phone Number">
                                            <span class="text-danger">{{$errors->first('contact_number')}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Blood Group</label>
                                            <input type="text" class="form-control" id="blood_group" name="blood_group" value="{{$users->blood_group}}" placeholder="Blood Group">
                                            <span class="text-danger">{{$errors->first('blood_group')}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label class="d-block">Gender</label>
                                            <div class="custom-control custom-radio custom-control-inline custom-control-primary">
                                                <input type="radio" class="custom-control-input" id="example-radio-custom-inline1" value="male" name="gender" @if($users->gender == 'male') checked @endif>
                                                <span class="text-danger">{{$errors->first('gender')}}</span>
                                                <label class="custom-control-label" for="example-radio-custom-inline1">Male</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline custom-control-primary">
                                                <input type="radio" class="custom-control-input" id="example-radio-custom-inline2" value="female" name="gender" @if($users->gender == 'female') checked @endif>
                                                <span class="text-danger">{{$errors->first('gender')}}</span>
                                                <label class="custom-control-label" for="example-radio-custom-inline2">Female</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline custom-control-primary">
                                                <input type="radio" class="custom-control-input" id="example-radio-custom-inline3" value="others" name="gender" @if($users->gender == 'others') checked @endif>
                                                <span class="text-danger">{{$errors->first('gender')}}</span>
                                                <label class="custom-control-label" for="example-radio-custom-inline3">Others</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Update Profile</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    @if($users->profile == null)
                                    <img class="img-avatar" src="{{asset('public/server/assets/photos/avatar15.jpg')}}" alt="">
                                    @else
                                    <img class="img-avatar" src="{{asset('public/uploads/profile/'.$users->profile)}}" alt="">
                                    @endif
                                        <label for="name">Profile Image</label>
                                    <input type="file" name="profile">
                                    <span class="text-danger">{{$errors->first('profile')}}</span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Patients -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection
