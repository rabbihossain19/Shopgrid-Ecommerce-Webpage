@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Category Form</h4>
                </div>
                <hr/>
                <div class="card-body">
                    <div class="basic-form">
                        <h5 class="text-center text-success">{{Session::get('message')}}</h5>
                        <form action="{{route('category.new')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Category Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="name" placeholder="Category Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Category Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" required class="form-control" placeholder="Category Description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Category Image</label>
                                <div class="col-sm-10">
                                    <input type="file" required class="form-control" name="image">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2">Publication Status</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <label class="radio-inline">
                                            <input type="radio" name="status" value="1" checked> Published
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="status" value="0"> Unpublished
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-secondary">Create New category</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
