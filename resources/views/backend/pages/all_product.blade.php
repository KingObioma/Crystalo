@extends('backend.backend_dashboard')
@section('main')
@section('title')
    All Products || Crystalo
@endsection
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{ route('add.product') }}" class="btn btn-inverse-info">Add Product</a>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Products</h6>

                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>Sl </th>
                                    <th>Image </th>
                                    <th>Name </th>
                                    <th>Price</th>
                                    <th>Delivery</th>
                                    <th>Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td><img src="{{ !empty($item->photo) ? asset('upload/product_images/' . $item->photo) : asset('upload/no_image.jpg') }}"
                                                style="width:70px; height:40px;"> </td>
                                        <td>{{ $item->name }}</td>
                                        <td>${{ $item->price_value }}.00</td>
                                        <td>{{ $item->expected_delivery }}</td>
                                        <td>
                                            <a href="{{ route('edit.product', $item->id) }}"
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
