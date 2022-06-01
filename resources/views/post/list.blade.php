@extends('layouts.layout')
@section('title') Profile
@endsection
@section('main_content')
    <br>
<div class="container-fluid">
    <div class="row">

        @foreach($products as $product)
            <div class="card">
                <h2 style="color:#0071a1;">{{ $product->title }}</h2>
                <h5 style="color:#e91e63;">Published at : {{$post->created_at->format('jS \\of F Y') }}</h5>


                <p style="font-size: 16px;">{{ $post->description }}</p>
                <p><b><a href="{{route('post.view',$post->id)}}">Read Article</a></b></p>

            </div>

        @endforeach
</div>
</div>
    <br>
@endsection
