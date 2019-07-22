@extends('admin/nav')

@section('content')

    <div class="col-lg-12">
        <h1 class="page-header">Category
            <small>List</small>
        </h1>
    </div>

    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <th>ID</th>
                <th>Name</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($category as $categories)
                <tr class="odd gradeX" align="center">
                    <td>{{ $categories->id }}</td>
                    <td>{{ $categories->name }}</td>
                    <td>{{ $categories->created_at }}</td>
                    <td>{{ $categories->updated_at }}</td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection