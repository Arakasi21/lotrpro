@extends('layouts.layout')
@section('title') Profile
@endsection
@section('main_content')
    <div class="signupss">
        <div class="col-md-12">
           <h1>User Profile</h1>
            <p>Welcome : {{ Auth::user()->email }} !</p>
            <p>Account created: {{ Auth::user()->created_at}}</p>
            <p>Last Login Time: {{ auth()->user()->last_sign_in_at}}</p>
            <p>Current Login Time: {{ auth()->user()->current_sign_in_at}}</p>
        </div>

        <section style="margin-top: 30px;">
            <hr class="style-eight">
            <h2>My Orders</h2>
            @foreach($orders as $order)
                <div class="container" style="margin-top: 40px;">
                    <div class="card" style="background-color: lightgrey">
                        <div class="card-body bg-light" style="border: 2px black">
                            <ul class="list-group">
                                @foreach($order->cart->items as $item)
                                    <li class="list-group-item">
                                        {{ $item['item']['title'] }} | {{ $item['qty'] }} Book  <span class="badge rounded-pill bg-secondary" style="margin-left: 940px; font-weight: bold;">${{ $item['price'] }}</span>

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
        </section>
    </div>
@endsection
