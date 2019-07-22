@extends('admin/nav')

@section('content')

    <div class="col-lg-12">
        <h1 class="page-header">Product
            <small>Add</small>
        </h1>
    </div>

    <div class="col-lg-7" style="padding-bottom:120px">
        <form action="{{url('/admin/add_product')}}" enctype="multipart/form-data" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label>Product Name</label>
                <input class="form-control" name="product_name" placeholder="Please Enter Product Name" />
            </div>
            <div class="form-group">
                <label>Images</label>
                <input type="file" name="image">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input class="form-control" type="number" name="price" min="1" step="any" />
            </div>
            <div class="form-group">
                <label>Detail</label>
                <textarea class="form-control" rows="5" name="detail"></textarea>
            </div>
            <div class="form-group">
                <label>Manufacturer</label>
                <select name="manufacturer_id" class="form-control" onchange="selectedOptionManufacturer();">
                    <option>Please Choose Manufacturer</option>
                    @foreach($manufacturer as $manufacturer)
                        <option value={{$manufacturer->id}}>{{$manufacturer->name}}</option>
                    @endforeach
                </select>
            </div>
             <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category_id" onchange="selectedOptionCategory();">
                    <option>Please Choose Category</option>
                    @foreach($category as $categories)
                        <option value={{$categories->id}}>{{$categories->name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-default">Category Add</button>
            <button type="reset" class="btn btn-default">Reset</button>
        </form>
    </div>

@endsection