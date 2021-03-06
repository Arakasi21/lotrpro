@extends('layouts.layout')
@section('title')Sign Up
@endsection
@section('main_content')
<div class="row signups">
    <div class="col-md-12">
        <h1>Sign Up</h1>
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <p>{{$error}}</p>
            @endforeach
        </div>
        @endif
        <form action="{{route('user.signup')}}" method="post">
            <div class="form-group">
                <input type="text" id="name" name="name" placeholder="name">
            </div>
            <div class="form-group">
                <input type="text" id="email" name="email" placeholder="email">
            </div>

            <div class="form-group">
                <input type="text" id="phone" name="phone" placeholder="phone">
            </div>

            <div class="form-group">
                <input type="hidden" id="imagePath" name="imagePath" value="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_1280.png">
            </div>

            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="password">
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
            {{csrf_field()}}
        </form>
        <p style="font-size: 14px; margin-top: 10px;">Already have an account? <a href="{{route('user.signin')}}">Sign In instead!</a></p>
    </div>
</div>
@endsection
