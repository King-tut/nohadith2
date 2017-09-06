<?php

namespace App\Http\Controllers;
//use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(){
   $data = DB::select("SELECT * FROM wtf");


    	return view('shop/play', [
           'data' => $data

    		]);
    }

   public function getName(Request $request){
   	  $name = $request->input('name');
   	  return view('shop/login', [
        'name' => $name
   	  	]);
   }



  public function checking(){
  	$records = \App\Product::all();
  	$nums = count($records);
  	return view('shop/money', ['records' => $records, 'count' => $nums]);
  }

}
