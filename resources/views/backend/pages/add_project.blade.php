@extends('backend.backend_dashboard')
@section('main')
@section('title')
    Add Project || Crystalo
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">


    <div class="row profile-body">
        <div class="col-md-12 col-xl-12 middle-wrapper">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Add project </h6>
                        <form method="post" action="{{ route('store.project') }}" id="myForm"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">project Name </label>
                                        <input type="text" name="project_name" class="form-control" required>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">project Head </label>
                                        <input type="text" name="project_head" class="form-control" required>
                                    </div>
                                </div><!-- Col -->


                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Price Value </label>
                                        <input type="text" name="price_value" class="form-control" required>
                                    </div>
                                </div><!-- Col -->


                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Project Year</label>
                                        <input type="text" name="project_year" class="form-control" required>
                                    </div>
                                </div><!-- Col -->


                                <div class="col-sm-4">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Main Thumbnail </label>
                                        <input type="file" name="project_thumbnail" class="form-control" required
                                            onChange="mainThumb(this)">

                                        <img src="{{ url('upload/no_image.jpg') }}" style="width: 80px; height: 80px;"
                                            id="mainThumbnail">

                                    </div>
                                </div><!-- Col -->



                                <div class="col-sm-4">
                                    <div class="form-group mb-3">
                                        <label class="form-label">First Image </label>
                                        <input type="file" name="image_1" class="form-control" required
                                            onChange="photo1(this)">
                                        <img src="{{ url('upload/no_image.jpg') }}" style="width: 80px; height: 80px;"
                                            id="image1">
                                    </div>
                                </div><!-- Col -->


                                <div class="col-sm-4">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Second Image </label>
                                        <input type="file" name="image_2" class="form-control" required
                                            onChange="photo2(this)">
                                        <img src="{{ url('upload/no_image.jpg') }}" style="width: 80px; height: 80px;"
                                            id="image2">
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Location</label>
                                        <input type="text" name="location" class="form-control" required>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Project Video</label>
                                        <input type="text" name="project_video" class="form-control" required>
                                    </div>
                                </div><!-- Col -->
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="form-label">Square Meters</label>
                                        <input type="text" name="square_meters" class="form-control" required>
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Description</label>

                                    <textarea name="description" class="form-control" required rows="10"></textarea>

                                </div>
                            </div><!-- Col -->
                            <hr>
                            <div class="mb-3">
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="category" value="Modern" class="form-check-input"
                                        id="radioModern">
                                    <label class="form-check-label" for="radioModern">
                                        Modern
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="category" value="Contemporary"
                                        class="form-check-input" id="radioContemporary">
                                    <label class="form-check-label" for="radioContemporary">
                                        Contemporary
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="category" value="Traditional"
                                        class="form-check-input" id="radioTraditional">
                                    <label class="form-check-label" for="radioTraditional">
                                        Traditional
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="category" value="Retreat" class="form-check-input"
                                        id="radioRetreat">
                                    <label class="form-check-label" for="radioRetreat">
                                        Retreat
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit </button>


                        </form>

                    </div>
                </div>



            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('#myForm').validate({
            rules: {
                project_name: {
                    required: true,
                },
                project_head: {
                    required: true,
                },
                project_year: {
                    required: true,
                },
                project_video: {
                    required: true,
                },
                location: {
                    required: true,
                },
                square_meters: {
                    required: true,
                },
                description: {
                    required: true,
                },
            },
            messages: {
                project_name: {
                    required: 'Please Enter project Name',
                },
                project_head: {
                    required: 'Please Enter project head',
                },
                project_year: {
                    required: 'Please Enter project year',
                },
                project_video: {
                    required: 'Please Enter project video',
                },
                location: {
                    required: 'Please Enter project location',
                },
                square_meters: {
                    required: 'Please Enter square meters',
                },
                description: {
                    required: 'Please Describe the project',
                },
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            },
        });
    });
</script>
<script type="text/javascript">
    function mainThumb(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#mainThumbnail').attr('src', e.target.result).width(80).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script type="text/javascript">
    function photo1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#image1').attr('src', e.target.result).width(80).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script type="text/javascript">
    function photo2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#image2').attr('src', e.target.result).width(80).height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection
