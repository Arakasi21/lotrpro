@extends('layouts.layout')
@section('title') Product @endsection
@section('main_content')

    <br>
    <br>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Book Edit Panel</div>
                    <div class="card-body" style="background-color: white;margin-bottom: 5px; text-align: center">

                        Welcome! Here you can edit your book!

                        <br>
                        <br>
                        <a  class="btn btn-primary" style="text-decoration: none" href="{{route('admin-view')}}">Admin Panel</a>

                        <a  class="btn btn-success" style="text-decoration: none" href="{{route('product-view')}}">Book Panel</a>
                    </div>


                </div>
            </div>
        </div>
    </div>


        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Editing Book</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('products.update', $product->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="stock_name">Book Title:</label>
                    <input type="text" class="form-control" name="title" value="{{ $product->title}}" />
                </div>

                <div class="form-group">
                    <label for="description">Book Description:</label>
                    <input type="text" class="form-control" name="description" value="{{ $product->description}}" />
                </div>

                <div class="form-group">
                    <label for="imagePath">Image URL (use harperaps!):*</label>
                    <input type="text" class="form-control" name="imagePath" value="{{ $product->imagePath}}" />
                </div>

                <div class="form-group">
                    <label for="price">Book price:*</label>
                    <input type="text" class="form-control" name="price" value="{{ $product->price}}" />
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>

    <br>

    <br>

    <br>
    <br>
    <br>
    <br>


@endsection
