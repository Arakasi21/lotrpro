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
            'phone' => 'required|min:11',
            'password' => 'required|min:4',
            'imagePath' => 'required'
        ]);

        $user = new User([
            'name' => $request -> input('name'),
            'email' => $request -> input('email'),
            'phone' => $request -> input('phone'),
            'password' => bcrypt($request->input('password')),
            'imagePath' => $request -> input('imagePath'),
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


    public function useredit(User $user)
    {
        $user = Auth::user();
        return view('user.useredit', compact('user'));
    }

    public function userupdate(Request $request)
    {

        $user = Auth::user();

        $user->name = $request->input('name');
        $user->email =$request->input('email');
        $user->phone = $request->input('phone');
        $user->imagePath = $request -> input('imagePath');
        $user->password = $request -> input('password');

        $user->save();
        return redirect()->route("user.profile");
    }

    public function userdestroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin-view')->with('success', 'User deleted.');;
    }

}
