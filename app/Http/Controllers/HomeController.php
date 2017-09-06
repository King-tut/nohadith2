<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use Illuminate\Support\Facades\DB;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        //$this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $id = "1";
         $gotall = \App\Blogs::all();
        $records = \App\Comments::all();
         $just = $records->sortByDesc('created_at');
    $fil = $just->where('pageid', intval($id));

    $current_url = $request->path();
    if($current_url == "/"){
      $current_url = "home";
       $hits = 0;
     $allpages = \App\PageCounter::all();
     $finds = $allpages->where('pagename', $current_url);
     $name ;

 }

     if($finds){
      foreach ($finds as $key => $value) {
        $name = $value->pagename;
     }
     
     }


     if($current_url != $name ){
        $hits++;
        $new_link = new \App\PageCounter;
        $new_link->pagename = $current_url;
        $new_link->hits = $hits;
        
       
       $new_link->save();
     }
        else{
            
            $hits++;
           $new_hit = \App\PageCounter::find($current_url);

           $new_hit->hits = $new_hit->hits+1;
           $new_hit->save();




          
            
     
        }
        
    
$authority = $gotall->where('cat', 'Authority of Quran');
   $falsesunnah = $gotall->where('cat', 'Falsehood of sunnah');
   $children = $gotall->where('cat', 'Children of Israel');
   $women = $gotall->where('cat', 'Womens issues');
   $vs  = $gotall->where('cat', 'Sunni VS Shia');
   $misc = $gotall->where('cat', 'misc');
       
 $favfive =  DB::table('blogspot')->orderBy('hits','desc')->take(5)->get();

 $latestfooter =  DB::table('blogspot')->orderBy('created_at','desc')->take(5)->get();

 $latestcomments =  DB::table('comments')->orderBy('comment','desc')->take(5)->get();
 
        
        return view('home', ['records' => $records, 'gotall' => $gotall, 'fil' => $fil, 'current_url' => $current_url, 'allpages' => $allpages, 'name' => $name, 'new_hit' => $new_hit, 'authority' => $authority, 'falsesunnah' => $falsesunnah, 'children' => $children,'women' => $women, 'vs' => $vs, 'misc' => $misc, 'favfive' => $favfive, 'latestfooter' => $latestfooter, 'latestcomments' => $latestcomments]);
    }


 public function getAllComments(Request $request){
    $id = "1";
    $records = \App\Comments::all();
     $just = $records->sortByDesc('created_at');
    $fil = $just->where('pageid', intval($id));
    $gotall = \App\Blogs::all();
    $comment = new \App\Comments;
    $newComment = $request->input('comment');
     $pageId = $request->input('pageid');
    $comment->comment = $newComment;
    $comment->name = Auth::user()->name; 
    $comment->pageid = $pageId; 
    $comment->save();


    

    
   
return back()->withInput();
      /*return view('home', [
           
           'comment' => $comment,
           'records' => $records,
           'gotall' => $gotall,
           'fil' => $fil

        ]);*/
}

 public function getAllPosts(){
    



 }



}
