@extends('layouts.layout')

@section('title')
    STORE
@endsection
<div class="indexshopback">
@section('main_content')

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
    </svg>
    @if(Session::has('success'))
        <div class="row  d-flex justify-content-center row-cols-1 row-cols-sm-2 row-cols-md-4" >
            <div class="col gx-1 gy-2 align-items-center  d-flex justify-content-center">
                <div id="charge-message" class="alert alert-success" role="alert"> <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg> {{Session::get('success')}}</div></div>
    </div>
    @endif
    @foreach($products->chunk(4) as $productChunk)
        <div data-aos="fade-up" data-aos-duration="800">
            <div class="menukng-item">
                <div class="row row-cols-1 row-cols-md-4" style="margin: 10px;">
                    @foreach($productChunk as $product)
                    <div class="col mb-4">
                        <div class="card h-100">
                            <a href=""><img src="{{ $product->imagePath }}" class="card-img-top" alt="..."></a>
                            <div class="card-body shop">
                                <h5 class="card-title">{{ $product->title }}</h5>
                                <hr>
                                <p class="card-text description">{{ $product->description }}</p>
                                <hr>
                                <div class="clearfix">
                                    <div class="float-start price btn btn-success" ">${{ $product->price }}</div>
            <a  class="btn btn-primary" style="margin-left: 25%;" href="{{route('post.view',$product->id)}}">Review</a>
            <a href="{{route('product.addToCart', ['id'=> $product->id])}}" class="btn btn-success float-end">Add to cart</a>
        </div>
    </div>
</div>
</div>
@endforeach
</div>
</div>
@endforeach
    <script src="//code.jivo.ru/widget/GuagzEsLvI" async></script>
</div>
@endsection
