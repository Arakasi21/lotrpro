@extends('layouts.layout')
@section('title') User Edit
@endsection
@section('main_content')


    <div class="container rounded mt-5 mb-5" style="background-color: #f9edd8;">
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://cdn.icon-icons.com/icons2/2506/PNG/512/user_icon_150670.png"><span class="font-weight-bold">{{ Auth::user()->name }}</span><span class="text-black-50">{{ Auth::user()->email }}</span><span> </span></div>
            </div>
            <div class="col-md-6 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 style="color: black" class="text-right">Profile Settings</h4>
                    </div>



        <div class="panel-heading">
            <h3 class="panel-title">User Edit Profile</h3>
        </div>

        <hr>


    <form  method="POST" action="{{url('user/user-update')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('patch') }}


        <div style="margin-bottom: 18px;">
            <input style="width: 100%" type="text" placeholder="Write Name" name="name"/>
        </div>

        <div style="margin-bottom: 18px;">
            <input style="width: 100%" type="email"  placeholder="Write Email" name="email"/>
        </div>

        <div style="margin-bottom: 18px;">
            <input  style="width: 100%" type="password"  placeholder="Confirm Password" name="password" />
        </div>


        <hr>
        <div class="row">
            <a style="width: 50%" class="dropdown-item" href="{{route('user.profile')}}">Return To Profile</a>
            <button style="width: 50%;" type="submit">Edit user</button>
        </div>


</form>
        </div>
</div>

            </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
@endsection
