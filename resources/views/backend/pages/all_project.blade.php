@extends('backend.backend_dashboard')
@section('main')
@section('title')
    All Projects || Crystalo
@endsection
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{ route('add.project') }}" class="btn btn-inverse-info">Add Project</a>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Projects</h6>

                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>Sl </th>
                                    <th>Image </th>
                                    <th>Name </th>
                                    <th>Head </th>
                                    <th>Year</th>
                                    <th>Price</th>
                                    <th>Location</th>
                                    <th>Meters</th>
                                    <th>Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($project as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><img src="{{ !empty($item->project_thumbnail) ? asset('upload/project_images/' . $item->project_thumbnail) : asset('upload/no_image.jpg') }}"
                                                style="width:70px; height:40px;"> </td>
                                        <td>{{ $item->project_name }}</td>
                                        <td>{{ $item->project_head }}</td>
                                        <td>{{ $item->project_year }}</td>
                                        <td>${{ $item->price_value }}</td>
                                        <td>{{ $item->location }}</td>
                                        <td>{{ $item->square_meters }}</td>
                                        <td>
                                            <a href="{{ route('edit.project', $item->id) }}"
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
