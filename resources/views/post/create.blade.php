@extends('layouts.layout')
@section('title') Profile
@endsection
@section('main_content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="main">
                    <h3><a>Laravel 8 Review Rating System.</a></h3>
                    <form role="form" action="{{route('post.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Post Title<span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="author">Post Author<span class="text-danger">*</span></label>
                            <input type="text" name="author" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Post Description<span class="text-danger">*</span></label>
                            <input type="text" name="description" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn btn-secondary">save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
