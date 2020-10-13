
@extends('backend.admin.index')
@section('body')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <!-- Appointments -->
            <div class="block block-rounded invisible" data-toggle="appear">
                <div class="block-header block-header-default">
                    <h3 class="block-title">List of Users</h3>
                </div>
                <div class="block-content block-content-full">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                            <thead class="bg-danger-lighter">
                            <tr>
                                <th>S.N</th>
                                <th>Image</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Contact Number</th>
                                <th>Address</th>
                                <th>Blood Group</th>
                                <th>User Role</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $key=>$user)
                            <tr>
                                <td>
                                    {{++$key}}
                                </td>
                                <td>
                                    @if($user->profile == null)
                                        <img class="img-avatar" src="{{asset('public/server/assets/photos/avatar15.jpg')}}" alt="">
                                    @else
                                        <img class="img-avatar" src="{{asset('public/uploads/profile/'.$user->profile)}}" alt="">
                                    @endif
                                </td>
                                <td>
                                    {{$user->name}}
                                </td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->contact_number}}</td>
                                <td>{{$user->address}}</td>
                                <td>{{$user->blood_group}}</td>
                                <td>{{$user->user_type}}</td>
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
