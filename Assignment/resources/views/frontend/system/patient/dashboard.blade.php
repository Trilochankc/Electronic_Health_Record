
@extends('frontend.system.patient.index')
@section('body')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <!-- Overview -->
            <div class="row py-4">
                @if($users->contact_number ==null)
                <div class="font-size-h4 font-w600 text-danger">Please update your Profile possible before doing an appointment <a class="text-primary" href="{{url('patient/'.$users->id.'/edit-profile')}}">
                        <i class="fa fa-fw fa-user-md"></i>Edit Profile
                    </a></div>
                    @endif
            </div>
            <div class="row invisible" data-toggle="appear">
                <div class="col-md-4">
                    <a class="block block-rounded block-link-shadow" href="{{url('patient/make-an-appointment')}}">
                        <div class="block-content block-content-full">
                            <div class="py-4 text-center">
                                <div class="mb-3">
                                    <i class="far fa-calendar fa-3x text-xinspire"></i>
                                </div>
                                <div class="font-size-h4 font-w600">Make New Appointments</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="block block-rounded block-link-shadow" href="{{url('patient/new-appointment-list')}}">
                        <div class="block-content block-content-full">
                            <div class="py-4 text-center">
                                <div class="mb-3">
                                    <i class="fa fa-user-md fa-3x text-xsmooth"></i>
                                </div>
                                <div class="font-size-h4 font-w600">View Your New Appointments</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="block block-rounded block-link-shadow" href="{{url('patient/chat-with-hospital')}}">
                        <div class="block-content block-content-full">
                            <div class="py-4 text-center">
                                <div class="mb-3">
                                    <i class="fa fa-user-md fa-3x text-xsmooth"></i>
                                </div>
                                <div class="font-size-h4 font-w600">Chat With Hospital</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- END Overview -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection
