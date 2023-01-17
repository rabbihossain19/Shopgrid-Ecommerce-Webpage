@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Category Info</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                        <table id="example" class="display" style="min-width: 845px">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Category Name</th>
                                <th>Category Description</th>
                                <th>Category Image</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody >
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->description}}</td>
                                <td><img src="{{asset($category->image)}}" alt="" height="50" width="40"/></td>
                                <td>{{$category->status == 1? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('category.edit', ['id' => $category->id])}}" class="btn btn-success">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a href="{{route('category.delete', ['id' => $category->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this..')">
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
