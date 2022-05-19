@extends('layouts.layout')
@section('title') Admin Panel @endsection
@section('main_content')
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Panel</div>

                    <div class="card-body" style="background-color: white">
                        Welcome to admin dashboard!
                        <br>
                        Redirect to <a  href="{{route('product-view')}}">Books</a>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <br>

    <div class="container">
    <table class="table table-striped table-bordered">
        <thead class="table-success">
        <tr style="background-color: white">
            <td>User ID</td>
            <td>Name</td>
            <td>Email</td>
        </tr>
        </thead>
        <tbody>
    @foreach($users as $user)
            <tr style="background-color: white">
                <td>{{$user['id']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['email']}}</td>
            </tr>
    @endforeach
            </tbody>
    </table>
    </div>



    <br>
    <div class="container">
        <table class="table table-striped table-bordered">
            <thead class="table-success">
            <tr style="background-color: white">
                <td>Order ID</td>
                <td>Name</td>
                <td>User Id</td>
                <td>Address</td>
                <td>Payment</td>
            </tr>
            </thead>
            <tbody>
            @foreach($ordersa as $ordera)
                <tr style="background-color: white">
                    <td>{{$ordera['id']}}</td>
                    <td>{{$ordera['name']}}</td>
                    <td>{{$ordera['user_id']}}</td>
                    <td>{{$ordera['address']}}</td>
                    <td>{{$ordera['payment_id']}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <br>

@endsection
