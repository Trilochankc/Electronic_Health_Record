
@extends('frontend.system.patient.index')
@section('body')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <!-- Patients -->
            <div class="block block-rounded invisible" data-toggle="appear">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Your's New Appointment List</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                            <thead class="text-danger-light">
                            <tr>
                                <th style="width: 100px;">S.N</th>
                                <th>Appointment Date</th>
                                <th>Appointment For</th>
                                <th>Message</th>
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
                                    <strong>{{$appointment->appointments_for}}</strong>
                                </td>
                                <td>
                                    <strong>{{$appointment->message}}</strong>
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
