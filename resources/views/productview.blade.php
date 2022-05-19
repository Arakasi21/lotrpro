@extends('layouts.layout')
@section('title') Product @endsection
@section('main_content')

    <br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Book Control Panel</div>

                    <div class="card-body" style="background-color: white">
                        Welcome to Book Edit Panel !!!
                        <br>
                        Back to <a  style="text-decoration: none" href="{{route('admin-view')}}">Admin Panel</a>
                        <br>
                        <br>
                        <a class="btn btn-success" style="text-decoration: none" href="{{route('addproduct')}}">Add new book</a>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <br>

    <br>
    <div class="container">
        <table class="table table-striped table-bordered">
            <thead class="table-success">
            <tr style="background-color: white">
                <td>Product ID</td>
                <td>Image Path</td>
                <td>Title</td>
                <td>Description</td>
                <td>Price</td>
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
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


    <br>

    <br>

    <br>

    <br>




@endsection
