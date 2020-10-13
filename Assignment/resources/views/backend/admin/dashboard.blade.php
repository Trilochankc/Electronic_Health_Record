
@extends('backend.admin.index')
@section('body')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <!-- Overview -->
            <div class="row invisible" data-toggle="appear">
                <div class="col-md-4">
                    <a class="block block-rounded block-link-shadow" href="{{url('admin/inactive-appointments')}}">
                        <div class="block-content block-content-full">
                            <div class="py-4 text-center">
                                <div class="mb-3">
                                    <i class="far fa-calendar fa-3x text-xinspire"></i>
                                </div>
                                <div class="font-size-h4 font-w600">New Appointments</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="block block-rounded block-link-shadow" href="{{url('admin/active-appointments')}}">
                        <div class="block-content block-content-full">
                            <div class="py-4 text-center">
                                <div class="mb-3">
                                    <i class="fa fa-user-md fa-3x text-xsmooth"></i>
                                </div>
                                <div class="font-size-h4 font-w600">Forward Appointments</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="block block-rounded block-link-shadow" href="{{url('admin/user-list')}}">
                        <div class="block-content block-content-full">
                            <div class="py-4 text-center">
                                <div class="mb-3">
                                    <i class="fa fa-user-md fa-3x text-xsmooth"></i>
                                </div>
                                <div class="font-size-h4 font-w600">User List</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- END Overview -->
            <!-- Appointments -->
            <div class="block block-rounded invisible" data-toggle="appear">
                <div class="block-header block-header-default">
                    <h3 class="block-title">List of Appointments</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                            <thead class="bg-danger-lighter">
                            <tr>
                                <th style="width: 100px;">ID</th>
                                <th>Patient Full Name</th>
                                <th>Appointment Date</th>
                                <th>Address</th>
                                <th>Blood Group</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($appointments as $key=>$appointment)
                                <tr>
                                    <td>
                                        {{++$key}}
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)">{{$appointment->patient_name->name}}</a>
                                    </td>
                                    <td>
                                        {{$appointment->appointments_date}}
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)">{{$appointment->address}}</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-primary">{{$appointment->blood_group}}</span>
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-light m-1" href="{{url('admin/inactive-appointments/'.$appointment->id.'/edit')}}">
                                            <i class="fa fa-pencil-alt text-info mr-1"></i> Edit  <i class="fa fa-eye text-info mr-1"></i>View
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Payments -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection
