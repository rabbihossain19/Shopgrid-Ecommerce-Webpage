@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Sub Category Form</h4>
                </div>
                <hr/>
                <div class="card-body">
                    <div class="basic-form">
                        <h5 class="text-success text-center">{{Session::get('message')}}</h5>
                        <form action="{{route('sub-category.update', ['id' => $sub_category->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Category Name</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="category_id">
                                        <option value="">--Select Category--</option>
                                        <option>Category Name</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" {{$sub_category->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Sub Category Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{$sub_category->name}}" name="name" placeholder="Sub Category Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Sub Category Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" class="form-control"  placeholder="Sub Category Description">{{$sub_category->description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Sub Category Image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="image">
                                    <img src="{{asset($sub_category->image)}}" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2">Publication Status</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <label class="radio-inline">
                                            <input type="radio" name="status" value="1" {{$sub_category->status == 1 ? 'checked' : ''}}> Published
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="status" value="0" {{$sub_category->status == 0 ? 'checked' : ''}}> Unpublished
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-secondary">Update Sub Category</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
