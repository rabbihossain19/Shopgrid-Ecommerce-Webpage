@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All SubCategory Info</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                        <table id="example" class="display" style="min-width: 845px">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>SubCategory</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sub_categories as $sub_category)
                            <tr>
                                <td></td>
                                <td>{{$sub_category->category->name}}</td>
                                <td>{{$sub_category->name}}</td>
                                <td>{{$sub_category->description}}</td>
                                <td><img src="{{asset($sub_category->image)}}" alt="" height="60" width="50"/></td>
                                <td>{{$sub_category->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('sub-category.edit', ['id' => $sub_category->id])}}" class="btn btn-success">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a href="{{route('sub-category.delete', ['id' => $sub_category->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this..')">
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
