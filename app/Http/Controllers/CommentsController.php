<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;
class CommentsController extends Controller
{

 public function __construct(){
    $this->middleware('auth:web');
 }


   

   public function getAllComments(){
    $records = \App\Comments::all();

      return view('home', [
           'records' => $records

        ]);
    
   


}



















}
