<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Auth;
use Route;
use Illuminate\Http\RedirectResponse;
class BlogsController extends Controller
{
   

    





function displaySingle(Request $request, $id){
   //$records = \App\Comments::where('pageid', $id); 
  $gotall = \App\Blogs::all();

$single = \App\Blogs::find($id);
$records = \App\Comments::all();
    $just = $records->sortByDesc('created_at');
    $fil = $just->where('pageid', intval($id));
    $hits = 0;
    $current_url = $request->path();
    if($single->pagename == "blank" || $single->pagename == "createblog" || $single->pagename == ""){
        $hits++;
      $single->pagename = $current_url;
       $single->hits = $single->hits;
        $single->save();
     
    }
    else{
        $hits++;
           

           $single->hits = $single->hits+1;
           $single->comments = count($fil);
           $single->save();
    }
  
    

   $favfive =  DB::table('blogspot')->orderBy('hits','desc')->take(5)->get();
     
   $authority = $gotall->where('cat', 'Authority of Quran');
   $falsesunnah = $gotall->where('cat', 'Falsehood of sunnah');
   $children = $gotall->where('cat', 'Children of Israel');

   
   
     
  

   

    

return view('postdata', ['single' => $single, 'records' => $records, 'fil' => $fil, 'current_url' => $current_url, 'authority' => $authority, 'falsesunnah' => $falsesunnah, 'children' => $children, 'favfive' => $favfive]);



}






public function blogComments(Request $request, $id){
    $single = \App\Blogs::find($id);
     $records = \App\Comments::all();
     $select  = DB::select("SELECT * FROM wtf WHERE pageid=$id");
    
    $comment = new \App\Comments;
    $newComment = $request->input('comment');
     $pageid = $request->input('pageid');
    $comment->comment = $newComment;
    $comment->name = Auth::user()->name; 
    $comment->pageid = $pageid; 
    $comment->save();
return back()->withInput();
  

}

//['records' => $records, 'comment' => $comment, 'single', $single]


public function shit(){
   
    
    return view('shop/damnit', ['records' => $records, 'just' => $just, 'fil' => $fil]);
}

}
