
@extends('backend.admin.index')
@section('body')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <!-- Appointments -->
            <div class="block block-rounded invisible" data-toggle="appear">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Appointments of {{$appointments->patient_name->name}}</h3>
                </div>
                <div class="block-content block-content-full">
                    <form action="" method="post">
                        {{csrf_field()}}
                   <div class="row justify-content-center">
                       <div class="col-lg-10">
                           <div class="row">
                               <div class="col-md-6 col-sm-6">
                                   <div class="form-group">
                                       <label for="name">Name</label>
                                       <input type="text" class="form-control" id="name" name="name" value="{{$appointments->name}}" placeholder="Full Name">
                                       <span class="text-danger">{{$errors->first('name')}}</span>
                                   </div>
                               </div>
                               <div class="col-md-6 col-sm-6">
                                   <div class="form-group">
                                       <label for="address">Address</label>
                                       <input type="text" class="form-control" id="address" name="address" value="{{$appointments->address}}" placeholder="Your Address">
                                       <span class="text-danger">{{$errors->first('address')}}</span>
                                   </div>
                               </div>
                               <div class="col-md-6 col-sm-6">
                                   <div class="form-group">
                                       <label for="telephone">Contact Number</label>
                                       <input type="tel" class="form-control" id="contact_number" name="contact_number" value="{{$appointments->contact_number}}" placeholder="Phone Number">
                                       <span class="text-danger">{{$errors->first('contact_number')}}</span>
                                   </div>
                               </div>

                               <div class="col-md-6 col-sm-6">
                                   <div class="form-group">
                                       <label for="email">Email</label>
                                       <input type="email" class="form-control" id="email" name="email" value="{{$appointments->email}}" placeholder="Your Email">
                                       <span class="text-danger">{{$errors->first('email')}}</span>
                                   </div>
                               </div>
                               <div class="col-md-6 col-sm-6">
                                   <div class="form-group">
                                       <label for="email">Blood Group</label>
                                       <input type="text" class="form-control" id="blood_group" name="blood_group" value="{{$appointments->blood_group}}" placeholder="Blood Group">
                                       <span class="text-danger">{{$errors->first('blood_group')}}</span>
                                   </div>
                               </div>
                               <div class="col-md-6 col-sm-6">
                                   <div class="form-group">
                                       <label class="d-block">Gender</label>
                                       <div class="custom-control custom-radio custom-control-inline custom-control-primary">
                                           <input type="radio" class="custom-control-input" id="example-radio-custom-inline1" value="male" name="gender" @if($appointments->gender == 'male') checked @endif>
                                           <label class="custom-control-label" for="example-radio-custom-inline1">Male</label>
                                       </div>
                                       <div class="custom-control custom-radio custom-control-inline custom-control-primary">
                                           <input type="radio" class="custom-control-input" id="example-radio-custom-inline2" value="female" name="gender" @if($appointments->gender == 'female') checked @endif>
                                           <label class="custom-control-label" for="example-radio-custom-inline2">Female</label>
                                       </div>
                                       <div class="custom-control custom-radio custom-control-inline custom-control-primary">
                                           <input type="radio" class="custom-control-input" id="example-radio-custom-inline3" value="others" name="gender" @if($appointments->gender == 'others') checked @endif>
                                           <label class="custom-control-label" for="example-radio-custom-inline3">Others</label>
                                       </div>
                                       <span class="text-danger">{{$errors->first('gender')}}</span>
                                   </div>
                               </div>

                               <div class="col-md-4 col-sm-6">
                                   <div class="form-group">
                                       <label for="date">Select Date</label>
                                       <input type="date" name="appointments_date" value="{{$appointments->appointments_date}}" class="form-control">
                                       <span class="text-danger">{{$errors->first('appointments_date')}}</span>
                                   </div>
                               </div>
                               <div class="col-md-8 col-sm-8">
                                   <div class="form-group">
                                       <label for="Message">Appointments For</label>
                                       <textarea class="form-control"  id="appointments_for" name="appointments_for"  placeholder="Appointments For">{{$appointments->appointments_for}}</textarea>
                                       <span class="text-danger">{{$errors->first('appointments_for')}}</span>
                                   </div>
                               </div>
                               <div class="col-md-4 col-sm-4">
                                   <div class="form-group">
                                       <label for="status">Appointment Forward to Doctor</label>
                                       <select name="status" class="form-control" id="">
                                           <option value="active" @if($appointments->status == 'active') selected @endif>Yes</option>
                                           <option value="inactive" @if($appointments->status == 'inactive') selected @endif>No</option>
                                       </select>
                                       <span class="text-danger">{{$errors->first('status')}}</span>
                                   </div>
                               </div>
                               <div class="col-md-4 col-sm-4">
                                   <div class="form-group">
                                       <label for="status">Department</label>
                                       <select name="depart" class="form-control" id="">
                                           <option value="general" @if($appointments->depart == 'general') selected @endif>General OPD</option>
                                           <option value="cardiology" @if($appointments->depart == 'cardiology') selected @endif>Cardiology</option>
                                           <option value="ent" @if($appointments->depart == 'ent') selected @endif>ENT </option>
                                           <option value="skin" @if($appointments->depart == 'skin') selected @endif>Skin </option>
                                           <option value="family_planning" @if($appointments->depart == 'family_planning') selected @endif>Family Planning </option>
                                       </select>
                                       <span class="text-danger">{{$errors->first('depart')}}</span>
                                   </div>
                               </div>
                               <div class="col-md-8 col-sm-12">
                                 <div class="form-group">
                                    <div class="form-group">
                                        <label for="Message">Additional Message</label>
                                        <textarea class="form-control" rows="5" id="message" name="message"  placeholder="Message">{{$appointments->message}}</textarea>
                                        <span class="text-danger">{{$errors->first('message')}}</span>
                                    </div>
                                 </div>
                               </div>
                               <div class="col-md-4">
                                 <div class="form-group">
                                    <div class="form-group">
                                       <button type="submit" class="btn btn-primary">Update Appointment</button>
                                    </div>
                                 </div>
                               </div>
                           </div>
                       </div>
                   </div>
                    </form>
                </div>
            </div>
            <!-- END Payments -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection
