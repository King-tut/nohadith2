<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Auth;
use Route;
use Illuminate\Http\RedirectResponse;
class ManageUserController extends Controller{

  public function __construct(){
    $this->middleware('auth:admin');
 }
	
public function index(Request $request){
	$allusers = \App\User::all();
	$usercomments = \App\Comments::all();
	$names = array() ;
	$num = array();
	$j =0;

  
for($i=0;  $i < count($allusers); $i++){
     
    array_push($names,  $allusers[$i]->name);
    array_push($num, $usercomments->where('name',$names[$i])->count());
    
     }
    
    
   $ans = array_combine($names, $num);
   $total_num_of_users = count($allusers);
   $total_num_of_comments = count($usercomments);
   $a;
   	if(arsort($ans)){
    $aa =  array_keys($ans);
    $a = $aa[0];
    $c = current($ans);

   	}
   	


        

     
  
  
return view('backend/manageusers', ['allusers' => $allusers, 'names' => $names, 'ans' => $ans, 'total_num_of_users' => $total_num_of_users, 'total_num_of_comments' => $total_num_of_comments, 'a' => $a, 'c' => $c]);
}


}

?>