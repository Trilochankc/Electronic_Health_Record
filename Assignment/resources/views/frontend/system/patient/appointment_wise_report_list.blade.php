
@extends('frontend.system.patient.index')
@section('body')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <!-- Patients -->
            <div class="block block-rounded invisible" data-toggle="appear">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Report's Of {{$appointments->appointments_for}}</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                            <thead class="text-danger-light">
                            <tr>
                                <th style="width: 100px;">S.N</th>
                                <th>Report Submit Date</th>
                                <th>Report Title</th>
                                <th>Message</th>
                                <th>View Report</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($reports)>0)
                            @foreach($reports as $key=>$appointment)
                                 <tr>
                                <td>
                                    <a class="font-w600" href="javascript:void(0)">{{++$key}}</a>
                                </td>
                                <td>
                                    <strong>{{date_format($appointment->created_at,'d-M-Y')}}</strong>
                                </td>
                                <td>
                                    <strong>{{$appointment->report_title}}</strong>
                                </td>
                                <td>
                                    <strong>{{$appointment->Details}}</strong>
                                </td>
                                <td>
                                    @if($appointment->report == null)
                                        <a class="btn btn-sm btn-light" href="#">
                                            <i class="fa fa-heartbeat text-danger mr-1"></i> Report Not available
                                        </a>
                                    @else
                                        <a class="btn btn-sm btn-light" href="{{url('public/uploads/report/'.$appointment->report)}}" target="_blank">
                                            <i class="fa fa-heartbeat text-danger mr-1"></i> View Report
                                        </a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                                @else
                                <tr>
                                    <td colspan="5">
                                        <div class="text-center single-item  wow fadeInUp animated animated animated animated">
                                            <div class="news-content">
                                                <h4>Appointment Wise Report Not available </h4>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endif
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
