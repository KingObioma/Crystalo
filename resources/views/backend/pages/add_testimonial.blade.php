@extends('backend.backend_dashboard')
@section('main')
@section('title')
    Add Testimonial || Crystalo
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

                        <h6 class="card-title">Add Testimonial </h6>

                        <form method="POST" action="{{ route('store.testimonial') }}" class="forms-sample"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"> Name </label>
                                <input type="text" name="name" class="form-control ">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"> Position </label>
                                <input type="text" name="position" class="form-control ">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"> Message </label>
                                <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tentimonial Photo </label>
                                <input class="form-control" name="photo" type="file" onChange="mainThumb(this)"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"> </label>
                                <img id="mainThumbnail" class="wd-80 rounded-circle"
                                    src="{{ url('upload/no_image.jpg') }}" alt="profile">
                            </div>

                            <button type="submit" class="btn btn-primary me-2">Submit</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



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
