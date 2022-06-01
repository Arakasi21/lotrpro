@extends('layouts.layout')
@section('title') Admin Panel @endsection
@section('main_content')

    <br>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Order Control Panel</div>
                    <div class="card-body" style="background-color: white; text-align: center">
                        Welcome to Order dashboard!
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
        <h1 class="display-5">Orders</h1>
        <hr>
        <table class="table table-striped table-bordered"  id="" >
            <thead class="table-success">
            <tr style="background-color: white">
                <td>#</td>
                <td>User Id</td>
                <td>Name</td>
                <td>Address</td>
                <td>Payment</td>
                <td>Cart</td>
                <td>Action</td>

            </tr>
            </thead>
            <tbody>
            @foreach($ordersa as $ordera)
                <tr style="background-color: white">
                    <td>{{$ordera['id']}}</td>
                    <td>{{$ordera['user_id']}}</td>
                    <td>{{$ordera['name']}}</td>
                    <td>{{$ordera['address']}}</td>
                    <td>{{$ordera['payment_id']}}</td>
                    <td>
                                            @foreach($ordera->cart->items as $item)
                                                <li class="list-group-item d-flex justify-content-between align-items-center" style="color: dark; background-color:  #e5dfd3;">
                                                    {{ $item['item']['title'] }} | {{ $item['qty'] }} Book
                                                    <span class="badge bg-success rounded-pill">${{ $item['price'] }}</span>
                                                </li>
                                            @endforeach

                    <td>
                        <form action="{{ route('orderdestroy', $ordera->id)}}" method="post">
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

@endsection
