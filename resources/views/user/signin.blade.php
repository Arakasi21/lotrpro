@extends('layouts.layout')
@section('title')Sign In
@endsection
@section('main_content')
    <div class="row signups">
        <div class="col-md-12">
            <h1>Sign In</h1>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif
            <form action="{{route('user.signin')}}" method="post">
                <div class="form-group">
                    <input type="text" id="email" name="email" placeholder="email">
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" placeholder="password">
                </div>
                <button type="submit" class="btn btn-primary">Sign In</button>
                {{csrf_field()}}
            </form>
            <p style="font-size: 14px; margin-top: 10px;">Don't have an account? <a href="{{route('user.signup')}}">Sign Up instead!</a></p>
        </div>
    </div>
@endsection
