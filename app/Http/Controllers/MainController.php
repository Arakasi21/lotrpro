<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\User;

use Illuminate\Database\DatabaseManager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Illuminate\Support\Facades\DB;
use Session;
use Stripe\Stripe;
use Stripe\Charge;


class MainController extends Controller
{
    public function indexa() {
        return view('kingdoms');
    }

    public function kingdoms() {
        return view('kingdoms');
    }

    public function getIndex(){
        $products = Product::all();
        return view('shop.index', ['products' => $products]);
    }

    public function getAddToCart(Request $request, $id){
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart',$cart);
        return redirect()->route('shop.index');
    }


    public function getReduceByOne($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingCart');
    }

    public function getRemoveItem($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('product.shoppingCart');
    }

    public function getCart(){
        if(!Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout(){
        if(!Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request)
    {
        if(!Session::has('cart')){
            return redirect()->route('shop.shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey('sk_test_51Kr6r0GglTF8YBVIoMJWlPmUV9DrqVn3Vrpj0SOa2FnvhMf4mtWrxCUGUw8qlZaMqJ7dPHHzt1JgSasjB2Zz7nFZ00gdw621RH');
        try {
            $charge = Charge::create(array(
                "amount" => $cart->totalPrice * 100,
                "currency" => "usd",
                "source" => "tok_visa",
                "description" => "Book purchase"
            ));
            $order = new Order();
            $order -> cart = base64_encode(serialize($cart));
            $order -> address = $request -> input('address');
            $order -> name = $request -> input('name');
            $order -> payment_id = $charge->id;

            Auth:: user()->orders()->save($order);

        } catch(\Exception $e){
            return redirect() -> route('checkout')->with('error', $e -> getMessage());
        }
        Session::forget('cart');
        return redirect()-> route('shop.index')->with('success', "Successfully purchased book!!!");
    }

    public function adminView(){
        $data = User::all()->sortBy('id');;
        $dataorder = Order::all()->sortBy('id');
        return view('adminview' ,['users' => $data],['ordersa' => $dataorder]);
    }

    public function productview(){
        $prod = Product::all()->sortBy('id');
        return view('productview', ['products' => $prod], compact('prod'));
    }


    public function addnewproduct(){
        return view('addnewproduct');
    }

    public function insert(Request $request){
        $product =  new Product();
        $product-> title = $request->input('title');
        $product-> description = $request->input('description');
        $product-> imagePath = $request->input('imagePath');
        $product-> price = $request->input('price');
        $product->save();
        return redirect()->route('product-view');
    }
}

