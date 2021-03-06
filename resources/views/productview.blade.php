@extends('layouts.layout')
@section('title') Product @endsection
@section('main_content')
    <br>



    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Book Control Panel</div>
                    <div class="card-body" style="background-color: white; text-align: center">
                        Welcome to Book Edit Panel !!!
                        <br>
                        <br>
                        <a  class="btn btn-warning" style="text-decoration: none" href="{{route('order-view')}}">Order Panel</a>

                        <a  class="btn btn-primary" style="text-decoration: none" href="{{route('admin-view')}}">Admin Panel</a>

                        <a  class="btn btn-success" style="text-decoration: none" href="{{route('product-view')}}">Book Panel</a>

                        <a  class="btn btn-info" style="text-decoration: none" href="{{route('review-view')}}">Review Panel</a>




                    </div>


                </div>
            </div>
        </div>
    </div>
<div class="container">
    <h1 class="display-5">Books</h1>
    <hr>
    <div>
        <a class="btn btn-success" style="text-decoration: none" href="{{route('addproduct')}}">Add new book</a>
    </div>

    @if(session()->get('success'))
        <br>
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <br>

</div>
            <div class="container">
        <table class="table table-striped table-bordered">
            <thead class="table-success">
            <tr style="background-color: white">
                <td>#</td>
                <td>Image Path</td>
                <td>Title</td>
                <td>Description</td>
                <td>Price</td>
                <td colspan = 2>Actions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr style="background-color: white">
                    <td>{{$product['id']}}</td>
                    <td>{{$product['imagePath']}}</td>
                    <td>{{$product['title']}}</td>
                    <td>{{$product['description']}}</td>
                    <td>${{$product['price']}}</td>
                    <td>
                        <a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('products.destroy', $product->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


    <br>

    <br>





@endsection
