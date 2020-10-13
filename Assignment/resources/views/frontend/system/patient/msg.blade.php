
@extends('frontend.system.patient.index')
@section('body')
    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <!-- Appointments -->
            <div class="block block-rounded invisible" data-toggle="appear">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Start Message</h3>
                </div>
                <div class="block-content block-content-full">
                    <form action="" method="post">
                        {{csrf_field()}}
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="block block-rounded">
                                            <!-- Chat #1 Header -->
                                            <div class="block-content block-content-full bg-primary text-center">
                                                    <img class="img-avatar img-avatar-thumb" src="{{asset('public/server/assets/photos/avatar15.jpg')}}" alt="">
                                                <p class="font-size-lg font-w600 text-white mt-3 mb-0">
                                                   Hospital
                                                </p>

                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="5" id="message" name="message"  placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Send Message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        @foreach($admin_wise_chat as $chat)
                                            @if($chat->user_type == "patient")
                                                <div class="mr-4">
                                                    <div class="d-inline-block font-w600 animated fadeIn bg-body-light border-3x px-3 py-2 mb-2 shadow-sm mw-100 border-left border-dark rounded-right">
                                                        @if($users->profile == null)
                                                            <img class="img-avatar img-avatar-thumb" width="20" src="{{asset('public/server/assets/photos/avatar15.jpg')}}" alt="">
                                                        @else
                                                            <img class="img-avatar img-avatar-thumb" width="20" src="{{asset('public/uploads/profile/'.$chat->patient_name->profile)}}" alt="">
                                                        @endif
                                                        {{$chat->message}}
                                                    </div>
                                                </div>
                                            @else
                                                <div class="text-right ml-4">
                                                    <div class="d-inline-block font-w600 animated fadeIn bg-body-light border-3x px-3 py-2 mb-2 shadow-sm mw-100 border-right border-primary rounded-left text-left">
                                                            <img class="img-avatar img-avatar-thumb" width="20" src="{{asset('public/server/assets/photos/avatar15.jpg')}}" alt="">
                                                            {{$chat->message}}
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Payments -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
@endsection
