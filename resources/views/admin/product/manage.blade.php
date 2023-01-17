@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Product Info</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                        <table id="example" class="display" style="min-width: 845px">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Category Name</th>
                                <th>Brand Name</th>
                                <th>Product Name</th>
                                <th>Selling Price</th>
                                <th>Product SKU</th>
                                <th>Product Image</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody >
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td>{{$product->brand->name}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->selling_price}}</td>
                                    <td>{{$product->sku}}</td>
                                    <td><img src="{{asset($product->image)}}" alt="" height="50" width="40"/></td>
                                    <td>{{$product->status == 1? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        <a href="{{route('product.detail', ['id' => $product->id])}}" class="btn btn-info" title="View Product Detail">
                                            <i class="fa fa-book"></i>
                                        </a>
                                        <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-success" title="Edit Product">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <a href="{{route('product.delete', ['id' => $product->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this..')" title="Delete Product">
                                            <i class="fa fa-trash"></i>
                                        </a>
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
@endsection
