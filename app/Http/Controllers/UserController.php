<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Cart;
use Auth;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Session;
class UserController extends Controller
{
    public function getSignup(){
        return view('user.signup');
    }

    public function postSignup(Request $request){
        $this->validate($request,[
            'name' => 'required|min:3',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4',
        ]);

        $user = new User([
            'name' => $request -> input('name'),
            'email' => $request -> input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        $user->save();

        Auth::login($user);

        if (Session::has('oldUrl')) {
            $oldUrl = Session::get('oldUrl');
            Session::forget('oldUrl');
            return redirect()->to($oldUrl);
        }

        return redirect()->route('shop.index');
    }

    public function getSignin(){
        return view('user.signin');
    }
    public function postSignin(Request $request){
        $this->validate($request,[
            'email' => 'email | required',
            'password' => 'required | min:4'
        ]);

    if (Auth::attempt(['email' => $request -> input('email'),'password' => $request -> input('password')])){

        return redirect()->route('user.profile');
        }
    return redirect()->back();
    }

    public function getProfile(){
        $orders = Auth::user()->orders;
        $orders->transform(function($order, $key) {
            $order->cart = unserialize(base64_decode($order->cart));
            return $order;
        });
        return view('user.profile', ['orders' => $orders]);
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route("user.signin");
    }
}
