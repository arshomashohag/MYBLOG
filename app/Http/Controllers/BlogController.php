<?php
namespace App\Http\Controllers;

use App\Author;
use App\Quote;
use Illuminate\Http\Request;

/**
* 
*/
class BlogController extends Controller
{
	function getBlog($id=null){

	       $quotes = Quote::all();

	       
			if(!is_null($id)){
	           $show = Quote::where('id', $id)->first();

			}
			else{
	           $show = $quotes[0];
			}
	    return view('blog/blog', ['quotes'=>$quotes, 'show'=>$show]);
			
	}
	 
}




?>