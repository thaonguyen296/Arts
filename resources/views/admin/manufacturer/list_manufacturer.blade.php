@extends('admin/nav')

@section('content')

    <div class="col-lg-12">
        <h1 class="page-header">Manufacturer
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
        @foreach($manufacturer as $manufacturer)
            <tr class="odd gradeX" align="center">
                <td>{{ $manufacturer->id }}</td>
                <td>{{ $manufacturer->name }}</td>
                <td>{{ $manufacturer->created_at }}</td>
                <td>{{ $manufacturer->updated_at }}</td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                    <a href="#" onclick="event.preventDefault();
                       document.getElementById('delete_manufacturer').submit();"> Delete</a>
                    <form id="delete_manufacturer" action="{{url('/admin/delete_manufacturer/'.$manufacturer->id)}}" method="post" style="display: none;">
                        {{csrf_field()}}
                    </form>
                </td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{url ('/admin/edit_manufacturer/'.$manufacturer->id)}}">Edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection