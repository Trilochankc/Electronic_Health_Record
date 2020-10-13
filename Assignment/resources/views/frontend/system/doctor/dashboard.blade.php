
@extends('frontend.system.doctor.index')
@section('body')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
                       <!-- Overview -->
            <div class="row invisible" data-toggle="appear">
                <div class="col-md-4">
                    <a class="block block-rounded block-link-shadow" href="{{url('doctors/patient-list')}}">
                        <div class="block-content block-content-full">
                            <div class="py-4 text-center">
                                <div class="mb-3">
                                    <i class="far fa-calendar fa-3x text-xinspire"></i>
                                </div>
                                <div class="font-size-h4 font-w600">New Patient Appointment</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="block block-rounded block-link-shadow" href="{{url('doctors/patient-list')}}">
                        <div class="block-content block-content-full">
                            <div class="py-4 text-center">
                                <div class="mb-3">
                                    <i class="fa fa-user-md fa-3x text-xsmooth"></i>
                                </div>
                                <div class="font-size-h4 font-w600">View All Patient</div>
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
