@extends('master.admin.master')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">All Unit Info</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                        <table id="example" class="display" style="min-width: 845px">
                            <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Unit Name</th>
                                <th>Unit Code</th>
                                <th>Unit Description</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody >
                            @foreach($units as $unit)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$unit->name}}</td>
                                    <td>{{$unit->code}}</td>
                                    <td>{{$unit->description}}</td>
                                    <td>{{$unit->status == 1? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        <a href="{{route('unit.edit', ['id' => $unit->id])}}" class="btn btn-success">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <a href="{{route('unit.delete', ['id' => $unit->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this..')">
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
