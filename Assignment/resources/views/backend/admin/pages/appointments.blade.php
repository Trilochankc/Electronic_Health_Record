
@extends('backend.admin.index')
@section('body')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
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
                                    <a href="javascript:void(0)">{{$appointment->name}}</a>
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
