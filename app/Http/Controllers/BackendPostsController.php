<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Auth;
use Route;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
class BackendPostsController extends Controller{

	public function __construct()
    {
        $this->middleware('auth:admin');
    }
	
public function index(){
	return view('backend/createblog');
}


 public function makeNewPost(Request $request){
 	$hits = 0;
  
  $blog = new \App\Blogs;
$blog->title = $request->input('title');
$blog->pic = $_FILES['image']['name'];
$blog->metatags = $request->input('metatags');
$blog->bodysmall = $request->input('bodysmall');
$blog->cat = $request->input('cat');

$blog->hits = $hits+1;
$blog->save();

$getfile = \App\Blogs::find($blog->id);
$file_name = $request->file('image')->storeAs('src/images/main', $_FILES['image']['name']);
$file_path = $request->file('image')->path();



 if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"src/images/main/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }







return redirect()->action('BackendPostsController@makeNewPost', ['getfile' => $getfile, 'file_path' => $file_path]
    );

 }


 public function managePosts(Request $request)
{
	$blogs = \App\Blogs::all();
	$allpages = \App\Pagecounter::all();
	$currenturl = $request->path();
	$hits= 0;
	
	

	
	
     
  

	return view('backend/manageposts', ['blogs' => $blogs, 'allpages' => $allpages]);
}

public function deletePosts(Request $request, $id){
  $blogs = \App\Blogs::all();
  $post  = \App\Blogs::find(intval($id));
  $post->delete();
  
    return back()->withInput();
  
}

public function editPosts(Request $request, $id){
	 $blogs = \App\Blogs::all();
	 $post  = \App\Blogs::find(intval($id));
	return view('backend/editpost', ['post' => $post]);
  


}

public function finalEdit(Request $request, $id){
	$blogs = \App\Blogs::all();
	 $post  = \App\Blogs::find(intval($id));
	 $post->title = $request->input('title');
$post->metatags = $request->input('metatags');
$post->bodysmall = $request->input('bodysmall');
$post->save();
	return redirect('/manageposts');
}





}



?>