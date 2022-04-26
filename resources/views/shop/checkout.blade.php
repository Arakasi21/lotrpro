@extends('layouts.layout')
@section('title') Checkout @endsection
@section('main_content')

    <div class="container" style="margin-top: 50px;">
        <div class="row  gx-3 gy-2 align-items-center">
            <div class="col">
                <h1>Checkout</h1>
                <h4 style="color: darkgreen">Your Total: ${{$total}}</h4>
                <div class="charge-error" class="alert alert-danger {{Session::has('error') ? 'hidden' : ''}}">{{Session::get('error')}}</div>
                <form action="{{route('checkout')}}" method="post" id="checkout-form">

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" class="form-control" required name="name">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" id="address" class="form-control" required name="address">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="card-name">Card Holder Name</label>
                                <input type="text" id="card-name" class="form-control" data-stripe="name" required>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="card-number">Credit Card Number</label>
                                <input type="text" id="card-number" class="form-control" data-stripe="number" required>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="card-expiry-month">Expiration Month</label>
                                        <input type="text" id="card-expiry-month" class="form-control" data-stripe="exp_month" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="card-expiry-year">Expiration Year</label>
                                        <input type="text" id="card-expiry-year" class="form-control" data-stripe="exp_year" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="card-cvc">CVC</label>
                                <input type="text" id="card-cvc" class="form-control" data-stripe="cvc" required>
                            </div>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <button type="submit" class="submit btn btn-success" style="margin-bottom: 90px;">Buy Now!</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="{{URL::to('src/js/checkout.js')}}"></script>

@endsection
