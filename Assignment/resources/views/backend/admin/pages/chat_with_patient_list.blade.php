
@extends('backend.admin.index')
@section('body')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <!-- Appointments -->
            <div class="block block-rounded invisible" data-toggle="appear">
                <div class="block-header block-header-default">
                    <h3 class="block-title">List of Patient</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                            <thead class="bg-danger-lighter">
                            <tr>
                                <th style="width: 100px;">ID</th>
                                <th>Patient Full Name</th>
                                <th>Address</th>
                                <th>Blood Group</th>
                                <th>Chat (Message)</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $key=>$user)
                                <tr>
                                    <td>
                                        {{++$key}}
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)">{{$user->name}}</a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)">{{$user->address}}</a>
                                    </td>
                                    <td>
                                        <span class="badge badge-primary">{{$user->blood_group}}</span>
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-light m-1" href="{{url('admin/message-chat/'.$user->id.'/chat')}}">
                                            <i class="fa fa-pencil-alt text-info mr-1"></i> Message  <i class="fa fa-eye text-info mr-1"></i>View
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
