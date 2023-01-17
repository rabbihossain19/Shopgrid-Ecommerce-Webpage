@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Brand Info</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                        <table id="example" class="display" style="min-width: 845px">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Brand Name</th>
                                <th>Brand Description</th>
                                <th>Brand Image</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody >
                            @foreach($brands as $brand)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$brand->name}}</td>
                                    <td>{{$brand->description}}</td>
                                    <td><img src="{{asset($brand->image)}}" alt="" height="50" width="40"/></td>
                                    <td>{{$brand->status == 1? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        <a href="{{route('brand.edit', ['id' => $brand->id])}}" class="btn btn-success">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <a href="{{route('brand.delete', ['id' => $brand->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this..')">
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
