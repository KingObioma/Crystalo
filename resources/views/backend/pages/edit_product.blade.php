@extends('backend.backend_dashboard')
@section('main')
@section('title')
    Edit Product || Crystalo
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<div class="page-content">


    <div class="row profile-body">
        <div class="col-md-12 col-xl-12 middle-wrapper">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Edit Product </h6>
                        <form method="post" action="{{ route('update.product') }}" id="myForm"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="id">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Product Name </label>
                                        <input type="text" value="{{ $product->name }}" name="name" class="form-control" required>
                                    </div>
                                </div><!-- Col -->

                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Product Photo</label>
                                        <input type="file" name="photo" class="form-control"                                   onChange="mainThumb(this)">
                                    </div>
                                </div><!-- Col -->

                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Price Value </label>
                                        <input type="text" value="{{ $product->price_value }}" name="price_value" class="form-control" required>
                                    </div>
                                </div><!-- Col -->

                                <div class="col-sm-6">
                                    <div class="form-group mb-3">
                                        <img src="{{ !empty($product->photo) ? asset('upload/product_images/' . $product->photo) : asset('upload/no_image.jpg') }}"
                                            style="width:80px;height:80px" alt="Product Image" id="mainThumbnail">
                                    </div>
                                </div><!-- Col -->

                                <div class="col-sm-6" style="margin-top: 25px;">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Expected Delivery</label>
                                        <input type="text" value="{{ $product->expected_delivery }}" name="expected_delivery" class="form-control" required>
                                    </div>
                                </div><!-- Col -->
                            </div><!-- Row -->

                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Short Description</label>

                                    <textarea name="short_description" class="form-control" required rows="4">{{ $product->short_description }}</textarea>

                                </div>
                            </div><!-- Col -->

                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label class="form-label">Long Description</label>

                                    <textarea name="long_description" class="form-control" required rows="8">{{ $product->long_description }}</textarea>

                                </div>
                            </div><!-- Col -->
                            <hr>
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
@endsection
