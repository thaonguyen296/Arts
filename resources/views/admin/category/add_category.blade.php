@extends('admin/nav')

@section('content')

    <div class="col-lg-12">
        <h1 class="page-header">Category
            <small>Add</small>
        </h1>
    </div>

    <div class="col-lg-7" style="padding-bottom:120px">
        <form action="{{url('/admin/add_category')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label>Category Name</label>
                <input class="form-control" name="category_name" placeholder="Please Enter Category Name" />
            </div>

            <button type="submit" class="btn btn-default">Category Add</button>
            <button type="reset" class="btn btn-default">Reset</button>
        </form>
    </div>

@endsection