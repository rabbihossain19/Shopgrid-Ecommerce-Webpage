@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Product Detail Info</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>Product Id</th>
                                <td>{{$product->id}}</td>
                            </tr>
                            <tr>
                                <th>Product Name</th>
                                <td>{{$product->name}}</td>
                            </tr>
                            <tr>
                                <th>Product Code</th>
                                <td>1</td>
                            </tr>
                            <tr>
                                <th>Product Category Name</th>
                                <td>{{$product->category_id}}</td>
                            </tr>
                            <tr>
                                <th>Product Sub Category Name</th>
                                <td>{{$product->subCategory_id}}</td>
                            </tr>
                            <tr>
                                <th>Product Brand Name</th>
                                <td>{{$product->brand->name}}</td>
                            </tr>
                            <tr>
                                <th>Product Unit Name</th>
                                <td>{{$product->unit->name}}</td>
                            </tr>
                            <tr>
                                <th>Product Stock Amount</th>
                                <td>{{$product->sku}}</td>
                            </tr>
                            <tr>
                                <th>Product Regular Price</th>
                                <td>{{$product->regular_price}}</td>
                            </tr>

                            <tr>
                                <th>Product Selling Price</th>
                                <td>{{$product->selling_price}}</td>
                            </tr>
                            <tr>
                                <th>Product Short Description</th>
                                <td>{{$product->short_description}}</td>
                            </tr>

                            <tr>
                                <th>Product Long Description</th>
                                <td>{!! $product->long_description !!}</td>
                            </tr>
                            <tr>
                                <th>Product Feature Image</th>
                                <td><img src="{{asset($product->image)}}" alt="" height="180" width="150"/></td>
                            </tr>
                            <tr>
                                <th>Product Other Image</th>
                                <td>
                                    @foreach($product->otherImages as $otherImage)
                                    <img src="{{asset($otherImage->image)}}" alt="" height="100" width="100"/>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>Product Publication Status</th>
                                <td>{{$product->status == 1 ? 'Published' : 'Unpublished'}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
