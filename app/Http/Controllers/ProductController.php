<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\Order;
use App\Models\OrderItem;
use App\Mail\OrderMail;
use App\Mail\AdminOrder;
use App\Models\Shop;

class ProductController extends Controller
{
    public function addWishlist(Request $request){
        $ip = $_SERVER['REMOTE_ADDR'];
        if(Wishlist::where(['user_ip'=>$ip,'product_id'=>$request->id])->count()>0){
            return response()->json(array(
                'data' => false,
                'message' => 'Product already added in wishlist!',
                'status' => 'error',
            ));
        }
        else{
            Wishlist::create([
                'product_id'=>$request->id,
                'user_ip'=>$ip,
            ]);
            $count = Wishlist::where('user_ip',$ip)->count();
            return response()->json(array(
                'data' => true,
                'message' => 'Product successfully added in wishlist!',
                'count' => $count,
                'status' => 'success',
            ));
        }
    }

    public function showWishlist(){
        $ip = $_SERVER['REMOTE_ADDR'];
        $wishlilst = Wishlist::where('user_ip',$ip)->with('product')->get();
        if(count($wishlilst)>0){
            $html = view('frontend.pages.ajax_load.view_wishlist',compact('wishlilst'))->render();
            return response()->json(array(
                'view' => $html
            ));
        }
    }

    public function orderSubmit(Request $request){
        $ip = $_SERVER['REMOTE_ADDR'];
        $wishlists = Wishlist::where('user_ip',$ip)->with('product')->get();
        if(count($wishlists)>0){
            $order = Order::create([
                'user_ip'=>$ip,
                'name'=>$request->name,
                'email'=>$request->email,
                'phone_number'=>$request->phone_number,
                'service'=>$request->service,
                'object_name'=>$request->object_name,
                'visit_date'=>$request->visit_date,
                'message'=>$request->message,
            ]);
            foreach($wishlists as $wish){
                OrderItem::create([
                    'order_id'=>$order->id,
                    'product_id'=>$wish->product_id,
                    'user_ip'=>$wish->user_ip,
                ]);
            }
            Wishlist::where('user_ip',$ip)->delete();
            $order = Order::where('id',$order->id)->first();

            \Mail::to($request->email)->send(new OrderMail($order));            
            \Mail::to(env('MAIL_USERNAME'))->send(new AdminOrder($order));

            $count = Wishlist::where('user_ip',$ip)->count();
            return response()->json(array(
                'data' => true,
                'message' => 'Order successfully done!',
                'count' => $count,
                'status' => 'success',
            ));
        }
        else{
            return response()->json(array(
                'data' => false,
                'message' => 'Your wishlist is empty!',
                'status' => 'error',
            ));
        }
    }

    public function removeWishlist($id){
        Wishlist::where('id',$id)->delete();
        $ip = $_SERVER['REMOTE_ADDR'];
        $wishlilst = Wishlist::where('user_ip',$ip)->with('product')->get();
        if(count($wishlilst)>0){
            $html = view('frontend.pages.ajax_load.view_wishlist',compact('wishlilst'))->render();
            return response()->json(array(
                'view' => $html,
                'count' => count($wishlilst)
            ));
        }
        else{
            return response()->json(array(
                'view' => '<p class="text-center">No records found.</p>',
                'count' => count($wishlilst)
            ));
        }
    }

    public function tryImage($id){
        $shop = Shop::find($id);
        return view('frontend.pages.try-image',compact('shop'));
    }
}
