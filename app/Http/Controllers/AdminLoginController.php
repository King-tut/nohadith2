<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{

 public function __construct(){
    $this->middleware('guest:admin');
 }




   public function showLoginForm(){
    return view('auth/admins/login');
   }

   
   public function login(Request $request){
   	//validate the form data
   	$this->validate($request, [
   		'email' => 'required',
   		'password' => 'required|min:6'
   		]);
    //attmept to login
    
    if(Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request->password], $request->remember)){
     
      return view('auth/admins/superadmin');




    }
 // if unsuccessful, then redirect back to loin with the form data
    else{
    	 return redirect()->back()->withInput($request->only('email', 'remember'));
    }

   


}



















}
