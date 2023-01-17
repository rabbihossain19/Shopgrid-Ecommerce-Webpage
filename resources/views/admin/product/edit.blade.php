@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Product Form</h4>
                </div>
                <hr/>
                <div class="card-body">
                    <div class="basic-form">
                        <h5 class="text-center text-success">{{Session::get('message')}}</h5>
                        <form action="{{route('product.update', ['id' => $product->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Category Name</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="category_id" onchange="getSubcategory(this.value)">
                                        <option value="">-- select Product Category --</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}"{{$category->id == $product->category_id ? 'selected' : ''}}>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">SubCategory Name</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="sub_category_id" id="subCategoryId">
                                        <option value="">-- select Product Sub Category --</option>
                                        @foreach($sub_categories as $sub_category)
                                            <option value="{{$sub_category->id}}" {{$sub_category->id == $product->sub_category_id ? 'selected' : ''}}>{{$sub_category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Brand Name</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="brand_id">
                                        <option value="">-- select Product Brand --</option>
                                        @foreach($brands as $brand)
                                            <option value="{{$brand->id}}" {{$brand->id == $product->brand_id ? 'selected' : ''}}>{{$brand->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Unit Name</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="unit_id">
                                        <option value="">-- select Product Unit --</option>
                                        @foreach($units as $unit)
                                            <option value="{{$unit->id}}" {{$unit->id == $product->unit_id ? 'selected' : ''}}>{{$unit->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Product Name</label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{$product->name}}" class="form-control" required name="name" placeholder="Product Name"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Product Code</label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{$product->code}}" class="form-control" required name="code" placeholder="Product Code"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Product SKU</label>
                                <div class="col-sm-10">
                                    <input type="number" value="{{$product->sku}}" class="form-control" required name="sku" placeholder="Product SKU"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Product Price</label>
                                <div class="col-sm-10">
                                    <input type="number" value="{{$product->regular_price}}" placeholder="Regular Price" name="regular_price" class="form-control"/>
                                    <input type="number" value="{{$product->selling_price}}" placeholder="Selling Price" name="selling_price" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Product short Description</label>
                                <div class="col-sm-10">
                                    <textarea name="short_description" class="form-control" placeholder="Product short Description">{{$product->short_description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Product Long Description</label>
                                <div class="col-sm-10">
                                    <textarea name="long_description" class="form-control summernote" placeholder="Product Long Description">{{$product->long_description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Product Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control-file" name="image">
                                    <img src="{{asset($product->image)}}" alt="" width="60" height="40"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Product Other Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control-file" name="other_image[]" multiple/>
                                    @foreach($product->otherImages as $otherImage)
                                        <img src="{{asset($otherImage->image)}}" alt="" height="40" width="60" style="padding-left:10px; "/>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2">Publication Status</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <label class="radio-inline">
                                            <input type="radio" {{$product->status == 1 ? 'checked' : ''}} name="status" value="1"> Published
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" {{$product->status == 0 ? 'checked' : ''}} name="status" value="0"> Unpublished
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-secondary">Update New Product</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function getSubcategory(id) {
            $.ajax({
                type: "GET",
                url: "{{url('/get-sub-category-by-category')}}",
                data: {id: id},
                dataType: "JSON",
                success: function (response) {
                    var option = '';
                    option += '<option value="">-- select Product Sub Category --</option>';
                    $.each(response, function (key, value) {
                        option += '<option value=" '+value.id+' "> '+value.name+' </option>';
                    })
                    var subCategorySelect = $('#subCategoryId');
                    subCategorySelect.empty();
                    subCategorySelect.append(option);
                }
            });
        }
    </script>
@endsection
