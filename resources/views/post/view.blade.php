@extends('layouts.layout')
@section('title') Profile
@endsection
@section('main_content')
        <div class="card" style="background-color: #f9edd8">
            <div style="margin-left: 20%; margin-right: 20%">
                <div class="justify-content-center align-items-center">
                    <br>
                    <h2 style="color:#0071a1;">{{ $post_detail->title }}</h2>
                    <p style="color:#e91e63; margin-left: 28%">Book in store from : {{$post_detail->created_at->format('jS \\of F Y') }}</p>
                    <hr>
                    <img style="margin-left: 30%" src="{{ $post_detail->imagePath }}">
                    <hr>
                    <p style="margin-left: 10%; margin-right: 10%; font-size: 20px">{{ $post_detail->description }}</p>

                <div/>
                <hr>

            <div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
                <div>
                    <div class="row mt-5">
                        <h4 style="color: #1a202c">Review Section :</h4>
                        <div class="col-sm-12 mt-5">
                            @foreach($post_detail->ReviewData as $review)
                                <div class="container">
                                    <div class="cards" style="background-color: #f9edd8">
                                    <img src="https://cdn.icon-icons.com/icons2/2506/PNG/512/user_icon_150670.png" class="avatar">
                                    <span style="font-size: 20px" class="font-weight-bold ml-2">{{$review->name}}</span>
                                    <p class="mt-1">
                                        @for($i=1; $i<=$review->star_rating; $i++)
                                            <span><i class="fa fa-star text-warning"></i></span>
                                        @endfor
                                        <span style="font-size: 20px" class="font ml-2">{{$review->email}}</span>
                                    </p>
                                        <div class="rounded" style="padding: 10px;background-color: #f2f2f2;">

                                            <p style="font-size: 18px">
                                                {{$review->comments}}
                                            </p>

                                        </div>
                                </div>
                                    </div>
                                    <hr>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- Review store Section -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 mt-4 ">
                        <form class="py-2 px-4" action="{{route('review.store')}}" style="box-shadow: 0 0 10px 0 #ddd;" method="POST" autocomplete="off">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$post_detail->id}}">
                            <div class="row justify-content-end mb-1">
                                <div class="col-sm-8 float-right">
                                    @if(Session::has('flash_msg_success'))
                                        <div class="alert alert-success alert-dismissible p-2">
                                            <strong>Success!</strong> {!! session('flash_msg_success')!!}.
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <p class="font-weight-bold ">Review</p>
                            <div class="form-group row">
                                <div class=" col-sm-6">
                                    <input class="form-control" type="text" name="name"  maxlength="40" value="{{ Auth::user()->name }}" readonly required/>
                                </div>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" name="email"  maxlength="80" value="{{ Auth::user()->email }}" readonly required/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-0">
                                    <input class="form-control" type="hidden" name="phone" placeholder="Phone" value="+7777777777" maxlength="40"/>
                                </div>
                                <div class="col-sm-6">
                                    <div class="rate">
                                        <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" checked id="star4" class="rate" name="rating" value="4"/>
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" class="rate" name="rating" value="2">
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col-sm-12 ">
                                    <textarea class="form-control" name="comment" rows="6 " placeholder="Comment" maxlength="200"></textarea>
                                </div>
                            </div>
                            <div class="mt-3 ">
                                <button class="btn btn-sm py-2 px-3 btn-info">Submit
                                </button>
                            </div>
                        </form>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
