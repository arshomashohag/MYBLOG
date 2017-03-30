<?php

namespace App\Http\Controllers;

use App\Author;
use App\Quote;
use Illuminate\Http\Request;


/**
* 
*/
class QuoteController extends Controller{
	
	public function getIndex($author=null){

        if(!is_null($author)){
        	$quote_author = Author::where('name',$author)->first();

        	if($quote_author){
        		$quotes = $quote_author->quotes()->orderBy('created_at', 'desc')->get();
        	}
        	else{
        	$quotes = Quote::orderBy('created_at', 'desc')->get();	
        	}
        }
        else{
     	$quotes = Quote::orderBy('created_at', 'desc')->get();
        }
        

		return view('index', ['quotes'=>$quotes]);
	}

	public function postQuote(Request $request){
      
        $this->validate($request, [

        	'author'=>'required|max:120|alpha',
        	'title'=>'required|max:120',
        	'blog'=>'required|max:1000'
        ]);

		$author_text = ucfirst($request['author']);
		$quote_title = ucfirst($request['title']);
		$quote_text = $request['blog'];


        
 		$author = Author::where('name', $author_text)->first();

 		if (!$author) {
 			$author = new Author();
 			$author->name = $author_text;
 			$author->save();
 		}

 		$blog = new Quote();

 		$blog->title = $quote_title;
 		$blog->quote = $quote_text;
     

 		$author->quotes()->save($blog);

 		return redirect()->route('home')->with([
 			'success'=>'Blog Saved Successfully!!'
 			]);


     	
	}



	public function deleteBlog($quote_id){
      	
      	$quote = Quote::find($quote_id);

      	if( count($quote->author->quotes) ===1){
      		$quote->author->delete();
      	}

      	$quote->delete();

      	return redirect()->route('home')->with(['success'=>'Blog deleted successfully !!']);
	}
}


?>