@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Unit Form</h4>
                </div>
                <hr/>
                <div class="card-body">
                    <div class="basic-form">
                        <h5 class="text-center text-success">{{Session::get('message')}}</h5>
                        <form action="{{route('unit.update', ['id' => $unit->id])}}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Unit Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="name" value="{{$unit->name}}" placeholder="Unit Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Unit Code</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required name="code" value="{{$unit->name}}" placeholder="Unit Code">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Unit Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description" required class="form-control" placeholder="Unit Description">{{$unit->description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2">Publication Status</label>
                                <div class="col-sm-10">
                                    <div class="form-group">
                                        <label class="radio-inline">
                                            <input type="radio" name="status" value="1" {{$unit->status == 1 ? 'checked' : ''}}> Published
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="status" value="0" {{$unit->status == 0 ? 'checked' : ''}}> Unpublished
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-secondary">Update Unit Info</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
