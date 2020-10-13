
@extends('frontend.system.doctor.index')
@section('body')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <!-- Patients -->
            <div class="block block-rounded invisible" data-toggle="appear">
                <div class="block-header block-header-default">
                    <h3 class="block-title">New Patients List</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                            <thead class="bg-danger-lighter">
                            <tr>
                                <th style="width: 100px;">S.N</th>
                                <th>Patient Name</th>
                                <th>Blood Group</th>
                                <th>Appointment Date</th>
                                <th>Subject</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($patients_appointment as $key=>$patient)

                            <tr>
                                <td>
                                    {{++$key}}
                                </td>
                                <td>
                                    <strong>{{$patient->name}}</strong>
                                </td>
                                <td>
                                    <strong>{{$patient->blood_group}}</strong>
                                </td>
                                <td>
                                    <strong>{{$patient->appointments_date}}</strong>
                                </td>
                                <td>
                                    <strong>{{$patient->appointments_for}}</strong>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-light" href="{{url('doctors/patient-list/'.$patient->id.'/add-report')}}">
                                        <i class="fa fa-heartbeat text-danger mr-1"></i> Add Report <i class="fa fa-eye text-danger mr-1"></i> View
                                        @if(count($patient->reportName)>0)
                                            <br> <span class="badge-primary font-size-xs">Report Already Added</span>
                                        @else
                                            @endif
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Patients -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection
