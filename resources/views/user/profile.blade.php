@extends('layouts.layout')
@section('title') Profile
@endsection
@section('main_content')



    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-3" style="background-color: #e9ddc7; border-right: 2px solid black;">
                <div class="signupss">
                    <img  width="200px" height="200" src="https://www.pngall.com/wp-content/uploads/12/Lord-Of-The-Rings-Transparent.png" alt="">
                    <div class="">
                        <h1>User Profile  <a class="btn btn-success btn-sm rounded-0" href="{{route('user-edit')}}" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a></h1>

                        <hr>
                        <p>Welcome : {{ Auth::user()->name }}!</p>
                        <p>{{ Auth::user()->email }}</p>

                    </div>
                    <div style="margin-top: 40px;" >
                            <hr class="style-eight">
                        <p style="font-size: 24px;">Account created: {{ Auth::user()->created_at}}</p>
                        <p style="font-size: 24px;">Last Login Time: {{ Auth()->user()->last_sign_in_at}}</p>
                        <p style="font-size: 24px;">Current Login Time: {{ Auth()->user()->current_sign_in_at}}</p>
                    </div>

                </div>
            </div>

            <div class="col-9" style="background-color: #D3AC6E;">


        <section style="margin-top: 30px;">

            <img width="900px" src="https://images-cdn.fantasyflightgames.com/filer_public/60/f7/60f7dbdb-c8bc-46c8-a95d-c3f47d48af2f/jme01_logo.png" alt="">
            <hr class="style-eight">
            <h2>My Orders</h2>
            @foreach($orders as $order)
                <div class="container" style="margin-top: 40px;">
                    <div class="card" style="background-color:  #e1caa5">
                        <div class="card-body" style="border: 2px black; background-color:  #e5dfd3;">
                            <div class="panel-heading">
                                <h3 class="panel-title">Your checkout</h3>
                            </div>
                            <ul class="list-group">
                                @foreach($order->cart->items as $item)
                                    <li class="list-group-item d-flex justify-content-between align-items-center" style="color: dark; background-color:  #e5dfd3;">
                                        {{ $item['item']['title'] }} | {{ $item['qty'] }} Book
                                        <span class="badge bg-success rounded-pill">${{ $item['price'] }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-footer">
                            <strong>Total Price: ${{ $order->cart->totalPrice }}</strong>
                        </div>
                    </div>
                </div>
            @endforeach
            <br>
        </section>

            </div>
        </div>
@endsection
