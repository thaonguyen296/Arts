@extends('admin/nav')

@section('content')

    <div class="col-lg-12">
        <h1 class="page-header">User
            <small>List</small>
        </h1>
    </div>

    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Level</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr class="odd gradeX" align="center">
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->level }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection