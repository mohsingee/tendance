<?php

namespace App\Http\Controllers;

use App\Models\Cms;
use App\Models\ContactSubmission;
use App\Models\Register_user;
use App\Models\User;
use App\Models\Registration_submissions;
use App\Models\Contact_submissions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Validator;

class FrontendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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
            'message' => 'Data saved successfully!',
            'status' => 'success',
        ));
    }

    public function service_detail()
    {
        $data['page'] = 'service_detail';
        return view('frontend.pages.service_detail', compact('data'));
    }


    public function registration_submission(Request $request){
        $submited_data = $request->input();
        unset($submited_data['_token']);

        $added = Registration_submissions::create($submited_data);
        Registration_submissions::where('id', $added->id)->first();

        return response()->json(array(
            'data' => true,
            'message' => 'Registration successfully complete!',
            'status' => 'success',
        ));
    }

    public function contact_submission(Request $request){
        //dd($_FILES);
        //dd($request->input());
        $submited_data = $request->input();
        unset($submited_data['_token']);


        $added = Contact_submissions::create($submited_data);


        $response_date = [
            'status' => true,
            'msg' => 'Your data added successfully'
        ];

        return redirect(route('page.contact'))->with('success', 'Your data added successfully!');
    }
}
