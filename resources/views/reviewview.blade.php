@extends('layouts.layout')
@section('title') Admin Panel @endsection
@section('main_content')
    <br>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Control Panel</div>
                    <div class="card-body" style="background-color: white; text-align: center">
                        Welcome to admin dashboard!
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


    <br>

    <div class="container">
        <h1 class="display-5">Users</h1>
        <hr>
        <div class="table-wrap">
            <table class="table table-bordered table-responsive">
                <thead class="table-success">
                <tr style="background-color: white">
                    <td>#ID</td>
                    <td>#Book ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>Comments</td>
                    <td>Rating</td>
                    <td>Action</td>
                </tr>
                </thead>
                <tbody>
                @foreach($reviews as $review)
                    <tr style="background-color: white">
                        <td>{{$review['id']}}</td>
                        <td>{{$review['product_id']}}</td>
                        <td>{{$review['name']}}</td>
                        <td>{{$review['email']}}</td>
                        <td>{{$review['phone']}}</td>
                        <td>{{$review['comments']}}</td>
                        <td>{{$review['star_rating']}}</td>


                        <td>
                            <form action="{{ route('reviewdestroy', $review->id)}}" method="post">
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
    </div>


    <br>


@endsection
