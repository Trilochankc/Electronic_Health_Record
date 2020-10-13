
@extends('frontend.system.doctor.index')
@section('body')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <!-- Patients -->
            <div class="block block-rounded invisible" data-toggle="appear">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Add Report for {{$patients->patient_name->name}}</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-8 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input disabled type="text" class="form-control" id="name" name="name" value="{{$patients->name}}" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Blood Group</label>
                                        <input disabled type="text" class="form-control" id="blood_group" name="blood_group" value="{{$patients->blood_group}}" placeholder="Blood Group">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Appointments Date</label>
                                        <input disabled type="text" class="form-control" id="blood_group" name="blood_group" value="{{$patients->appointments_date}}" placeholder="Blood Group">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Gender</label>
                                        <input disabled type="text" class="form-control" id="blood_group" name="blood_group" value="{{$patients->gender}}" placeholder="Blood Group">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="Message">Appointments For</label>
                                        <textarea disabled class="form-control"  id="appointments_for" name="appointments_for"  placeholder="Subject">{{$patients->appointments_for}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="Message">Additional Message</label>
                                        <textarea disabled class="form-control"  id="message" name="message"  placeholder="Subject">{{$patients->message}}</textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form action=" " method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="Message">Report Title</label>
                                            <input type="text" class="form-control" id="report_title" name="report_title" value="{{old('report_title')}}" placeholder="Report Title">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="Message">Report Details</label>
                                            <textarea class="form-control"  id="Details" name="Details"  placeholder="Subject">{{old('Details')}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12">
                                        <div class="form-group">
                                            <label for="report">Add Report File</label>
                                            <input type="file" class="form-control" id="report" name="report">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Update Report</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END Patients -->
        </div>
        <!-- END Page Content -->
        <!-- Page Content -->
        <div class="content">
            <!-- Patients -->
            <div class="block block-rounded invisible" data-toggle="appear">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Al Report of {{$patients->patient_name->name}}</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="table-responsive">
                        <table class="table table-bordered table-vcenter mb-0">
                            <thead class="bg-danger-lighter">
                            <tr>
                                <th style="width: 100px;">S.N</th>
                                <th>Report Title</th>
                                <th>Submit Date</th>
                                <th>Report Details</th>
                                <th>Report</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($patients_reports as $key=>$patient)
                                <tr>
                                    <td>
                                        {{++$key}}
                                    </td>
                                    <td>
                                        <strong>{{$patient->report_title}}</strong>
                                    </td>
                                    <td>
                                        <strong>{{$patient->created_at}}</strong>
                                    </td>
                                    <td>
                                        <strong>{{$patient->Details}}</strong>
                                    </td>
                                    <td>
                                        @if($patient->report == null)
                                            <a class="btn btn-sm btn-light" href="#">
                                                <i class="fa fa-heartbeat text-danger mr-1"></i> Report Not available
                                            </a>
                                            @else
                                        <a class="btn btn-sm btn-light" href="{{url('public/uploads/report/'.$patient->report)}}" target="_blank">
                                            <i class="fa fa-heartbeat text-danger mr-1"></i> View Report
                                        </a>
                                            @endif
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
