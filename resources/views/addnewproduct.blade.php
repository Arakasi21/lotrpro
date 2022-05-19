@extends('layouts.layout')
@section('title') Add New Product @endsection
@section('main_content')

    <br>
    <div class="container" style="margin-bottom: 20px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add New Book</div>

                    <div class="card-body" style="background-color: white;">
                        Here you can add new books!!
                        <br>
                        Back to <a style="text-decoration: none" href="{{route('admin-view')}}">Admin Panel</a>
                        <br>
                        Back to <a style="text-decoration: none" href="{{route('product-view')}}">Books</a>
                    </div>


                </div>
            </div>
        </div>
    </div>


<div class="container">
    <div class="panel-heading">
        <h3 class="panel-title">Add New Book</h3>
    </div>
    <hr>
    <div class="panel-body">
    <form  class="row" action="{{url('insert-product')}}" method="POST" enctype='multipart/form-data'>
        {{ csrf_field() }}
        <div class="col-mb-3" style="margin-bottom:20px;">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Input Title of the lovely book">
        </div>


        <div class="col-mb-3" style="margin-bottom:20px;">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" class="form-control" name="description" placeholder="Add new description!"></textarea>
        </div>


        <div class="col-mb-3" style="margin-bottom:20px;">
            <label for="" class="form-label">Add image path</label>
            <input class="form-control" type="text" name="imagePath" placeholder="Image Path (harpers)">
        </div>


        <div class="col-mb-3" style="margin-bottom:20px;">
            <label for="description" class="form-label">Price</label>
            <input type="number" class="form-control" name="price" placeholder="Put here you $price">
        </div>
        <hr>
        <div class="col-sm-offset-3 col-sm-9" style="margin-bottom: 90px;">
            <button type="submit" class="btn btn-success">Add New Book</button>
        </div>
    </form>
        </div>
    </div>
@endsection
