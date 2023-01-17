@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Brand Form</h4>
                </div>
                <hr/>
                <div class="card-body">
                    <div class="basic-form">
                        <h5 class="text-center text-success">{{Session::get('message')}}</h5>
                        <form action="{{route('brand.update', ['id' => $brand->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Brand Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required value="{{$brand->name}}" name="name" placeholder="Brand Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Brand Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" required class="form-control" placeholder="Brand Description">{{$brand->description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Brand image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="image">
                                    <img src="{{asset($brand->image)}}" alt="" height="60" width="50"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2">Publication Status</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <label class="radio-inline">
                                            <input type="radio" name="status" value="1" {{$brand->status == 1 ? 'checked' : ''}}> Published
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="status" value="0" {{$brand->status == 0 ? 'checked' : ''}}> Unpublished
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-secondary">Update Brand Info</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
