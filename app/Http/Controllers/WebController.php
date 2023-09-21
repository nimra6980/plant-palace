<?php

namespace App\Http\Controllers;
use App\Models\plants;
use App\Models\cart;
use App\Models\order;
use App\Models\contact;
use App\Models\wishlist;
use App\Models\accessories;
use App\Models\feedback;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        $badge = "sale"; // Replace with the actual badge value
      
        $plants = plants::where("badge", $badge)->get();
        return view('web.home',compact('plants'));
    }
    public function productdetail($id){
        $plant = plants::findOrFail($id);
        $related = plants::paginate('4');
        return view('web.productdetail',compact('plant','related'));
    }

    public function product(){
        $product = plants::all();
        return view('web.product',compact('product'));
    }
    public function indoor(){
        $category = "indoor"; // Replace with the actual badge value
      
        $plants = plants::where("category", $category)->get();
        return view('web.indoor',compact('plants'));
    }
    public function outdoor(){
        $category = "outdoor"; // Replace with the actual badge value
      
        $product = plants::where("category", $category)->get();
        return view('web.outdoor',compact('product'));
    }
    public function flowering(){
        $category = "flowering"; // Replace with the actual badge value
      
        $product = plants::where("category", $category)->get();
        return view('web.flowering',compact('product'));
    }
    public function non_flower(){
        $category = "non_flower"; // Replace with the actual badge value
      
        $product = plants::where("category", $category)->get();
        return view('web.non_flower',compact('product'));
    }
    public function succlents(){
        $category = "succlents"; // Replace with the actual badge value
      
        $product = plants::where("category", $category)->get();
        return view('web.succlents',compact('product'));
    }
    public function accessories(){
    
      
        $item = accessories::all();
        return view('web.accessories',compact('item'));
    }
    public function wishlist(){
    
      
        $item = wishlist::all();
        return view('web.wishlist',compact('item'));
    }
    public function add_wishlist($id){
        try {
            // Your database query that could cause the integrity constraint violation
        } catch (\PDOException $e) {
            if ($e->getCode() === '23000') {
                // Duplicate key error
                echo "Sorry, the record with this ID already exists.";
            } else {
                // Other database error
                echo "An error occurred: " . $e->getMessage();
            }
        }
        $plant= plants::find($id);
        $wishlist= new wishlist ;
       
        $wishlist->name=$plant->name;
        $wishlist->image=$plant->image;
        $wishlist->price=$plant->price;
     
        $wishlist->id=$plant->id;
    
        $wishlist->save();
      
      return redirect()->back();
      
    }
    public function detaillaccessories($id){
    
      $plant= accessories::findOrFail($id);
        $related = accessories::all();
        return view('web.detail_accessories',compact('related','plant'));
    }
     public function medicinal(){
        $category = "medicinal"; // Replace with the actual badge value
      
        $product = plants::where("category", $category)->get();
        return view('web.medicinal',compact('product'));
    }

    // cart
    public function add_cart(Request $request , $id)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $product = plants::find($id);
            $cart = new Cart();
            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->user_id = $user->id;
            $cart->product_title = $product->name;
            $cart->price = $product->price*$request->quantity;
          
            $cart->image = $product->image;
            $cart->Product_id = $product->id;
            $cart->quantity = $request->quantity;
            $cart->save();
            return redirect()->back();
        }else{
            return redirect('login');
        }
    }
    public function show_cart(){
        $cart = cart::all();
        return view('web.cart',compact('cart'));
    }
    public function remove_cart($id)
    {
        $data=cart::find($id);
        $data->delete();
        return redirect()->back()->with('massage','Cart deleted successfully !');
    }

  
        public function cod()
    {
        $user=Auth::user();
        $userid = $user->id;
        $data=cart::where('user_id','=',$userid)->get();

        foreach ($data as $data) 
        {
            $order = new Order;
            $order->name = $data->name;
            $order->email = $data->email;
            $order->user_id = $data->user_id;
            $order->price = $data->price;
            $order->image = $data->image;
            $order->Product_id = $data->id;
            $order->product_title = $data->product_title;
            $order->quantity = $data->quantity;
            $order->Payment_Status ='Cash On Delivery';
            $order->delivery_Status ='Processing';
            $order->phone = '753458346';
            $order->address = 'apna';
            $order->save();
            $cart_id = $data->id;
            $cart = Cart::find($cart_id);
            $cart->delete();
        }
    
        return redirect()->route('feedback');
    }
    public function contact(){
        return view('web.contact');
    }
    public function createcontact(Request $request){
        $contact = new contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        
    }
    public function createfeedback(Request $request){
            $user = Auth::user();
            $feedback = new feedback();
            $feedback->name = $user->name;
            $feedback->userid = $user->id;
            $feedback->message = $request->message;
            $feedback->save();

        
    }
    public function feedback(){
        return view('web.feedback');
    }
    public function about(){
        return view('web.about');
    }
}
