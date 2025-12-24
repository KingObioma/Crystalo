@extends('backend.backend_dashboard')
@section('main')
@section('title')
    Site Settings || Crystalo
@endsection
<div class="page-content">


    <div class="row profile-body">
        <!-- left wrapper start -->

        <!-- left wrapper end -->
        <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title">Update Site Setting </h6>

                        <form id="myForm" method="POST" action="{{ route('update.site.settings') }}"
                            class="forms-sample">
                            @csrf
                            <input type="hidden" name="id" value="{{ $SiteSettings->id }}">

                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                                <input type="text" name="phone" class="form-control"
                                    value="{{ $SiteSettings->phone }}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1" class="form-label"> Email </label>
                                <input type="email" name="email" class="form-control"
                                    value="{{ $SiteSettings->email }}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1" class="form-label">Second email </label>
                                <input type="email" name="email2" class="form-control"
                                    value="{{ $SiteSettings->email2 }}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1" class="form-label">Availability Schedule</label>
                                <input type="text" name="available" class="form-control"
                                    value="{{ $SiteSettings->available }}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1" class="form-label">Office Address</label>
                                <input type="text" name="office_address" class="form-control"
                                    value="{{ $SiteSettings->office_address }}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1" class="form-label">Second Address </label>
                                <input type="text" name="office_address2" class="form-control"
                                    value="{{ $SiteSettings->office_address2 }}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1" class="form-label">Facebook </label>
                                <input type="text" name="facebook" class="form-control"
                                    value="{{ $SiteSettings->facebook }}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1" class="form-label">Twitter</label>
                                <input type="text" name="twitter" class="form-control"
                                    value="{{ $SiteSettings->twitter }}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1" class="form-label">Skype</label>
                                <input type="text" name="skype" class="form-control"
                                    value="{{ $SiteSettings->skype }}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="exampleInputEmail1" class="form-label">Linkedin</label>
                                <input type="text" name="linkedin" class="form-control"
                                    value="{{ $SiteSettings->linkedin }}">
                            </div>


                            <button type="submit" name="submit" class="btn btn-primary me-2">Save Changes </button>

                        </form>

                    </div>
                </div>




            </div>
        </div>
        <!-- middle wrapper end -->
        <!-- right wrapper start -->

        <!-- right wrapper end -->
    </div>

</div>
@endsection
