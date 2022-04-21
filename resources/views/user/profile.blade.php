@extends('layouts.layout')
@section('title')Proifle
@endsection
@section('main_content')
    <div class="row signups">
        <div class="col-md-12">
           <h1>User Profile</h1>
            <p>Привет: {{ Auth::user()->email }}</p>
            <p>account created: {{ Auth::user()->created_at}}</p>
        </div>
    </div>
@endsection
