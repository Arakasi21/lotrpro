@extends('layouts.layout')
@section('title') Cart @endsection
@section('main_content')

    @if(Session::has('cart'))
        <div class="container" style="margin-top: 50px;">
            <div class="row gx-3 gy-2 align-items-center">
                <div class="panel-heading">
                    <h3 class="panel-title">Your Cart</h3>
                </div>

                <div class="table-wrap">
                    <table class="table table-borderless table-striped text-center align-middle table-responsive" >
                        <thead class="table">
                        <tr style="background-color: darkkhaki; font-family: lotr; font-size:20px;">
                            <td>Book Image</td>
                            <td>Book Title</td>
                            <td>Price</td>
                            <td>Action</td>
                            <td>Quantity</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr style="background-color: #e5dfd3;">
                                <td><img class="cartimg" src="{{$product['item']['imagePath']}}"></td>
                                <td><strong>{{$product['item']['title']}}</strong></td>
                                <td> <span class="badge bg-success">{{$product['price']}}</span></td>
                                <td> <div class="btn-group">
                                        <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-bs-toggle="dropdown">Action <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a style="text-decoration: none" href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}">Reduce by 1</a></li>
                                            <li><a style="text-decoration: none" href="{{ route('product.remove', ['id' => $product['item']['id']]) }}">Reduce All</a></li>
                                        </ul>
                                    </div></td>
                                <td> <span class="badge bg-secondary">{{$product['qty']}}</span></td>
                        @endforeach
                        </tbody>
                    </table>
                </div>

        <br>
            </div>
        <div class="col justify-content-md-center" style="margin-bottom: 430px">
            <div class="col col-lg-2">
              <strong style="margin-right: 50px;">Total: {{   $totalPrice}}$</strong>
                <a href="{{route('checkout')}}" class="btn btn-success">Checkout</a></div>
            </div>
        </div>
    @else
        <div class="row justify-content-md-center" style="margin-top: 100px;margin-bottom: 600px;">
            <div class="col col-lg-2">
                <h2>No Items in Cart!</h2>
            </div>
        </div>
    @endif

    <script src="//code.jivo.ru/widget/GuagzEsLvI" async></script>
@endsection
