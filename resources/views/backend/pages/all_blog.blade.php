@extends('backend.backend_dashboard')
@section('main')
@section('title')
    All Blogs || Crystalo
@endsection
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{ route('add.blog') }}" class="btn btn-inverse-info">Add Blog</a>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Blogs</h6>

                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>Sl </th>
                                    <th>Image </th>
                                    <th>Title </th>
                                    <th>Tags </th>
                                    <th>Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><img src="{{ !empty($item->blog_thumbnail) ? asset('upload/blog_images/' . $item->blog_thumbnail) : asset('upload/no_image.jpg') }}"
                                                style="width:70px; height:40px;"> </td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->tags }}</td>
                                        <td>
                                            <a href="{{ route('edit.blog', $item->id) }}"
                                                class="btn btn-inverse-warning" title="Edit"> <i
                                                    data-feather="edit"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
