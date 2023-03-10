<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ContactSubmission;
use App\Models\Register_user;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.pages.index');
    }

    public function about(){
        return view('frontend.pages.about');
    }

    public function shop(){
        return view('frontend.pages.shop');
    }

    public function stores(){
        return view('frontend.pages.stores');
    }

    public function offers(){
        return view('frontend.pages.offers');
    }

    public function joinUs(){
        return view('frontend.pages.join-us');
    }

    public function loginRegister(){
        return view('frontend.pages.login-register');
    }

    public function contactUs(){
        return view('frontend.pages.contact-us');
    }

    public function checkout(){
        return view('frontend.pages.checkout');
    }

    public function clubtendance(){
        return view('frontend.pages.clubtendance');
    }

    public function indexopticien(){
        return view('frontend.pages.indexopticien');
    }

    public function brands(){
        return view('frontend.pages.brands');
    }

    public function cart(){
        return view('frontend.pages.cart');
    }

    public function userRegister(Request $request){
        Register_user::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>encrypt($request->password)
        ]);
        return response()->json(array(
            'data' => true,
            'message' => 'Registraion successffully complete!',
            'status' => 'success',
        ));
    }

    public function contactSubmission(Request $request){
        ContactSubmission::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'service'=>$request->service,
            'object_name'=>$request->object_name,
            'message'=>$request->message
        ]);
        return response()->json(array(
            'data' => true,
            'message' => 'Data saved successffully!',
            'status' => 'success',
        ));
    }
}