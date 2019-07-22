@extends('admin/nav')

@section('content')

    <div class="col-lg-12">
        <h1 class="page-header">Product
            <small>List</small>
        </h1>
    </div>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
        <tr align="center">
            <th>ID</th>
            <th>Image</th>
            <th>Name</th>
            <th>Detail</th>
            <th>Price</th>
            <th>Manufacturer</th>
             <th>Category</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach($product as $product)
            <tr class="odd gradeX" align="center">
                <td>{{ $product->id }}</td>
                <td><img src="http://res.cloudinary.com/thaocute2906/image/upload/c_fit,h_100,w_100/{{ $product->image }}.png" alt=""></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->detail }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->manufacturer->name }}</td>
                 <td>{{ $product->category->name }}</td>
                <td>{{ $product->created_at }}</td>
                <td>{{ $product->updated_at }}</td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                    <a href="#" onclick="event.preventDefault();
                       document.getElementById('delete_product').submit();"> Delete</a>
                    <form id="delete_product" action="{{url('/admin/delete_product/'.$product->id)}}" method="post" style="display: none;">
                        {{csrf_field()}}
                    </form>
                </td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{url('/admin/edit_product/'.$product->id)}}">Edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection