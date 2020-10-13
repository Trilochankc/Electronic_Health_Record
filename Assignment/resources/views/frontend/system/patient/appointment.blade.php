
@extends('frontend.system.patient.index')
@section('body')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <!-- Patients -->
            <div class="block block-rounded invisible" data-toggle="appear">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Your Appointment List</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="table-responsive">
                        <table class="table table-bordered table-vcenter mb-0">
                            <thead class="thead-light">
                            <tr>
                                <th style="width: 100px;">S.N</th>
                                <th>Appointment Date</th>
                                <th>Report</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($appointments as $key=>$appointment)
                            <tr>
                                <td>
                                    <a class="font-w600" href="javascript:void(0)">{{++$key}}</a>
                                </td>
                                <td>
                                    <strong>{{date_format($appointment->created_at,'d-M-Y')}}</strong>
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-light" href="{{url('view-report')}}">
                                        <i class="fa fa-heartbeat text-danger mr-1"></i>View Medical Report
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
