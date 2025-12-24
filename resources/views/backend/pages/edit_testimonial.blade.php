@extends('backend.backend_dashboard')
@section('main')
@section('title')
    Edit Testimonial || Crystalo
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

                        <h6 class="card-title">Edit Testimonial </h6>

                        <form method="POST" action="{{ route('update.testimonial') }}" class="forms-sample"
                            enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{ $testimonial->id }}">

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"> Name </label>
                                <input type="text" name="name" class="form-control "
                                    value="{{ $testimonial->name }}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"> Position </label>
                                <input type="text" name="position" class="form-control "
                                    value="{{ $testimonial->position }}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"> Message </label>
                                <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $testimonial->message }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Testimonial Photo </label>
                                <input class="form-control" name="photo" type="file"
                                    onChange="testimonialImage(this)">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"> </label>
                                <img id="showImage" class="wd-80 rounded-circle"
                                    src="{{ !empty($testimonial->photo) ? asset('upload/testimonials/' . $testimonial->photo) : asset('upload/no_image.jpg') }}"
                                    alt="profile">
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Save Changes </button>

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

<script type="text/javascript">
    function testimonialImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>


@endsection
