@extends('layouts.layout')
@section('title') Cart @endsection
@section('main_content')

    @if(Session::has('cart'))
        <div class="container" style="margin-top: 50px;">
            <div class="row  gx-3 gy-2 align-items-center">
                <div class="col">
                    <ul class="liist-group">
                        @foreach($products as $product)
                            <li class="list-group-item">

                                <strong>{{$product['item']['title']}}</strong>
                                <span class="badge bg-success">{{$product['price']}}</span>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-bs-toggle="dropdown">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a style="text-decoration: none" href="#">Reduce by 1</a></li>
                                        <li><a style="text-decoration: none" href="#">Reduce All</a></li>
                                    </ul>
                                </div>
                                <span class="badge bg-secondary">{{$product['qty']}}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center" style="margin-bottom: 480px">
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
@endsection
